<?php

  // Theme support
  function ds_theme_setup(){

    // Register Nav Walker class_alias
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

    // Customizer File
    require get_template_directory(). '/inc/customizer.php';

    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu', 'dstheme' )
    ));

    // Make theme available for translations
    load_theme_textdomain( 'dstheme' );

    // Add default posts and comments RSS feed links to head.
  	add_theme_support( 'automatic-feed-links' );

    // Add custom logo support
    add_image_size('mytheme-logo', 100, 100);
    add_theme_support('custom-logo', array(
      'size' => 'mytheme-logo'
    ));

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Add Featured Image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail');
    add_image_size('banner-image', 3000, 1000, true);

    // Set the content width based on the theme's design and stylesheet
    if ( ! isset( $content_width ) ) {
  	$content_width = 750;
    }

    // Switch default core markup for search form, comment form, and comments
  	// to output valid HTML5
  	add_theme_support( 'html5', array(
  		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
  	) );

    // Post formats
    add_theme_support(
      'post-formats', array(
        'image',
        'gallery',
        'aside',
        'video',
        'quote',
        'link',
        'audio',
      )
    );

    // Add WooCommerce support
    add_theme_support( 'woocommerce' );

    // Add custom background support
    add_theme_support( 'custom-background' );

    $defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => 'no-repeat',
    'default-position-x'     => 'center',
    'default-position-y'     => 'center',
    'default-size'           => 'auto',
    'default-attachment'     => 'scroll',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
    );
    add_theme_support( 'custom-background', $defaults );

    // Add custom header image
    $args = array(
  	'width'         => 3000,
  	'height'        => 1000,
  	'default-image' => get_template_directory_uri() . '/images/header.jpg',
  	'uploads'       => true,
    );
    add_theme_support( 'custom-header', $args );

  }
  add_action('after_setup_theme', 'ds_theme_setup');

  // Excerpt Length Control
  function set_excerpt_length(){
    return 45;
  }
  add_filter('excerpt_length', 'set_excerpt_length');

  // Registers an editor stylesheet for the theme.
  function ds_theme_add_editor_styles() {
      add_editor_style( 'custom-editor-style.css' );
  }
  add_action( 'admin_init', 'ds_theme_add_editor_styles' );

  // Add Widget Locations
  function ds_init_widgets($id){
    register_sidebar(array(
      'name' => 'Sidebar 1',
      'id'   => 'sidebar1',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));

    register_sidebar(array(
      'name' => 'Sidebar 2',
      'id'   => 'sidebar2',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));

    register_sidebar(array(
      'name' => 'Sidebar 3',
      'id'   => 'sidebar3',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));

    register_sidebar(array(
      'name' => 'Sharing Sidebar 1',
      'id'   => 'sharing-sidebar1',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));
   }
  add_action('widgets_init', 'ds_init_widgets');


  // Enqueue Google Fonts
  function google_fonts() {
  	$query_args = array(
  		'family' => 'Muli:400,700|Unna:400,400i,700',
  		'subset' => 'latin,latin-text',
  	);
  	wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
   }
   add_action('wp_enqueue_scripts', 'google_fonts');

  // Enqueue Styles
  function ds_theme_styles() {

  wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.0.13/css/all.css' );
  wp_enqueue_style('woocommerce_css', get_template_directory_uri() . '/woocommerce.css');
  }

  add_action('wp_enqueue_scripts', 'ds_theme_styles');

  function ds_theme_js() {

  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '', true);
  wp_enqueue_script('popper_js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '', true );
  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
  wp_enqueue_script('top_js', get_template_directory_uri() . '/js/top.js', array('jquery'), '', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
  }
  add_action('wp_enqueue_scripts','ds_theme_js');
