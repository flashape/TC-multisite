<?php

// Add default settings and show Theme Settings page after activation
/*-----------------------------------------------------------------------------------*/

if (is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {

	add_action('admin_head','solostream_option_setup');
	header( 'Location: '.admin_url().'themes.php?page=theme-settings.php' );

}

function solostream_option_setup(){

	//Update EMPTY options
	$solostream_array = array();
	add_option('solostream_options',$solostream_array);

	$template = get_option('solostream_template');
	$saved_options = get_option('solostream_options');

	foreach($template as $option) {

		if($option['type'] != 'header'){

			$id = $option['id'];
			$std = $option['std'];

			if(empty($saved_options)) {
				update_option($id,$std);
				$solostream_array[$id] = $std;
			}
			else { //Store the old values over again.
				$solostream_array[$id] = $saved_options[$id];
			}

		}

	}

	update_option('solostream_options',$solostream_array);

}

// Theme Options
/*-----------------------------------------------------------------------------------*/

add_action('init','solostream_options');
function solostream_options(){

// Theme Settings
$themename = "WP-ClearVideo";
$shortname = "solostream";

// Populate theme settings in array for use in theme
global $solostream_options;
$solostream_options = get_option('solostream_options');

$GLOBALS['template_path'] = get_bloginfo('template_directory');

// Get Categories in a drop-down list
$categories_list = get_categories('hide_empty=0&orderby=name');
$getcat = array();
foreach($categories_list as $acategory) {
    $getcat[$acategory->cat_ID] = urldecode($acategory->category_nicename);
}
$category_dropdown = array_unshift($getcat, "Select a Category Slug");

// Set standard Body font and font choices
$font_choices = array(
			"",
			"Arial,Helvetica,sans-serif",
			"Georgia,Times,serif",
			"Rockwell,Georgia,serif",
			"Times,Georgia,serif",
			"Cambria,Georgia,serif",
			"Helvetica,Arial,sans-serif",
			"Verdana,Geneva,sans-serif",
			"Geneva,Verdana,sans-serif",
			"Tahoma,Verdana,sans-serif",
			"Trebuchet,Tahoma,sans-serif",
			"Calibri,Arial,sans-serif",
			"Impact,Arial,sans-serif",
			);

// Alternate Stylesheets
$alt_stylesheet_path = TEMPLATEPATH . '/styles/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) {
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }
    }
}

// Basic Site Settings

$options = array();

	$options[] = array(
			"name" => __("Basic Site Settings", "solostream"),
			"id" => $shortname."_basic_settings",
			"type" => "header");

	$options[] = array(
			"name" => __("Default Page Layout", "solostream"),
			"id" => $shortname."_layout",
			"type" => "select",
			"std" => "Content/SidebarWide",
			"options" => array(
				"Content | Sidebar-Wide",
				"Sidebar-Wide | Content",
				"Content | Sidebar-Narrow | Sidebar-Wide",
				"Sidebar-Narrow | Content | Sidebar-Wide",
				"Sidebar-Wide | Sidebar-Narrow | Content",
				"Sidebar-Wide | Content | Sidebar-Narrow",
				"Full-Width"),
			"help" => __("Select your preferred default layout.", "solostream"));

	$options[] = array(
			"name" => __("Alternate Stylesheet", "solostream"),
			"id" => $shortname."_alt_stylesheet",
			"std" => "default.css",
			"type" => "select",
			"options" => $alt_stylesheets,
			"help" => __("Select your theme's alternate stylesheet.", "solostream"));

	$options[] = array(
			"name" => __("Post Excerpts or Content", "solostream"),
			"id" => $shortname."_post_content",
			"type" => "select",
			"std" => "Excerpts",
			"options" => array("Excerpts", "Content"),
			"help" => __("On your home page and archive/category pages, you can display post excerpts or the full post content. See <a href='http://codex.wordpress.org/Glossary#Excerpt'>here</a> for more info.", "solostream"));

	$options[] = array(
			"name" => __("Add Post Thumbnail Images", "solostream"),
			"id" => $shortname."_show_thumbs",
			"type" => "select",
			"std" => "yes",
			"options" => array("yes", "no"),
			"help" => __("Select no to turn off post thumbnail images.", "solostream"));

	$options[] = array(
			"name" => __("Show Default Post Thumbnail Image", "solostream"),
			"id" => $shortname."_default_thumbs",
			"type" => "select",
			"std" => "yes",
			"options" => array("yes", "no"),
			"help" => __("If you don't add your own thumbnail image to a post, the theme can add a default, generic thumbnail image for you. To change the default thumbnail, you'll need a .jpg image named <strong>def-thumb.jpg</strong>. Upload it to the /images folder found within your theme folder.", "solostream"));

	$options[] = array(
			"name" => __("Show Default Image for Featured Posts", "solostream"),
			"id" => $shortname."_default_features",
			"type" => "select",
			"std" => "yes",
			"options" => array("yes", "no"),
			"help" => __("If you don't add your own Featured Article image to a post, the theme can add a default, generic featured image for you. To change the default featured article image, you'll need an image that's at least 375px x 250px named <strong>def-thumb2.jpg</strong>. For the full-width featured image, you'll need an image that's at least 990px x 320px named <strong>def-thumb3.jpg</strong>. Upload them to the /images folder found within your theme folder.", "solostream"));

	$options[] = array(
			"name" => __("Show Author Bio on Single Post", "solostream"),
			"id" => $shortname."_show_auth_bio",
			"type" => "select",
			"std" => "yes",
			"options" => array("yes", "no"),
			"help" => __("If you'd like to hide the author bio at the bottom of the single post page, select no above.", "solostream"));

	$options[] = array(
			"name" => __("Size of Gravatar", "solostream"),
			"id" => $shortname."_grav_size",
			"type" => "select",
			"std" => "60",
			"options" => array("60", "24", "36", "48", "72", "84", "96"),
			"help" => __("This is the pixel size of the Gravatar that will be used in the comments section and the author profile section found at the bottom of the single post page.", "solostream"));

// Subscription Form and Contact Settings

	$options[] = array(
			"name" => __("Subscription Form and Contact Settings", "solostream"),
			"id" => $shortname."_subscription_form_settings",
			"type" => "header");

	$options[] = array(
			"name" => __("Subscription Form Settings", "solostream"),
			"id" => $shortname."_subscribe_settings",
			"type" => "select",
			"std" => "No Subscription Form",
			"options" => array("No Subscription Form", "Use Google/FeedBurner Email", "Use Alternate Email List Form"),
			"help" => __("Google/FeedBurner Email allows publishers to deliver their content to subscribers via email. See <a href='http://www.feedburner.com/fb/a/publishers/fbemail'>here</a> for more info. If using this service, enter your Google/Feedburner Feed URI below.<br />You can also use an Alternate Email List provider. To do so, make your selection above, and enter the form code below", "solostream"));

	$options[] = array(
			"name" => __("Google/Feedburner URI", "solostream"),
			"id" => $shortname."_fb_feed_id",
			"std" => "",
			"type" => "text",
			"pre" => "http://feeds.feedburner.com/",
			"help" => __("Enter Google/Feedburner URI only (rather than the full URL).<br /> For example, in this Google/FeedBurner feed URL: http://feeds.feedburner.com/<strong>solostream</strong>, the Feed URI is <strong>solostream</strong>.", "solostream"));

	$options[] = array(
			"name" => __("Alternate Email List Form Code", "solostream"),
			"id" => $shortname."_alt_email_code",
			"std" => "",
			"type" => "textarea",
			"help" => __("If using an alternate email list provider, enter your subscription form code here.", "solostream"));

	$options[] = array(
			"name" => __("Twitter Username", "solostream"),
			"id" => $shortname."_twitter_url",
			"std" => "",
			"type" => "text",
			"pre" => "http://www.twitter.com/",
			"help" => __("Enter your Twitter Username.", "solostream"));

	$options[] = array(
			"name" => __("Twitter Link Text", "solostream"),
			"id" => $shortname."_twitter_link_text",
			"std" => __("Follow Me on Twitter", "solostream"),
			"type" => "textarea",
			"help" => "");

	$options[] = array(
			"name" => __("Facebook Username", "solostream"),
			"id" => $shortname."_facebook_url",
			"std" => "",
			"type" => "text",
			"pre" => "http://www.facebook.com/",
			"help" => __("Enter your Facebook Profile Username.", "solostream"));

	$options[] = array(
			"name" => __("Facebook Link Text", "solostream"),
			"id" => $shortname."_facebook_link_text",
			"std" => __("Connect on Facebook", "solostream"),
			"type" => "textarea",
			"help" => "");

	$options[] = array(
			"name" => __("Google Plus Username", "solostream"),
			"id" => $shortname."_gbuzz_url",
			"std" => "",
			"type" => "text",
			"pre" => "https://plus.google.com/",
			"help" => __("Enter your Google Plus Profile Username.", "solostream"));

	$options[] = array(
			"name" => __("Google Plus Link Text", "solostream"),
			"id" => $shortname."_gbuzz_link_text",
			"std" => __("Connect on Google Plus", "solostream"),
			"type" => "textarea",
			"help" => "");

	$options[] = array(
			"name" => __("LinkedIn Username", "solostream"),
			"id" => $shortname."_linkedin_url",
			"std" => "",
			"type" => "text",
			"pre" => "http://www.linkedin.com/in/",
			"help" => __("Enter your LinkedIn Profile Username.", "solostream"));

	$options[] = array(
			"name" => __("LinkedIn Link Text", "solostream"),
			"id" => $shortname."_linkedin_link_text",
			"std" => __("Connect on LinkedIn", "solostream"),
			"type" => "textarea",
			"help" => "");

	$options[] = array(
			"name" => __("LinkedIn Group", "solostream"),
			"id" => $shortname."_linkedin_group_url",
			"std" => "",
			"type" => "text",
			"pre" => "http://www.linkedin.com/groups/",
			"help" => __("Enter your LinkedIn Group Profile Username.", "solostream"));

	$options[] = array(
			"name" => __("LinkedIn Group Link Text", "solostream"),
			"id" => $shortname."_linkedin_group_link_text",
			"std" => __("Join Our LinkedIn Group", "solostream"),
			"type" => "textarea",
			"help" => "");

	$options[] = array(
			"name" => __("Flickr Username", "solostream"),
			"id" => $shortname."_flickr_url",
			"std" => "",
			"type" => "text",
			"pre" => "http://www.flickr.com/photos/",
			"help" => __("Enter your Flickr Profile Username.", "solostream"));

	$options[] = array(
			"name" => __("Flickr Link Text", "solostream"),
			"id" => $shortname."_flickr_link_text",
			"std" => __("Connect on Flickr", "solostream"),
			"type" => "textarea",
			"help" => "");

	$options[] = array(
			"name" => __("Flickr Group", "solostream"),
			"id" => $shortname."_flickr_group_url",
			"std" => "",
			"type" => "text",
			"pre" => "http://www.flickr.com/groups/",
			"help" => __("Enter your Flickr Group Profile Username.", "solostream"));

	$options[] = array(
			"name" => __("Flickr Group Link Text", "solostream"),
			"id" => $shortname."_flickr_group_link_text",
			"std" => __("Join Our Flickr Group", "solostream"),
			"type" => "textarea",
			"help" => "");

	$options[] = array(
			"name" => __("YouTube Username", "solostream"),
			"id" => $shortname."_youtube_url",
			"std" => "",
			"type" => "text",
			"pre" => "http://www.youtube.com/user/",
			"help" => __("Enter your Youtube Profile Username.", "solostream"));

	$options[] = array(
			"name" => __("YouTube Link Text", "solostream"),
			"id" => $shortname."_youtube_link_text",
			"std" => __("Connect on YouTube", "solostream"),
			"type" => "textarea",
			"help" => "");

// Site Title Settings

	$options[] = array(
			"name" => __("Site Title Settings", "solostream"),
			"id" => $shortname."_site_title_settings",
			"type" => "header");

	$options[] = array(
			"name" => __("Site Title Option", "solostream"),
			"id" => $shortname."_site_title_option",
			"type" => "select",
			"std" => "Basic Text-Type Title",
			"options" => array("Basic Text-Type Title", "Image/Logo-Type Title"),
			"help" => __("You can use simple text as your site title or you can use an image. If you have a Custom Image/Logo you'd like to use, you can enter the URL below.", "solostream"));

	$options[] = array(
			"name" => __("Custom Image/Logo URL", "solostream"),
			"id" => $shortname."_site_logo_url",
			"std" => "",
			"type" => "upload",
			"help" => __("Upload your logo file (logo width should not exceed 990px; height should not exceed 100px;), and enter the URL for the file location (e.g. http://www.mysite.com/images/logo.gif).<br /><strong>Also note: Make sure you DO NOT have any spaces in the filename for your logo file. For example: 'my logo.gif' will not work. Change the filename to 'mylogo.gif'</strong>.", "solostream"));

//	$options[] = array(
//			"name" => __("Custom Image/Logo Height", "solostream"),
//			"id" => $shortname."_site_logo_height",
//			"std" => "",
//			"type" => "text",
//			"help" => __("Enter the height of your custom image/logo image in px (e.g. 60px)", "solostream"));

//	$options[] = array(
//			"name" => __("Custom Image/Logo Position", "solostream"),
//			"id" => $shortname."_site_logo_position",
//			"std" => "0px 0px",
//			"type" => "text",
//			"help" => __("The first digit is the number of pixels to move the logo from the left. Second digit is the number of pixels to move the logo from the top of the header area. If unsure, leave the default values.", "solostream"));

	$options[] = array(
			"name" => __("Site Title Font Family", "solostream"),
			"id" => $shortname."_site_title_font_family",
			"type" => "select",
			"std" => "",
			"options" => $font_choices,
			"help" => __("Applies only to Basic Text-Type Title option.", "solostream"));

	$options[] = array(
			"name" => __("Site Title Color", "solostream"),
			"id" => $shortname."_site_title_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Applies only to Basic Text-Type Title option. Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Site Title Size", "solostream"),
			"id" => $shortname."_site_title_size",
			"type" => "text",
			"std" => "",
			"help" => __("Enter the size of your Site Title in px (e.g. 30px). Applies only to Basic Text-Type Title option.", "solostream"));

	$options[] = array(
			"name" => __("Site Title Weight", "solostream"),
			"id" => $shortname."_site_title_weight",
			"type" => "select",
			"std" => "",
			"options" => array("","normal","bold"),
			"help" => __("Applies only to Basic Text-Type Title option.", "solostream"));

//	$options[] = array(
//			"name" => __("Site Title Alignment", "solostream"),
//			"id" => $shortname."_site_title_align",
//			"type" => "select",
//			"std" => "",
//			"options" => array("","left","center","right"),
//			"help" => __("Applies only to Basic Text-Type Title option.", "solostream"));

	$options[] = array(
			"name" => __("Site Title Background Color", "solostream"),
			"id" => $shortname."_header_bg_color",
			"std" => "",
			"type" => "text-color",
			"help" => __("Leave blank to use default background. This is the entire header area behind the site title. Click on field to show color picker.", "solostream"));

// Home Page and Archive Page Layout

	$options[] = array(
			"name" => __("Home Page and Archive Page Layout", "solostream"),
			"id" => $shortname."_home_archive_layout",
			"type" => "header");

	$options[] = array(
			"name" => __("Home Page Post Layout", "solostream"),
			"id" => $shortname."_home_layout",
			"type" => "select",
			"std" => "Option 1 - Standard Blog Layout",
			"options" => array("Option 1 - Standard Blog Layout", "Option 2 - 2 Posts Aligned Side-by-Side", "Option 3 - Posts Arranged by Category Side-by-Side", "Option 4 - Posts Arranged by Category Stacked"),
			"help" => __("If using Option 3 or 4, complete the '<strong>Home Page Posts Arranged by Category</strong>' section (see link to left).", "solostream"));

	$options[] = array(
			"name" => __("Recent Posts/Articles Title", "solostream"),
			"id" => $shortname."_recent_posts_title",
			"type" => "text",
			"std" => "Recent Articles",
			"help" => __("Select a title for your recent blog posts/articles.", "solostream"));

	$options[] = array(
			"name" => __("Archive Page Post Layout", "solostream"),
			"id" => $shortname."_archive_layout",
			"type" => "select",
			"std" => "Option 1 - Standard Blog Layout",
			"options" => array("Option 1 - Standard Blog Layout", "Option 2 - 2 Posts Aligned Side-by-Side"),
			"help" => "");

// Home Page Posts Arranged by Category

	$options[] = array(
			"name" => __("Home Page Posts Arranged by Category", "solostream"),
			"id" => $shortname."_home_by_cat",
			"type" => "header");

	$options[] = array(
			"name" => __("How Many Posts In Each Category", "solostream"),
			"id" => $shortname."_num_home_posts_by_cat",
			"type" => "select",
			"std" => "3",
			"options" => array("1","2","3","4","5","6"),
			"help" => __("Select the number of posts in each category.", "solostream"));

	$options[] = array(
			"name" => __("Category Box 1", "solostream"),
			"id" => $shortname."_cat_box_1",
			"type" => "select",
			"std" => "Select a Category Slug",
			"options" => $getcat,
			"help" => __("Select the category slug for Category Box 1.", "solostream"));

	$options[] = array(
			"name" => __("Category Box 1 Title", "solostream"),
			"id" => $shortname."_cat_box_1_title",
			"type" => "text",
			"help" => __("Enter a title for Category Box 1.", "solostream"));

	$options[] = array(
			"name" => __("Category Box 2", "solostream"),
			"id" => $shortname."_cat_box_2",
			"type" => "select",
			"std" => "Select a Category Slug",
			"options" => $getcat,
			"help" => __("Select the category slug for Category Box 2.", "solostream"));

	$options[] = array(
			"name" => __("Category Box 2 Title", "solostream"),
			"id" => $shortname."_cat_box_2_title",
			"type" => "text",
			"help" => __("Enter a title for Category Box 2.", "solostream"));

	$options[] = array(
			"name" => __("Category Box 3", "solostream"),
			"id" => $shortname."_cat_box_3",
			"type" => "select",
			"std" => "Select a Category Slug",
			"options" => $getcat,
			"help" => __("Select the category slug for Category Box 3.", "solostream"));

	$options[] = array(
			"name" => __("Category Box 3 Title", "solostream"),
			"id" => $shortname."_cat_box_3_title",
			"type" => "text",
			"help" => __("Enter a title for Category Box 3.", "solostream"));

	$options[] = array(
			"name" => __("Category Box 4", "solostream"),
			"id" => $shortname."_cat_box_4",
			"type" => "select",
			"std" => "Select a Category Slug",
			"options" => $getcat,
			"help" => __("Select the category slug for Category Box 4.", "solostream"));

	$options[] = array(
			"name" => __("Category Box 4 Title", "solostream"),
			"id" => $shortname."_cat_box_4_title",
			"type" => "text",
			"help" => __("Enter a title for Category Box 4.", "solostream"));

	$options[] = array(
			"name" => __("Category Box 5", "solostream"),
			"id" => $shortname."_cat_box_5",
			"type" => "select",
			"std" => "Select a Category Slug",
			"options" => $getcat,
			"help" => __("Select the category slug for Category Box 5.", "solostream"));

	$options[] = array(
			"name" => __("Category Box 5 Title", "solostream"),
			"id" => $shortname."_cat_box_5_title",
			"type" => "text",
			"help" => __("Enter a title for Category Box 5.", "solostream"));

	$options[] = array(
			"name" => __("Category Box 6", "solostream"),
			"id" => $shortname."_cat_box_6",
			"type" => "select",
			"std" => "Select a Category Slug",
			"options" => $getcat,
			"help" => __("Select the category slug for Category Box 6.", "solostream"));

	$options[] = array(
			"name" => __("Category Box 6 Title", "solostream"),
			"id" => $shortname."_cat_box_6_title",
			"type" => "text",
			"help" => __("Enter a title for Category Box 6.", "solostream"));

	$options[] = array(
			"name" => __("List Other Recent Articles Below Category Boxes", "solostream"),
			"id" => $shortname."_other_articles",
			"type" => "select",
			"std" => "yes",
			"options" => array("yes", "no"),
			"help" => __("By default, Other Recent Articles will appear below your category boxes. Select no to remove them.", "solostream"));

	$options[] = array(
			"name" => __("Title for Other Recent Articles", "solostream"),
			"id" => $shortname."_other_title",
			"type" => "text",
			"std" => "Other Recent Posts",
			"help" => __("", "solostream"));

	$options[] = array(
			"name" => __("Number of Other Recent Articles", "solostream"),
			"id" => $shortname."_other_number",
			"type" => "text",
			"std" => "3",
			"help" => __("How many Other Recent Articles would you like to display?", "solostream"));

// Featured Posts

	$options[] = array(
			"name" => __("Featured Posts", "solostream"),
			"id" => $shortname."_home_featured_content",
			"type" => "header");

	$options[] = array(
			"name" => __("Featured Posts on Home Page", "solostream"),
			"id" => $shortname."_features_on",
			"type" => "select",
			"std" => "No",
			"options" => array("No", "Yes"),
			"help" => __("If you would like to add a featured articles slider to the home page, make your selection above.", "solostream"));

	$options[] = array(
			"name" => __("How Many Featured Posts", "solostream"),
			"id" => $shortname."_features_number",
			"type" => "text",
			"std" => "5",
			"help" => __("How many featured items would you like to display?", "solostream"));

	$options[] = array(
			"name" => __("Featured Posts Title", "solostream"),
			"id" => $shortname."_features_title",
			"type" => "text",
			"std" => "Featured Articles",
			"help" => __("This field applies only to the Narrow Width Featured Content Slider", "solostream"));

// Featured Pages

	$options[] = array(
			"name" => __("Featured Pages", "solostream"),
			"id" => $shortname."_featured_pages",
			"type" => "header");

	$options[] = array(
			"name" => __("Featured Pages on Home Page", "solostream"),
			"id" => $shortname."_featpage_on",
			"type" => "select",
			"std" => "No",
			"options" => array("No", "Yes"),
			"help" => __("If you would like to add featured pages to the home page select Yes above.", "solostream"));

	$options[] = array(
			"name" => __("Which Pages to Feature", "solostream"),
			"id" => $shortname."_featpage_ids",
			"type" => "text",
			"std" => "",
			"help" => __("Enter a comma-separated list of the <a rel='external' title='How to Find a WordPress Page ID' href='http://en.support.wordpress.com/pages/#how-to-find-the-page-id'>page ID's</a> to display in the featured slider (e.g. 1,2,3,4).<br /><span style='color:#006699;font-weight:bold;'>Note: List page IDs in the order you'd like them to appear on the featured slider.</span>", "solostream"));

// Advertisement Settings

	$options[] = array(
			"name" => __("Advertisement Settings", "solostream"),
			"id" => $shortname."_ad_settings",
			"type" => "header");

	$options[] = array(
			"name" => __("Display 468x60 Header Ad", "solostream"),
			"id" => $shortname."_ad468head",
			"type" => "select",
			"std" => "no",
			"options" => array("no", "yes"),
			"help" => __("Select yes to add the 468x60 banner advertisement in the site header next to the site title. Enter your own ad code below.", "solostream"));

	$options[] = array(
			"name" => __("Header 468x60 Header Ad Code", "solostream"),
			"id" => $shortname."_ad468head_code",
			"std" => "<a href='http://www.solostream.com'><img src='http://www.solostream.com/images/solo-banner-468-2.gif' alt='banner ad' /></a>",
			"type" => "textarea",
			"help" => __("Replace the above code with your own advertising code.", "solostream"));

	$options[] = array(
			"name" => __("Display 468x60 Post Ad", "solostream"),
			"id" => $shortname."_ad468",
			"type" => "select",
			"std" => "no",
			"options" => array("no", "yes"),
			"help" => __("Select yes to add the 468x60 banner advertisement just above your posts. Enter your own ad code below.", "solostream"));

	$options[] = array(
			"name" => __("468x60 Post Ad Code", "solostream"),
			"id" => $shortname."_ad468_code",
			"std" => "<a href='http://www.solostream.com'><img src='http://www.solostream.com/images/solo-banner-468-3.gif' alt='banner ad' /></a>",
			"type" => "textarea",
			"help" => __("Replace the above code with your own advertising code.", "solostream"));

	$options[] = array(
			"name" => __("Display 728x90 Top Ad", "solostream"),
			"id" => $shortname."_ad728",
			"type" => "select",
			"std" => "no",
			"options" => array("no", "yes"),
			"help" => __("Select yes to add the 728x90 banner advertisement just below your navigation bar. Enter your own ad code below.", "solostream"));

	$options[] = array(
			"name" => __("728x90 Top Ad Code", "solostream"),
			"id" => $shortname."_ad728_code",
			"std" => "",
			"type" => "textarea",
			"help" => __("Add your code for the 728x90 banner ad.", "solostream"));

	$options[] = array(
			"name" => __("Display 220x90 Top Ad", "solostream"),
			"id" => $shortname."_ad220",
			"type" => "select",
			"std" => "no",
			"options" => array("no", "yes"),
			"help" => __("Select yes to add the 220x90 banner advertisement to the right of the 728x90 banner ad just below your navigation bar. Enter your own ad code below.", "solostream"));

	$options[] = array(
			"name" => __("220x90 Top Ad Code", "solostream"),
			"id" => $shortname."_ad220_code",
			"std" => "",
			"type" => "textarea",
			"help" => __("Add your code for the 220x90 banner ad.", "solostream"));

	$options[] = array(
			"name" => __("Display 728x90 Bottom Ad", "solostream"),
			"id" => $shortname."_ad728_bottom",
			"type" => "select",
			"std" => "no",
			"options" => array("no", "yes"),
			"help" => __("Select yes to add the 728x90 banner advertisement just above the page footer or footer widgets. Enter your own ad code below.", "solostream"));

	$options[] = array(
			"name" => __("728x90 Bottom Ad Code", "solostream"),
			"id" => $shortname."_ad728_code_bottom",
			"std" => "",
			"type" => "textarea",
			"help" => __("Add your code for the 728x90 banner ad.", "solostream"));

	$options[] = array(
			"name" => __("Display 220x90 Bottom Ad", "solostream"),
			"id" => $shortname."_ad220_bottom",
			"type" => "select",
			"std" => "no",
			"options" => array("no", "yes"),
			"help" => __("Select yes to add the 220x90 banner advertisement to the right of the 728x90 banner ad above the page footer or footer widgets. Enter your own ad code below.", "solostream"));

	$options[] = array(
			"name" => __("220x90 Bottom Ad Code", "solostream"),
			"id" => $shortname."_ad220_code_bottom",
			"std" => "",
			"type" => "textarea",
			"help" => __("Add your code for the 220x90 banner ad.", "solostream"));


// Basic Style Settings

	$options[] = array(
			"name" => __("Basic Style Settings", "solostream"),
			"id" => $shortname."_basic_style_settings",
			"type" => "header");

	$options[] = array(
			"name" => __("Body Background Color", "solostream"),
			"id" => $shortname."_body_backgroundcolor",
			"std" => "",
			"type" => "text-color",
			"help" => __("Leave blank to use default body background. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Custom Body Background Image", "solostream"),
			"id" => $shortname."_custom_body_bg_image",
			"std" => "",
			"type" => "textarea",
			"help" => __("Upload your Custom Body Background Image and enter the URL for the file location (e.g. http://www.mysite.com/images/myimage.gif).<br /><strong>Also note: Make sure you DO NOT have any spaces in the file name for your Custom Body Background Image. For example: 'my image.gif' will not work. Change the filename to 'myimage.gif'</strong>.", "solostream"));

	$options[] = array(
			"name" => __("Custom Body Background Image Repeat", "solostream"),
			"id" => $shortname."_custom_body_bg_image_repeat",
			"type" => "select",
			"std" => "repeat",
			"options" => array("repeat", "no-repeat", "repeat-x", "repeat-y"),
			"help" => __("For info on this property, see <a href='http://www.w3schools.com/css/pr_background-repeat.asp'>here</a>.", "solostream"));

	$options[] = array(
			"name" => __("Custom Body Background Image Position", "solostream"),
			"id" => $shortname."_custom_body_bg_image_position",
			"type" => "text",
			"std" => "top left",
			"help" => __("For info on this property, see <a href='http://www.w3schools.com/css/pr_background-position.asp'>here</a>.", "solostream"));

	$options[] = array(
			"name" => __("Custom Body Background Image Attachment", "solostream"),
			"id" => $shortname."_custom_body_bg_image_attachment",
			"type" => "select",
			"std" => "fixed",
			"options" => array("fixed", "scroll"),
			"help" => __("For info on this property, see <a href='http://www.w3schools.com/Css/pr_background-attachment.asp'>here</a>.", "solostream"));

//	$options[] = array(
//			"name" => __("Page Border Width", "solostream"),
//			"id" => $shortname."_page_border_width",
//			"std" => "",
//			"type" => "select",
//			"options" => array("","1px","2px","3px","4px","5px","6px","7px","8px","9px","10px","11px","12px","13px","14px","15px","16px","17px","18px","19px","20px"),
//			"help" => __("If you'd like a border around the page, select the width above.", "solostream"));

//	$options[] = array(
//			"name" => __("Page Border Color", "solostream"),
//			"id" => $shortname."_page_border_color",
//			"std" => "",
//			"type" => "text-color",
//			"help" => __("Click on field to show color picker.", "solostream"));

//	$options[] = array(
//			"name" => __("Page Rounded Corners", "solostream"),
//			"id" => $shortname."_page_round_corners",
//			"std" => "",
//			"type" => "select",
//			"options" => array("","1px","2px","3px","4px","5px","6px","7px","8px","9px","10px","11px","12px","13px","14px","15px","16px","17px","18px","19px","20px"),
//			"help" => __("If you'd like rounded corners on your page, make your selection above. Note: This will only display on CSS3-compliant browsers.", "solostream"));

//	$options[] = array(
//			"name" => __("Page Box Shadow", "solostream"),
//			"id" => $shortname."_page_box_shadow",
//			"std" => "No",
//			"type" => "select",
//			"options" => array("No","Yes"),
//			"help" => __("Select Yes to activate the box-shadow effect around your page. Note: This will only display on CSS3-compliant browsers.", "solostream"));
	$std_font = '';
	$options[] = array(
			"name" => __("Page Font Color", "solostream"),
			"id" => $shortname."_body_font_color",
			"std" => "",
			"type" => "text-color",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Page Link Color", "solostream"),
			"id" => $shortname."_body_link_color",
			"std" => "",
			"type" => "text-color",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Page Link Hover Color", "solostream"),
			"id" => $shortname."_body_link_hover_color",
			"std" => "",
			"type" => "text-color",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Page Font Family", "solostream"),
			"id" => $shortname."_body_font_family",
			"type" => "select",
			"std" => $std_font,
			"options" => $font_choices,
			"help" => "");

	$options[] = array(
			"name" => __("Post Title Font Family", "solostream"),
			"id" => $shortname."_post_title_font",
			"type" => "select",
			"std" => $std_font,
			"options" => $font_choices,
			"help" => "");

	$options[] = array(
			"name" => __("Post Title Weight", "solostream"),
			"id" => $shortname."_post_title_weight",
			"type" => "select",
			"std" => "",
			"options" => array("","normal","bold"),
			"help" => "");

	$options[] = array(
			"name" => __("Post Title Link Color", "solostream"),
			"id" => $shortname."_post_title_link_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Post Title Hover Link Color", "solostream"),
			"id" => $shortname."_post_title_link_hover_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color.  Click on field to show color picker.", "solostream"));

// Top Nav Style Settings

	$options[] = array(
			"name" => __("Top Navigation Style Settings", "solostream"),
			"id" => $shortname."_topnav_style_settings",
			"type" => "header");

	$options[] = array(
			"name" => __("Top Navigation Font Family", "solostream"),
			"id" => $shortname."_topnav_font_family",
			"type" => "select",
			"std" => $std_font,
			"options" => $font_choices,
			"help" => "");

	$options[] = array(
			"name" => __("Top Navigation Font Size", "solostream"),
			"id" => $shortname."_topnav_size",
			"type" => "select",
			"std" => "",
			"options" => array("","8pt", "9pt", "10pt", "11pt", "12pt"),
			"help" => "");

	$options[] = array(
			"name" => __("Top Navigation Font Weight", "solostream"),
			"id" => $shortname."_topnav_weight",
			"type" => "select",
			"std" => "",
			"options" => array("","bold","normal"),
			"help" => "");

	$options[] = array(
			"name" => __("Top Navigation Background Color", "solostream"),
			"id" => $shortname."_topnav_bg_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Top Navigation Link Color", "solostream"),
			"id" => $shortname."_topnav_link_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Top Navigation Link Hover Color", "solostream"),
			"id" => $shortname."_topnav_link_hover_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Top Navigation Link Hover Background Color", "solostream"),
			"id" => $shortname."_topnav_link_hover_bg_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

// Main Content Style Settings

	$options[] = array(
			"name" => __("Main Content Style Settings", "solostream"),
			"id" => $shortname."_content_style_settings",
			"type" => "header");

	$options[] = array(
			"name" => __("Main Content Font Size", "solostream"),
			"id" => $shortname."_content_size",
			"type" => "select",
			"std" => "",
			"options" => array("","8pt", "9pt", "10pt", "11pt", "12pt"),
			"help" => "");

	$options[] = array(
			"name" => __("Main Content Link Color", "solostream"),
			"id" => $shortname."_content_link_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Main Content Hover Link Color", "solostream"),
			"id" => $shortname."_content_link_hover_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

// Sidebar Style Settings

	$options[] = array(
			"name" => __("Sidebar Style Settings", "solostream"),
			"id" => $shortname."_right_sidebar_style_settings",
			"type" => "header");

	$options[] = array(
			"name" => __("Sidebar Font Size", "solostream"),
			"id" => $shortname."_right_sidebar_size",
			"type" => "select",
			"std" => "",
			"options" => array("","8pt", "9pt", "10pt", "11pt", "12pt"),
			"help" => "");

	$options[] = array(
			"name" => __("Sidebar Link Color", "solostream"),
			"id" => $shortname."_right_sidebar_link_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Sidebar Hover Link Color", "solostream"),
			"id" => $shortname."_right_sidebar_hover_link_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

// Footer Style Settings

	$options[] = array(
			"name" => __("Footer Style Settings", "solostream"),
			"id" => $shortname."_footer_style_settings",
			"type" => "header");

//	$options[] = array(
//			"name" => __("Footer Background Color", "solostream"),
//			"id" => $shortname."_footer_bg_color",
//			"type" => "text-color",
//			"std" => "",
//			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Footer Font Color", "solostream"),
			"id" => $shortname."_footer_font_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Footer Font Size", "solostream"),
			"id" => $shortname."_footer_font_size",
			"type" => "select",
			"std" => "",
			"options" => array("","8pt", "9pt", "10pt", "11pt", "12pt"),
			"help" => "");

	$options[] = array(
			"name" => __("Footer Link Color", "solostream"),
			"id" => $shortname."_footer_link_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

	$options[] = array(
			"name" => __("Footer Hover Link Color", "solostream"),
			"id" => $shortname."_footer_hover_link_color",
			"type" => "text-color",
			"std" => "",
			"help" => __("Leave blank to use default color. Click on field to show color picker.", "solostream"));

update_option('solostream_template',$options);
update_option('solostream_themename',$themename);
update_option('solostream_shortname',$shortname);

}

add_action('admin_menu', 'mytheme_add_admin');

function mytheme_add_admin() {

	global $themename, $shortname, $options;
	$options = get_option('solostream_template');

	if ( @$_GET['page'] == basename(__FILE__) ) {

		if ( 'save' == @$_REQUEST['action'] ) {

			foreach ($options as $value) {
				update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

			foreach ($options as $value) {
				if( isset( $_REQUEST[ $value['id'] ] ) ) {
					update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
				} else {
					delete_option( $value['id'] );
				}
			}

			header("Location: themes.php?page=theme-settings.php&saved=true");
			die;

		} else if( 'reset' == @$_REQUEST['action'] ) {

			foreach ($options as $value) {
				if( $value['std'] ) {
					update_option( $value['id'], $value['std'] );
				} else {
					delete_option( $value['id'] );
				}
			}

			header("Location: themes.php?page=theme-settings.php&reset=true");
			die;

		}
	}

	$solostream_settings_page = add_theme_page(get_option('solostream_themename').__(" Theme Settings","solostream"), get_option('solostream_themename').__(" Theme Settings","solostream"), "edit_theme_options", basename(__FILE__), "mytheme_admin");
	add_action( "admin_print_scripts-$solostream_settings_page", 'solostream_admin_head' );
	add_action( "admin_print_styles-$solostream_settings_page", 'solostream_admin_head' );

}

function solostream_admin_head() {

	/* Solostream Admin StyleSheets */
	wp_enqueue_style('theme-settings', get_bloginfo('template_directory').'/admin/settings.css');
	wp_enqueue_style('thickbox');

	/* Solostream Admin Javascriptss */
	wp_enqueue_script('jquery');
	wp_enqueue_script('theme-uploader', get_bloginfo('template_directory').'/admin/theme-uploader.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('jquery-ui-per', get_bloginfo('template_directory').'/admin/jquery-ui-personalized-1.5.2.packed.js', array('jquery'));
	wp_enqueue_script('sprinkle-tabs', get_bloginfo('template_directory').'/admin/sprinkle-tabs.js', array('jquery'));
	wp_enqueue_script('jscolor', get_bloginfo('template_directory').'/admin/jscolor/jscolor.js');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');

}

function mytheme_admin() {

	global $themename, $shortname, $options;
	$options = get_option('solostream_template');

?>

<div id="settings-wrap" class="clearfix">

	<?php /* THIS IS THE RESET BUTTON THAT APPEARS IN THE TOPNAV BAR. USES ABSOLUTE POSITIONING IN STYLESHEET */ ?>
	<form method="post" class="button-reset-navbar">
		<input name="reset" class="button-secondary" type="submit" value="<?php _e('Delete Settings', "solostream"); ?>" onclick="return confirm('<?php _e('Click OK to reset. All settings will be deleted and reset.', "solostream"); ?>');" />
		<input type="hidden" name="action" value="reset" />
	</form>

	<div id="settings-head">
		<h2><?php _e('Thanks for using', "solostream"); ?> <?php echo get_option('solostream_themename'); ?></h2>
	</div>

	<div id="settings-nav" class="clearfix">
		<ul>
			<li><a target="blank" href="http://www.solostream.com/members/"><?php _e("Install Guide &amp; Tutorials", "solostream"); ?></a></li>
			<li><a target="blank" href="http://www.solostream.com/members/"><?php _e("Solostream Help Desk", "solostream"); ?></a></li>
			<li><a target="blank" href="http://www.solostream.com/members/"><?php _e("Download PSDs", "solostream"); ?></a></li>
		</ul>
	</div>

	<form id="solostream-settings" method="post" class="clearfix">

	<?php /* THIS IS THE SAVE BUTTON THAT APPEARS IN THE TOPNAV BAR. USES ABSOLUTE POSITIONING IN STYLESHEET */ ?>
	<div class="button-save-navbar">
		<input class="button-primary" name="save" type="submit" value="<?php _e('Save Changes', "solostream"); ?>" />
		<input type="hidden" name="action" value="save" />
	</div>

	<ul class="tabs">
		<li><a href="#welcome">Theme Support</a></li>
		<?php foreach ($options as $value) {
		if ($value['type'] == "header") { ?>
		<li><a href="#content_<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></li>
		<?php }
		} ?>
	</ul>

	<div id="welcome" class="content">

		<?php
			if ( @$_REQUEST['saved'] ) echo '<div id="message"><strong>Your Settings Have Been Saved.</strong></div>';
			if ( @$_REQUEST['reset'] ) echo '<div id="message"><strong>Your Settings Have Been Reset.</strong></div>';
		?>

		<h2 class="heading2"><?php echo get_option('solostream_themename'); ?> <?php _e("Theme Settings Page","solostream"); ?></h2>

		<div class="help2">
			<p><?php _e("Thanks so much for your purchase. A great deal of time, energy and brain power went into making this theme as simple and flexible as possible. On this page, you'll find oodles of optional settings, all available via the links to the left. If you're in a hurry, the theme will function just fine without changing any of the default values, although you may want to go ahead and fill in your Subscription Form and Contact Settings. On the other hand, if you're in the mood to tinker, go ahead and change some of the settings just to see what sort of site you can create for yourself.", "solostream"); ?></p>
			<p><strong><?php _e("Note: When you click the 'Save Changes' button, it will save changes for ALL theme settings.", "solostream"); ?></strong></p>
		</div>

		<h2 class="heading2"><?php echo get_option('solostream_themename'); ?> <?php _e("Theme Support","solostream"); ?></h2>

		<div class="help2">
			<p><?php _e("For many reasons, <strong>we do not provide theme support via site comments or email</strong>. If you need help with your theme, please visit the","solostream"); ?> <a target="blank" href="http://www.solostream.com/members/"><?php _e("Solostream Members Area", "solostream"); ?></a>. <?php _e("Thanks in advance for your understanding.","solostream"); ?></p>
		</div>

	</div>

<?php foreach ($options as $value) {

if ($value['type'] == "header") { ?>

<?php if ( $value['id'] != 'solostream_basic_settings' ) { ?>

		<div class="button-save">
			<input class="button-primary" name="save" type="submit" value="<?php _e('Save Changes', "solostream"); ?>" />
			<input type="hidden" name="action" value="save" />
		</div>

	</div>

<?php } ?>

	<div id="content_<?php echo $value['id']; ?>" class="content">

		<h2 class="heading"><?php echo $value['name']; ?></h2>

<?php } elseif ($value['type'] == "text") { ?>

		<h3 class="heading">
			<?php echo $value['name']; ?>
		</h3>

		<div class="help">
			<?php echo $value['help']; ?>
		</div>

		<div class="field">
			<strong><?php echo @$value['pre']; ?></strong><input name="<?php echo @$value['id']; ?>" id="<?php echo @$value['id']; ?>" type="<?php echo @$value['type']; ?>" value="<?php if ( get_option( @$value['id'] ) != "") { echo stripslashes(get_option( @$value['id'] ) ); } else { echo stripslashes(@$value['std']); } ?>" />
		</div>

<?php } elseif ($value['type'] == "text-color") { ?>

		<h3 class="heading">
			<?php echo $value['name']; ?>
		</h3>

		<div class="help">
			<?php echo $value['help']; ?>
		</div>

		<div class="field">
			<input style="background:url(<?php bloginfo('template_directory'); ?>/images/colorpicker.gif) 5px 5px no-repeat;padding:5px 5px 5px 26px;" class="color {hash:true,caps:false,required:false}" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" />
		</div>

<?php } elseif ($value['type'] == "textarea") { ?>

		<h3 class="heading">
			<?php echo $value['name']; ?>
		</h3>

		<div class="help">
			<?php echo $value['help']; ?>
		</div>

		<div class="field">
			<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" rows="3" cols="90"><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] ) ); } else { echo stripslashes($value['std'] ); } ?></textarea>
		</div>

<?php } elseif ($value['type'] == "upload") { ?>

		<h3 class="heading">
			<?php echo $value['name']; ?>
		</h3>

		<div class="help">
			<?php echo $value['help']; ?>
		</div>

		<div class="field">
			<textarea style="margin:0 0 10px;" name="<?php echo $value['id']; ?>" id="upload_image" rows="3" cols="90"><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] ) ); } else { echo stripslashes($value['std'] ); } ?></textarea><br />
			<input id="upload_image_button" type="button" class="button-secondary" value="Upload Image" />
		</div>


<?php } elseif ($value['type'] == "select") { ?>

		<h3 class="heading">
			<?php echo $value['name']; ?>
		</h3>

		<div class="help">
			<?php echo $value['help']; ?>
		</div>

		<div class="field">
			<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
				<?php
	 			$select_value = get_option($value['id']);
				foreach ($value['options'] as $option) {
				$selected = '';
				if($select_value != '') {
					if ( $select_value == $option) { $selected = ' selected="selected"';}
				} else {
					if ( isset($value['std']) ) {
						if ($value['std'] == $option) { $selected = ' selected="selected"'; }
					}
				}
				?>
				<option<?php echo $selected ?> style="padding:3px 10px;"><?php echo $option; ?></option>
				<?php } ?>
			</select>
		</div>

<?php
}
}
?>

		<div class="button-save">
			<input class="button-primary" name="save" type="submit" value="<?php _e('Save Changes', "solostream"); ?>" />
			<input type="hidden" name="action" value="save" />
		</div>

	</div>

</form>

<div class="button-reset clearfix">
	<form method="post">
		<input name="reset" class="button-secondary" type="submit" value="<?php _e('Delete Settings', "solostream"); ?>" onclick="return confirm('<?php _e('Click OK to reset. All settings will be deleted and reset.', "solostream"); ?>');" />
		<input type="hidden" name="action" value="reset" />
	</form>
</div>


</div>

<?php }
?>
