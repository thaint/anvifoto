<?php
define ( 'TEMPLATEURL', get_bloginfo('template_url') );

require_once TEMPLATEPATH . '/includes/index.php';

class ET_Home extends AE_Base {
	function __construct(){
		//all actions go here
		$this->add_action('wp_enqueue_scripts'	, 'on_add_scripts' );
		$this->add_action('wp_print_styles'		, 'on_add_styles');
		$this->add_action('admin_print_styles'	, 'admin_add_styles' );
		$this->add_action('init'				, 'et_home_init' );
		$this->add_action('wp_footer'			, 'scripts_in_footer', 100 );
		//all filters go here
	}
	/**
	*
	* print admin style
	* @param null
	*
	*/
	function admin_add_styles(){
		wp_enqueue_style( 'admin-style', TEMPLATEURL . '/css/et-admin.css');
	}
	/**
	*
	* print style
	* @param null
	*
	*/
	function on_add_styles(){
		//======== all styles go here ========//
		// Boostrap
		$this->add_style('bootstrap', TEMPLATEURL . '/css/bootstrap.min.css');
		// Font Awesome
		$this->add_style('font-awesome', TEMPLATEURL . '/css/font-awesome.min.css');
		// setting
		$this->add_style('setting-css', TEMPLATEURL . '/css/setting-css.css');
		// Style.css
        $this->add_style('main-style', get_stylesheet_uri() , array(
            'bootstrap'
        ));
	}
	/**
	*
	* print scripts
	* @param null
	*
	*/
	function on_add_scripts(){
		//======== all scripts go here ========//
		$this->add_existed_script('backbone');
		$this->add_existed_script('underscore');
		// bootstrap
		$this->add_script('bootstrap', TEMPLATEURL . '/js/bootstrap.min.js', array('jquery'));
		// Sly
		$this->add_script('sly', TEMPLATEURL . '/js/sly.js', array('jquery'));
		
		// Front.js
		$this->add_script('front', TEMPLATEURL . '/js/front.js', array('jquery', 'backbone', 'underscore'));
		wp_localize_script( 'front', 'et_globals', array(
			'ajaxURL' => admin_url( 'admin-ajax.php' ),
			'imgURL'  => get_template_directory_uri() . '/img/'
		));
		// custom
		$this->add_script('custom', TEMPLATEURL . '/js/custom.js', array('jquery'));
	}
	/**
	*
	* frontend init
	* @param null
	*
	*/
	function et_home_init(){
		// add images sizes
		add_theme_support( 'post-thumbnails' );
        // register menu
        register_nav_menu('et_header', __("Header menu"));
        register_nav_menu('et_footer', __("Footer menu"));
		// theme custom post type
		$labels = array(
			'name'               => _x('Galleries', 'post type general name'),
			'singular_name'      => _x('Gallery', 'post type singular name'),
			'add_new'            => _x('Add New', 'Gallery'),
			'add_new_item'       => __('Add New Gallery'),
			'edit_item'          => __('Edit Gallery'),
			'new_item'           => __('New Gallery'),
			'all_items'          => __('All Galleries'),
			'view_item'          => __('View Gallery'),
			'search_items'       => __('Search Galleries'),
			'not_found'          =>  __('No Galleries found'),
			'not_found_in_trash' => __('No Galleries found in Trash'),
			'parent_item_colon'  => '',
			'menu_name'          => 'Galleries'
		);
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array('slug' => 'gallery'),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 10,
			'supports'           => array( 'custom-fields', 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		);
		register_post_type( 'gallery', $args );
	}
	/**
	*
	* print scripts in footer
	* @param null
	*
	*/
	function scripts_in_footer(){
		?>
		<script type="text/javascript">
			(function ($ , Views, Models, ET) {
				$(document).ready(function(){
	                // init view front
	                if(typeof Views.Front !== 'undefined') {
	                    ET.App = new Views.Front();
	                }
				});
        	})(jQuery, ET.Views, ET.Models, window.ET);
		</script>
		<?php
	}
}

new ET_Home();
?>