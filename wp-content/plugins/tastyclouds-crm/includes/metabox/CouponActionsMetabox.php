<?php
class CouponActionsMetabox extends davispressMetaBoxTools
{
    public function __construct()
    {
		//parent::davispressMetaBoxTools();
        add_action( 'addmetaboxes', array( &$this, 'onAddMetaboxes' ) );
        //add_action( 'addmetaboxes', array( &$this, 'addmetabox' ) );
        add_action( 'save_post', array( &$this, 'save' ), 10, 1 );
        add_action( 'load-edit.php', array( &$this, 'add_styles_scripts' ) );
        add_action( 'load-post-new.php', array( &$this, 'add_styles_scripts' ) );
	 	

    }

	function onAddMetaboxes(){
		$context = $this->getContext();
		
		
		foreach ( $this->metabox['pages'] as $page ) {
			if( !isset( $this->metabox['show_on'] ) ) {
				addmetabox( $this->metabox['id'], $this->metabox['title'], array(&$this, 'show'), $page, $this->metabox['context'], $this->metabox['priority']) ;
			} else {
				if ( 'id' == $this->metabox['show_on']['key'] ) {

					// If we're showing it based on ID, get the current ID					
					if( isset( $_GET['post'] ) ) $post_id = $_GET['post'];
					elseif( isset( $_POST['post_ID'] ) ) $post_id = $_POST['post_ID'];

					// If current page id is in the included array, display the metabox
					if ( isset( $post_id) && in_array( $post_id, $this->metabox['show_on']['value'] ) )
						add_meta_box( $this->metabox['id'], $this->metabox['title'], array(&$this, 'show'), $page, $this->metabox['context'], $this->metabox['priority']) ;
				}
			}
		}
	
	}
	
	function getPriority(){
		$this->metabox['priority'] = empty($this->metabox['priority']) ? 'high' : $this->metabox['priority'];
		return $this->metabox['priority'];
		
	}
	
	protected function getContext(){
		$this->metabox['context'] = empty($this->metabox['context']) ? 'normal' : $this->metabox['context'];	
		return $this->metabox['context'];
	}

    function addmetabox()
    {
	
		
        add_meta_box( 'tasty_coupon_metabox', 'Add Coupon', array( &$this, 'meta_box_cb' ), 'tc_crm_coupon', 'side');
    }

    function meta_box_cb( $post )
    {
        wp_nonce_field( 'coupon_actions_nonce', 'coupon_actions_nonce' );
        // add fields here
		$prefix = '_tc_crm_coupon_';
		$o = '';
		$o .= $this->checkbox( 'enabled', 'Enabled', $post->ID );
        
        $o .= $this->datePickerRange( $prefix.'start_date', 'Start Date', $prefix.'_end_date', 'End Date', $post->ID );
        // $o .= $this->textinput( 'name', 'Coupon Name', $post->ID, null, null, 'Only visible in admin' );
        $o .= $this->textinput( 'code', 'Coupon Code', $post->ID );
        $o .= $this->checkbox( 'is_single_use', 'Valid only once', $post->ID );
        $o .= $this->checkboxWithTextInput('limit_total_uses', '', 'limit_total_uses_count','Limit total number of uses', $post->ID);
        $o .= $this->checkboxWithTextInput('limit_total_uses_per_customer', '', 'limit_total_uses_per_customer_count', 'Limit total number of uses per customer', $post->ID);

		//$o. = $this->select( $prefix.'_start_date', 'Start Date', $prefix.'_end_date', 'End Date', $post->ID );

		

        echo $this->form_table( $o );
        // etc.
    }

    function save( $post_id )
    {
        // verify we can do this
        if( ! isset( $_REQUEST['wpse_nonce'] ) || ! wp_verify_nonce( $_REQUEST['wpse_nonce'], 'wpse_nonce' ) ) return;
        if( ! current_user_can( 'edit_post' ) ) return;

        // save data
        if( isset( $_REQUEST['_some_id'] ) )
            update_post_meta( $post_id, '_some_id', esc_attr( $_REQUEST['_some_id'] ) );
    }

    function add_styles_scripts()
    {
        // check and see if we're on the post type with the meta box
        if( ( isset( $_REQUEST['post'] ) && 'post' == get_post_type( $_REQUEST['post'] ) ) || ( isset( $_REQUEST['post_type'] ) && 'post' == $_REQUEST['post_type'] ) ) 
        {
            add_action( 'admin_print_scripts', array( &$this, 'scripts' ) );
            add_action( 'admin_print_styles', array( &$this, 'styles' ) );
        }
    }

    function scripts()
    {
        // wp_enqueue_script here
    }

    function styles()
    {
        // wp_enqueue_style here
    }

	protected function initMetaboxInfo(){
		$this->metabox = array(
		    'id' => 'tc_crm_enter_payment_metabox',
		    'title' => 'Enter Payment',
		    'pages' => array('order'), // post type
			'context' => 'side',
			'priority' => 'default',
			'show_names' => true, // Show field names left of input
			'fields' => array(
		        array(
		            'name' => 'Payment Type',
		            'id' => $prefix.'payment_type',
		            /*'desc' => 'Payment Type',*/
		            'type' => 'select',
					'options' => array(
						array('name' => 'Square', 'value' => 'square'),		
					)
		        ),
			    array(
		            'name' => 'Amount:',
		            'id' => $prefix.'payment_amount',
		            'type' => 'text_payment_amount',
		        ),				
				array(
		            'name' => 'Note:',
		            'id' => $prefix.'payment_note',
		            'type' => 'text',
		        ),				
				array(
					'name' => '',
		            'id' => $prefix.'payment_submit',
		            'type' => 'payment_submit',
		        ),
			)
		);
	}
}

