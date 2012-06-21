<?php
/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class TC_ProductSelectorWidget extends WP_Widget {
	
    /**
     * Constructor
     *
     * @return void
     **/
	function TC_ProductSelectorWidget() {
		$widget_ops = array( 'classname' => 'tc_prodsel_widget', 'description' => 'Select Product Widget' );
		$this->WP_Widget( 'tc_prodsel_widget', 'Select Product', $widget_ops );
	}

    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme 
     * @param array  An array of settings for this widget instance 
     * @return void Echoes it's output
     **/
	function widget( $args, $instance ) {
		
		if (!CartAjax::hasCartInSession()){
			
		}
		
		
		error_log("TC_ProductSelectorWidget->widget()");
		extract( $args, EXTR_SKIP );
		//global $post;
		
		
		// Get all term ID's in a given taxonomy
		$taxonomy = 'tc_product_type';
		$taxonomy_terms = get_terms( $taxonomy, array(
		    'hide_empty' => 0,
		    'fields' => 'ids'
		) );

		// Use the new tax_query WP_Query argument (as of 3.1)
		$taxonomy_query = new WP_Query( array(
		    'tax_query' => array(
		        array(
		            'taxonomy' => $taxonomy,
		            'field' => 'id',
		            'terms' => $taxonomy_terms,
		        ),
		    ),
			'post__not_in' => array(
				1252, /* Super Variety Pack - Tasty Tubs */
				1253, /* Super Variety Pack - Mini Tasty Tubs */
				1249, /* Petite Nimbus - single */
				720,  /* Martini Puffs - single */
				721,  /* Cotton Candy Balls - single */
				1241, /* Cotton Candy Lollipops - single */
				723,  /* Cotton Candy Sugars */
				4078  /* Sweet Box Special */
				),
			'orderby'=>'title',
			'post_type' => 'tc_products',
			'posts_per_page' => -1
		) );
		
		
		
		//error_log(var_export($taxonomy_query, 1));
		echo $before_widget;
		


		//echo $before_widget;
		// echo $before_title;
		// echo ''; // Can set this with a widget option, or omit altogether
		// echo $after_title;
		
?>
		<table id="productDetailsTable" style="width:100%">
			<tbody>
				<tr>
					<td>Price:</td>
					<td id="priceColumn">$0.00</td>
				</tr>
			</tbody>
		</table>
<?php
					
					
		ob_start();			
?>
		<select id="product_dropdown">
		<?php	while ($taxonomy_query->have_posts()) : $taxonomy_query->the_post(); ?>
			<option value="<?php the_ID() ?>"> <?php the_title(); ?></option>
		<?php endwhile; ?>
		</select>
<?php
			echo do_shortcode('[maxbutton id="2"]');
?>
			<script type="text/javascript">
				var productModel = <?php echo "productModelJson" ?>
		    </script>
<?php
			
			
			echo $after_widget;
			
			$content = ob_get_contents();
		ob_end_clean();
	
		echo do_shortcode('[sws_blue_box]'. $content .'[/sws_blue_box]');
	
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
		error_log("TC_ProductSelectorWidget->form()");
		error_log(print_r($instance, 1));
		// display field names here using:
		// $this->get_field_id('option_name') - the CSS ID
		// $this->get_field_name('option_name') - the HTML name
		// $instance['option_name'] - the option value
	}
}


?>