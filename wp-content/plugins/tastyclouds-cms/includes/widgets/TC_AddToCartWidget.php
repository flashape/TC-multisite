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
		extract( $args, EXTR_SKIP );
		global $post;
		$productID = $post->ID;
		$productModel = ProductProxy::getProductByID($productID);
		
		echo $before_widget;
		
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
		$basePrice = '$'.number_format($productModel['price'], 2, '.', '');
		
		$table = <<<EOT
		<table id="productDetailsTable" style="width:100%">
			<tbody>
				<tr>
					<td>Price:</td>
					<td>$basePrice</td>
				</tr>
			</tbody>
		</table>
EOT;
		echo $table;
					
					
		ob_start();			
			echo '<p>';
			include (TASTY_CMS_PLUGIN_INC_DIR . 'utils/quantity_dropdown.php');
			echo '</p>';
			$variations = ProductVariationRulesAjax::getVariationsForProduct($productID, true);


			foreach($variations as $variation){
				error_log(var_export($variation, 1));
				
				$variation['items'] = VariationItemAjax::getItemsForVariation($variation['id'], true);
				$variation['rules'] = ProductVariationRulesAjax::getRulesForVariation($productID, $variation['id'], $variation['p2p_id'], true);
			}

			$productModel['variations'] = $variations;
			
			
			
			
			$variationsDiv = '<div class="variationsDiv">';
			
			//TODO:  use a sperate factory method to generate the variation content.
			//TODO:  Make this work with other input types besides SELECT.
			
			//loop through each variation and add the UI for it.
			foreach($productModel['variations'] as $variation) {
				error_log(var_export($variation, 1));
				$variationsDiv .= '<p>'.$variation['label'] .' : ';
				
				// append p2p_id to the select id because that will always be unique.
				// salt the id with a timestamp and random number in case we have the same item in the cart multiple times.
				$ts = time();
				$r = mt_rand();
				$randomnumber= $ts + $r;
				
				$variationsDiv .= '<select id="variation_'.$variation['id'].'__p2pid_'.$variation['p2p_id'].'__r_'.$randomnumber.'" class="variationDropdown" style="width:150px">';
				
				//generate the list of variationItems
				foreach($variation['items'] as $variationItem) {
					$variationsDiv .= '<option value="'.$variationItem->id.'">'.$variationItem->title.'</option>';
				}
				
				$variationsDiv .= '</select>';
				$variationsDiv .= ' <span id="itemCount" style="font-style:italic;color:#333;font-size:10px;">(Count: '.$variation['itemCount'].')</span>';
				
				
				
				
				$variationsDiv .= '</p>';
			}
			
			
			
			$variationsDiv .= '</div>';
			

			$lineItem['name'] = $productModel['productName'];
			$basePrice = $productModel['price'];

			$itemPrice = $basePrice;
			
			echo $variationsDiv;
			
			echo do_shortcode('[maxbutton id="2"]');
			
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