<?
add_action( 'init', 'tc_widgets_init' );
add_action( 'widgets_init', create_function( '', "register_widget('TC_AddToCartWidget');" ) );


function tc_widgets_init(){

	register_sidebar(array (
		'name'=>'Add To Cart Area',
		'id'=>'tc-cart-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
	));
}


?>