<?php
/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class TC_AddToCartWidget extends WP_Widget {
	
    /**
     * Constructor
     *
     * @return void
     **/
	function TC_AddToCartWidget() {
		$widget_ops = array( 'classname' => 'tc_atc_widget', 'description' => 'Add To Cart Widget for Products' );
		$this->WP_Widget( 'tc_atc_widget', 'Add To Cart', $widget_ops );
	}

    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme 
     * @param array  An array of settings for this widget instance 
     * @return void Echoes it's output
     **/
	function widget( $args, $instance ) {
		error_log("TC_AddToCartWidget->widget()");
		error_log(print_r($args, 1));
		extract( $args, EXTR_SKIP );
		
// 		$style = <<<EOD
// 			<style type="text/css" media="screen">
// 				.tc_atc_widget{
// 					float:right;	
// 				}
// 
// 		    </style>
// EOD;
// 		echo $style;


		//echo $before_widget;
		// echo $before_title;
		// echo ''; // Can set this with a widget option, or omit altogether
		// echo $after_title;
		ob_start();			
			echo $before_widget;
			echo "Add to Cart";
			echo $after_widget;
			
			$content = ob_get_contents();
		ob_end_clean();
	
		echo do_shortcode('[sws_blue_box]'. $content .'[/sws_blue_box]');
	

		//
		// Widget display logic goes here
		//

	}

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings 
     * @return array The validated and (if necessary) amended settings
     **/
	function update( $new_instance, $old_instance ) {
		// update logic goes here
		$updated_instance = $new_instance;
		return $updated_instance;
	}

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     **/
	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance );
		error_log("TC_AddToCartWidget->form()");
		error_log(print_r($instance, 1));
		// display field names here using:
		// $this->get_field_id('option_name') - the CSS ID
		// $this->get_field_name('option_name') - the HTML name
		// $instance['option_name'] - the option value
	}
}


?>