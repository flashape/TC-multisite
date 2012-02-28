<?php
/**
 * This file handles the creation of the Simple Hooks admin menu.
 */


/**
 * Registers a new admin page, providing content and corresponding menu item
 * for the Simple Hooks Settings page.
 *
 * @since 1.8.0
 */
class Genesis_Simple_Hooks_Admin extends Genesis_Admin_Boxes {
	
	/**
	 * Create an admin menu item and settings page.
	 *
	 * @since 1.8.0
	 *
	 * @uses SIMPLEHOOKS_SETTINGS_FIELD settings field key
	 *
	 */
	function __construct() {
		
		$page_id = 'simplehooks';

		$menu_ops = array(
			'submenu' => array(
				'parent_slug' => 'genesis',
				'page_title'  => __( 'Genesis - Simple Hooks', 'simplehooks' ),
				'menu_title'  => __( 'Simple Hooks', 'simplehooks' )
			)
		);

		$page_ops = array(
			'screen_icon' => 'plugins',
		);

		$settings_field = SIMPLEHOOKS_SETTINGS_FIELD;

		$default_settings = array(
			
			/** Wordpress Hooks */
			'wp_head' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'wp_footer' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			/** Internal Hooks */
			'genesis_pre' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_pre_framework' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_init' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_setup' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			/** Document Hooks */
			'genesis_doctype' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_title' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_meta' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_before' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			/** Header hooks */
			'genesis_before_header' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_header' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_header_right' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_header' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_site_title' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_site_description' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			/** Content Hooks */
			'genesis_before_content_sidebar_wrap' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_content_sidebar_wrap' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_before_content' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_content' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			/** Loop Hooks */
			'genesis_before_loop' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_loop' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_loop' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_after_endwhile' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_loop_else' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			/** Post Hooks */
			'genesis_before_post' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_post' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_before_post_title' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_post_title' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_post_title' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_before_post_content' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_post_content' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_post_content' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			/** Comment Hooks */
			'genesis_before_comments' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_comments' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_list_comments' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_comments' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_before_pings' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_pings' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_list_pings' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_pings' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_before_comment' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_comment' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_comment' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_before_comment' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_comment' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_before_comment_form' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_comment_form' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_comment_form' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			/** Sidebar Hooks */
			'genesis_before_sidebar' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_sidebar' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_sidebar' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_before_sidebar_widget_area' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_sidebar_widget_area' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_before_sidebar_alt' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_sidebar_alt' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_sidebar_alt' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_before_sidebar_alt_widget_area' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_sidebar_alt_widget_area' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			'genesis_before_footer' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_footer' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_after_footer' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),

			/** Admin Hooks */
			'genesis_import_export_form' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_export' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_import' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_theme_settings_metaboxes' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			'genesis_upgrade' => array( 'content' => '', 'php' => 0, 'shortcodes' => 0 ),
			
		);

		/** Create the page */
		$this->create( $page_id, $menu_ops, $page_ops, $settings_field, $default_settings );
		
	}
	
	/**
	 * Load the necessary scripts for this admin page.
	 *
	 * @since 1.8.0
	 *
	 */
	function scripts() {
		
		/** Load parent scripts as well as Genesis admin scripts */
		parent::scripts();
		genesis_load_admin_js();
		
	}
	
	/**
 	 * Register meta boxes on the Simple Hooks Settings page.
 	 *
 	 * @since 1.8.0
 	 *
 	 */
	function metaboxes() {

		add_meta_box( 'simplehooks-wp-hooks', __( 'WordPress Hooks', 'simplehooks' ), array( $this, 'wp_hooks_box' ), $this->pagehook, 'main' );
		add_meta_box( 'simplehooks-document-hooks', __( 'Document Hooks', 'simplehooks' ), array( $this, 'document_hooks_box' ), $this->pagehook, 'main' );
		add_meta_box( 'simplehooks-header-hooks', __( 'Header Hooks', 'simplehooks' ), array( $this, 'header_hooks_box' ), $this->pagehook, 'main' );
		add_meta_box( 'simplehooks-content-hooks', __( 'Content Hooks', 'simplehooks' ), array( $this, 'content_hooks_box' ), $this->pagehook, 'main' );
		add_meta_box( 'simplehooks-loop-hooks', __( 'Loop Hooks', 'simplehooks' ), array( $this, 'loop_hooks_box' ), $this->pagehook, 'main' );
		add_meta_box( 'simplehooks-post-hooks', __( 'Post/Page Hooks', 'simplehooks' ), array( $this, 'post_hooks_box' ), $this->pagehook, 'main' );
		add_meta_box( 'simplehooks-comment-list-hooks', __( 'Comment List Hooks', 'simplehooks' ), array( $this, 'comment_list_hooks_box' ), $this->pagehook, 'main' );
		add_meta_box( 'simplehooks-ping-list-hooks', __( 'Ping List Hooks', 'simplehooks' ), array( $this, 'ping_list_hooks_box' ), $this->pagehook, 'main' );
		add_meta_box( 'simplehooks-comment-hooks', __( 'Single Comment Hooks', 'simplehooks' ), array( $this, 'comment_hooks_box' ), $this->pagehook, 'main' );
		add_meta_box( 'simplehooks-comment-form-hooks', __( 'Comment Form Hooks', 'simplehooks' ), array( $this, 'comment_form_hooks_box' ), $this->pagehook, 'main' );
		add_meta_box( 'simplehooks-sidebar-hooks', __( 'Sidebar Hooks', 'simplehooks' ), array( $this, 'sidebar_hooks_box' ), $this->pagehook, 'main' );
		add_meta_box( 'simplehooks-footer-hooks', __( 'Footer Hooks', 'simplehooks' ), array( $this, 'footer_hooks_box' ), $this->pagehook, 'main' );

	}
	
	function wp_hooks_box() {

		simplehooks_form_generate( array(
			'hook' => 'wp_head',
			'desc' => __( 'This hook executes immediately before the closing <code>&lt;/head&gt;</code> tag.', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'wp_footer',
			'desc' => __( 'This hook executes immediately before the closing <code>&lt;/body&gt;</code> tag.', 'simplehooks' )
		) );

		submit_button( __( 'Save Changes', 'simplehooks' ), 'primary' );

	}

	function document_hooks_box() {

		simplehooks_form_generate( array(
			'hook' => 'genesis_title',
			'desc' => __( 'This hook executes between the main document <code>&lt;title&gt;&lt;/title&gt;</code> tags.', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_meta',
			'desc' => __( 'This hook executes in the document <code>&lt;head&gt;</code>.<br /> It is commonly used to output <code>META</code> information about the document.', 'simplehooks' ),
			'unhook' => array( 'genesis_load_favicon' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_before',
			'desc' => __( 'This hook executes immediately after the opening <code>&lt;body&gt;</code> tag.', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after',
			'desc' => __( 'This hook executes immediately before the closing <code>&lt;/body&gt;</code> tag.', 'simplehooks' )
		) );

		submit_button( __( 'Save Changes', 'simplehooks' ), 'primary' );

	}

	function header_hooks_box() {

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_header',
			'desc' => __( 'This hook executes immediately before the header (outside the <code>#header</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_header',
			'desc' => __( 'This hook outputs the default header (the <code>#header</code> div)', 'simplehooks' ),
			'unhook' => array( 'genesis_do_header' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_header',
			'desc' => __( 'This hook executes immediately after the header (outside the <code>#header</code> div).', 'simplehooks' )
		) );

		submit_button( __( 'Save Changes', 'simplehooks' ), 'primary' );

	}

	function content_hooks_box() {

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_content_sidebar_wrap',
			'desc' => __( 'This hook executes immediately before the div block that wraps the content and the primary sidebar (outside the <code>#content-sidebar-wrap</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_content_sidebar_wrap',
			'desc' => __( 'This hook executes immediately after the div block that wraps the content and the primary sidebar (outside the <code>#content-sidebar-wrap</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_content',
			'desc' => __( 'This hook executes immediately before the content column (outside the <code>#content</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_content',
			'desc' => __( 'This hook executes immediately after the content column (outside the <code>#content</code> div).', 'simplehooks' )
		) );

		submit_button( __( 'Save Changes', 'simplehooks' ), 'primary' );

	}

	function loop_hooks_box() {

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_loop',
			'desc' => __( 'This hook executes immediately before all loop blocks.<br /> Therefore, this hook falls outside the loop, and cannot execute functions that require loop template tags or variables.', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_loop',
			'desc' => __( 'This hook executes both default and custom loops.', 'simplehooks' ),
			'unhook' => array( 'genesis_do_loop' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_loop',
			'desc' => __( 'This hook executes immediately after all loop blocks.<br /> Therefore, this hook falls outside the loop, and cannot execute functions that require loop template tags or variables.', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_endwhile',
			'desc' => __( 'This hook executes after the <code>endwhile;</code> statement.', 'simplehooks' ),
			'unhook' => array( 'genesis_posts_nav' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_loop_else',
			'desc' => __( 'This hook executes after the <code>else :</code> statement in all loop blocks. The content attached to this hook will only display if there are no posts available when a loop is executed.', 'simplehooks' ),
			'unhook' => array( 'genesis_do_noposts' )
		) );

		submit_button( __( 'Save Changes', 'simplehooks' ), 'primary' );

	}

	function post_hooks_box() {

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_post',
			'desc' => __( 'This hook executes before each post in all loop blocks (outside the <code>post_class()</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_post',
			'desc' => __( 'This hook executes after each post in all loop blocks (outside the <code>post_class()</code> div).', 'simplehooks' ),
			'unhook' => array( 'genesis_do_author_box' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_post_title',
			'desc' => __( 'This hook executes immediately before each post/page title within the loop.', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_post_title',
			'desc' => __( 'This hook outputs the post/page title.', 'simplehooks' ),
			'unhook' => array( 'genesis_do_post_title' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_post_title',
			'desc' => __( 'This hook executes immediately after each post/page title within the loop.', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_post_content',
			'desc' => __( 'This hook executes immediately before the <code>genesis_post_content</code> hook for each post/page within the loop.', 'simplehooks' ),
			'unhook' => array( 'genesis_post_info' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_post_content',
			'desc' => __( 'This hook outputs the content of the post/page, by default.', 'simplehooks' ),
			'unhook' => array( 'genesis_do_post_image', 'genesis_do_post_content' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_post_content',
			'desc' => __( 'This hook executes immediately after the <code>genesis_post_content</code> hook for each post/page within the loop.', 'simplehooks' ),
			'unhook' => array( 'genesis_post_meta' )
		) );

		submit_button( __( 'Save Changes', 'simplehooks' ), 'primary' );

	}

	function comment_list_hooks_box() {

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_comments',
			'desc' => __( 'This hook executes immediately before the comments block (outside the <code>#comments</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_comments',
			'desc' => __( 'This hook outputs the comments block, including the <code>#comments</code> div.', 'simplehooks' ),
			'unhook' => array( 'genesis_do_comments' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_list_comments',
			'desc' => __( 'This hook executes inside the comments block, inside the <code>.comment-list</code> OL. By default, it outputs a list of comments associated with a post via the <code>genesis_default_list_comments()</code> function.', 'simplehooks' ),
			'unhook' => array( 'genesis_default_list_comments' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_comments',
			'desc' => __( 'This hook executes immediately after the comments block (outside the <code>#comments</code> div).', 'simplehooks' )
		) );

	}

	function ping_list_hooks_box() {

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_pings',
			'desc' => __( 'This hook executes immediately before the pings block (outside the <code>#pings</code> div).', 'simplehooks' ),
			'unhook' => array( 'genesis_do_pings' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_pings',
			'desc' => __( 'This hook outputs the pings block, including the <code>#pings</code> div.', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_list_pings',
			'desc' => __( 'This hook executes inside the pings block, inside the <code>.ping-list</code> OL. By default, it outputs a list of pings associated with a post via the <code>genesis_default_list_pings()</code> function.', 'simplehooks' ),
			'unhook' => array( 'genesis_default_list_pings' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_pings',
			'desc' => __( 'This hook executes immediately after the pings block (outside the <code>#pings</code> div).', 'simplehooks' )
		) );

		submit_button( __( 'Save Changes', 'simplehooks' ), 'primary' );

	}

	function comment_hooks_box() {

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_comment',
			'desc' => __( 'This hook executes immediately before each individual comment (inside the <code>.comment</code> list item).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_comment',
			'desc' => __( 'This hook executes immediately after each individual comment (inside the <code>.comment</code> list item).', 'simplehooks' )
		) );

		submit_button( __( 'Save Changes', 'simplehooks' ), 'primary' );

	}

	function comment_form_hooks_box() {

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_comment_form',
			'desc' => __( 'This hook executes immediately before the comment form, outside the <code>#respond</code> div.', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_comment_form',
			'desc' => __( 'This hook outputs the entire comment form, including the <code>#respond</code> div.', 'simplehooks' ),
			'unhook' => array( 'genesis_do_comment_form' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_comment_form',
			'desc' => __( 'This hook executes immediately after the comment form, outside the <code>#respond</code> div.', 'simplehooks' )
		) );

		submit_button( __( 'Save Changes', 'simplehooks' ), 'primary' );

	}

	function sidebar_hooks_box() {

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_sidebar',
			'desc' => __( 'This hook executes immediately before the primary sidebar column (outside the <code>#sidebar</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_sidebar',
			'desc' => __( 'This hook outputs the content of the primary sidebar, including the widget area output.', 'simplehooks' ),
			'unhook' => array( 'genesis_do_sidebar' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_sidebar',
			'desc' => __( 'This hook executes immediately after the primary sidebar column (outside the <code>#sidebar</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_sidebar_widget_area',
			'desc' => __( 'This hook executes immediately before the primary sidebar widget area (inside the <code>#sidebar</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_sidebar_widget_area',
			'desc' => __( 'This hook executes immediately after the primary sidebar widget area (inside the <code>#sidebar</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_sidebar_alt',
			'desc' => __( 'This hook executes immediately before the alternate sidebar column (outside the <code>#sidebar-alt</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_sidebar_alt',
			'desc' => __( 'This hook outputs the content of the secondary sidebar, including the widget area output.', 'simplehooks' ),
			'unhook' => array( 'genesis_do_sidebar_alt' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_sidebar_alt',
			'desc' => __( 'This hook executes immediately after the alternate sidebar column (outside the <code>#sidebar-alt</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_sidebar_alt_widget_area',
			'desc' => __( 'This hook executes immediately before the alternate sidebar widget area (inside the <code>#sidebar-alt</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_sidebar_alt_widget_area',
			'desc' => __( 'This hook executes immediately after the alternate sidebar widget area (inside the <code>#sidebar-alt</code> div).', 'simplehooks' )
		) );

		submit_button( __( 'Save Changes', 'simplehooks' ), 'primary' );

	}

	function footer_hooks_box() {

		simplehooks_form_generate( array(
			'hook' => 'genesis_before_footer',
			'desc' => __( 'This hook executes immediately before the footer (outside the <code>#footer</code> div).', 'simplehooks' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_footer',
			'desc' => __( 'This hook, by default, outputs the content of the footer (inside the <code>#footer</code> div).', 'simplehooks' ),
			'unhook' => array( 'genesis_do_footer' )
		) );

		simplehooks_form_generate( array(
			'hook' => 'genesis_after_footer',
			'desc' => __( 'This hook executes immediately after the footer (outside the <code>#footer</code> div).', 'simplehooks' )
		) );

		submit_button( __( 'Save Changes', 'simplehooks' ), 'primary' );

	}
	
}

add_action( 'genesis_admin_menu', 'simplehooks_settings_menu' );
/**
 * Instantiate the class to create the menu.
 *
 * @since 1.8.0
 */
function simplehooks_settings_menu() {

	new Genesis_Simple_Hooks_Admin;

}