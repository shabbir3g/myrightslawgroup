<?php
/**
 * MyRightsLawGroup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MyRightsLawGroup
 */

if ( ! function_exists( 'mrlg_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mrlg_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mrlg, use a find and replace
		 * to change 'mrlg' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mrlg', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', ['video','audio','gallery','quote'] );
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' =>  'Main Menu',
			'footer-menu'	=> 'Footer Menu'
		) );
		
		function default_menu(){
			
			echo '<ul class="navbar-nav">';
			echo '<li><a href="'.home_url().'">Home</a></li>';
			echo '</ul>';
			
		}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		 
				 /* ACF OPTIONS PAGE */
		if(function_exists('acf_add_options_page')) {
			$option_page = acf_add_options_page(
				array(
					'page_title'  => 'Theme Settings',
					'menu_title'  => 'Theme Settings',
					'menu_slug'   => 'theme-settings',
					'capability'  => 'edit_posts',
					'redirect'    => true,
					'position' => 61,
					'icon_url'    => 'dashicons-layout'
				)
			);
		}
		
		
		
		/* Register Post Type with category */
		
		$labels = array(
				'name'               => __( 'News', 'mrlg' ),
				'singular_name'      => __( 'News', 'mrlg' ),
				'menu_name'          => __( 'News', 'mrlg' ),
				'name_admin_bar'     => __( 'News', 'mrlg' ),
				'add_new'            => __( 'Add News', 'mrlg' ),
				'add_new_item'       => __( 'Add New News', 'mrlg' ),
				'new_item'           => __( 'New News', 'mrlg' ),
				'edit_item'          => __( 'Edit News', 'mrlg' ),
				'view_item'          => __( 'View News', 'mrlg' ),
				'all_items'          => __( 'All News', 'mrlg' ),
				'search_items'       => __( 'Search News', 'mrlg' ),
				'parent_item_colon'  => __( 'Parent News:', 'mrlg' ),
				'not_found'          => __( 'No News found.', 'mrlg' ),
				'not_found_in_trash' => __( 'No News found in Trash.', 'mrlg' )
			);

			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.', 'mrlg' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'News' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'      	 => 'dashicons-smiley',
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			);

			register_post_type( 'news', $args );
			
			
			
			/* Register New Taxonomy*/ 
			
			$labels = array(
				'name'              => _x( 'News Category', 'mrlg' ),
				'singular_name'     => _x( 'News Category', 'mrlg' ),
				'search_items'      => __( 'Search Category', 'mrlg' ),
				'all_items'         => __( 'All Categories', 'mrlg' ),
				'parent_item'       => __( 'Parent Category', 'mrlg' ),
				'parent_item_colon' => __( 'Parent Category:', 'mrlg' ),
				'edit_item'         => __( 'Edit Category', 'mrlg' ),
				'update_item'       => __( 'Update Category', 'mrlg' ),
				'add_new_item'      => __( 'Add New Category', 'mrlg' ),
				'new_item_name'     => __( 'New Category Name', 'mrlg' ),
				'menu_name'         => __( 'Category', 'mrlg' ),
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'news-category' ),
			);

			register_taxonomy( 'newscategory', array( 'news' ), $args );

		 // Disable Gutenberg editor
			add_filter('use_block_editor_for_post', '__return_false', 10);
			// Disable Gutenberg editor for widgets
			add_filter('use_widgets_block_editor', '__return_false');

	
	}
endif;
add_action( 'after_setup_theme', 'mrlg_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mrlg_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'mrlg' ),
		'id'            => 'blog-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'mrlg' ),
		'before_widget' => '<div class="widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-heading">',
		'after_title'   => '</h3>', 
	) );
}
add_action( 'widgets_init', 'mrlg_widgets_init' );


/* customize login screen */
function mbthirty_custom_login_page() {
    echo '<style type="text/css">
		.login h1 a{
			background-size: 230px !important;
		}
        h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo_white.gif") !important; height: 90px !important; width: 230px !important; margin: 0 auto !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/banner.png") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before { background-color: rgba(0,0,0,0.7); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
    </style>';
}
add_action('login_head', 'mbthirty_custom_login_page');
function mbthirty_login_logo_url_title() {
 	return 'Mostafiz Shabbir';
}
add_filter( 'login_headertitle', 'mbthirty_login_logo_url_title' );
function mbthirty_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mbthirty_login_logo_url' );
		 
		 
/* customize login screen */
		 
/**
 * Enqueue scripts and styles.
 */
function mrlg_scripts() {

	wp_enqueue_style( 'mrlg-carousel', get_template_directory_uri().'/css/owl.carousel.css' );
	wp_enqueue_style( 'mrlg-owl.theme.default', get_template_directory_uri().'/owl.theme.default.css' );
	wp_enqueue_style( 'mrlg-main', get_template_directory_uri().'/css/main.css' );
	wp_enqueue_style( 'mrlg-style', get_stylesheet_uri() );
	wp_enqueue_style( 'mrlg-responsive', get_template_directory_uri().'/css/responsive.css' );
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'davide-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-owl.video', get_template_directory_uri() . '/js/owl.video.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-font-awesome', get_template_directory_uri() . '/js/font-awesome.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );


}
add_action( 'wp_enqueue_scripts', 'mrlg_scripts' );



// NAP Shortcode 

/*
 * Load languages
 */
load_plugin_textdomain('nap-shortcodes', false, basename( dirname( __FILE__ ) ) . '/languages' );

/*
 * Create menu item in admin
 */
 
add_action('admin_menu', 'rash_address_menu');
add_action('add_meta_boxes', 'custom_address_shortcode_metabox');
add_action('save_post', 'custom_address_shortcode_save');

function rash_address_menu()
{
    add_menu_page('NAP Shortcodes', 'NAP Shortcodes', 'administrator', 'nap-shortcodes', 'custom_address_shortcode', 'dashicons-location');
    add_action('admin_init', 'custom_address_register_mysettings');
}

function custom_address_register_mysettings()
{
    register_setting('custom-address-settings', 'custom_default_address_country', 'custom_default_address_validation');
    register_setting('custom-address-settings', 'custom_default_address_line_2', 'custom_default_address_validation');
    register_setting('custom-address-settings', 'custom_default_address_name', 'custom_default_address_validation');
    register_setting('custom-address-settings', 'custom_default_address_state', 'custom_default_address_validation');
    register_setting('custom-address-settings', 'custom_default_address_state_abbreviation', 'custom_default_address_validation');
    register_setting('custom-address-settings', 'custom_default_address_city', 'custom_default_address_validation');
    register_setting('custom-address-settings', 'custom_default_address_zip_code', 'custom_default_address_validation');
    register_setting('custom-address-settings', 'custom_default_address_county', 'custom_default_address_validation');
    register_setting('custom-address-settings', 'custom_default_address_phone_number', 'custom_default_address_validation');
    register_setting('custom-address-settings', 'custom_default_address_phone_number_2', 'custom_default_address_validation');
    register_setting('custom-address-settings', 'custom_default_address_keyword', 'custom_default_address_validation');
}

/*
 * Create shortcode functionality
 */
function custom_default_address_country()
{ 
	
	$default = get_option('custom_default_address_country') ; 
	
	$custom = get_post_meta(get_the_ID($post->ID),'_custom_default_address_country',true); 
	
	if(!empty($custom)){
		return $custom; 
	}else {
		return $default; 
	}
}

add_shortcode('ADDRESS', 'custom_default_address_country');

/*
 * Create shortcode functionality
 */
function custom_default_address_line_2()
{ 
	
	$default = get_option('custom_default_address_line_2') ; 
	
	$custom = get_post_meta(get_the_ID($post->ID),'_custom_default_address_line_2',true); 
	
	if(!empty($custom)){
		return $custom; 
	}else {
		return $default; 
	}
}

add_shortcode('ADDRESS2', 'custom_default_address_line_2');
/*
 * Create shortcode functionality
 */
function custom_default_address_name()
{ 
	
	$default = get_option('custom_default_address_name') ; 
	
	$custom = get_post_meta(get_the_ID($post->ID),'_custom_default_address_name',true); 
	
	if(!empty($custom)){
		return $custom; 
	}else {
		return $default; 
	}
}

add_shortcode('NAME', 'custom_default_address_name');

/*
 * Create shortcode functionality
 */
function custom_default_address_state()
{
	$default = get_option('custom_default_address_state') ; 
	
	$custom = get_post_meta(get_the_ID($post->ID),'_custom_default_address_state',true); 
	
	if(!empty($custom)){
		return $custom; 
	}else {
		return $default; 
	}
	 
}

add_shortcode('STATE', 'custom_default_address_state');

/*
 * Create shortcode functionality
 */
function custom_default_address_zip_code()
{ 
	
	$default = get_option('custom_default_address_zip_code') ; 
	
	$custom = get_post_meta(get_the_ID($post->ID),'_custom_default_address_zip_code',true); 
	
	if(!empty($custom)){
		return $custom; 
	}else {
		return $default; 
	}
}

add_shortcode('ZIP', 'custom_default_address_zip_code');

/*
 * Create shortcode functionality
 */
function custom_default_address_county()
{
	$default = get_option('custom_default_address_county') ; 
	
	$custom = get_post_meta(get_the_ID($post->ID),'_custom_default_address_county',true); 
	
	if(!empty($custom)){
		return $custom; 
	}else {
		return $default; 
	}
	 
}

add_shortcode('COUNTY', 'custom_default_address_county');
/*
 * Create shortcode functionality
 */
function custom_default_address_state_abbreviation()
{ 
	
	$default = get_option('custom_default_address_state_abbreviation') ; 
	
	$custom = get_post_meta(get_the_ID($post->ID),'_custom_default_address_state_abbreviation',true); 
	
	if(!empty($custom)){
		return $custom; 
	}else {
		return $default; 
	}
	
	
}

add_shortcode('ST', 'custom_default_address_state_abbreviation');

/*
 * Create shortcode functionality
 */
function custom_default_address_city()
{ 
	$default = get_option('custom_default_address_city') ; 
	
	$custom = get_post_meta(get_the_ID($post->ID),'_custom_default_address_city',true); 
	
	if(!empty($custom)){
		return $custom; 
	}else {
		return $default; 
	}
}

add_shortcode('CITY', 'custom_default_address_city');

/*
 * Create shortcode functionality
 */
function custom_default_address_phone_number()
{ 
	
	$default = get_option('custom_default_address_phone_number') ; 
	
	$custom = get_post_meta(get_the_ID($post->ID),'_custom_default_address_phone_number',true); 
	
	if(!empty($custom)){
		return   $custom ; 
	}else {
		return   $default  ;  
	}
}

add_shortcode('PHONE', 'custom_default_address_phone_number');

/*
 * Create shortcode functionality
 */
function custom_default_address_phone_number_2()
{ 
	
	$default = get_option('custom_default_address_phone_number_2') ; 
	
	$custom = get_post_meta(get_the_ID($post->ID),'_custom_default_address_phone_number_2',true); 
	
	if(!empty($custom)){
		return   $custom ; 
	}else {
		return   $default  ;  
	}
}

add_shortcode('KEYWORD', 'custom_default_address_phone_number_2');


/*
 * Create shortcode functionality
 */
 /*
function custom_default_address_keyword()
{ 
	
	$default = get_option('custom_default_address_keyword') ; 
	
	$custom = get_post_meta(get_the_ID($post->ID),'_custom_default_address_keyword',true); 
	
	if(!empty($custom)){
		return   $custom ; 
	}else {
		return   $default  ;  
	}
}

add_shortcode('KEYWORD', 'custom_default_address_keyword');


*/


/*
 * Sanitize it
 */
function custom_default_address_validation($input) {
    return sanitize_text_field($input);
}

// Deactivation hooks
register_deactivation_hook( __FILE__, 'custom_address_shortcode_deactivate' );
function custom_address_shortcode_deactivate(){
    //delete plugins option here ex:
    delete_option('custom_default_address_name');
    delete_option('custom_default_address_country');
    delete_option('custom_default_address_line_2');
    delete_option('custom_default_address_state');
    delete_option('custom_default_address_state_abbreviation');
    delete_option('custom_default_address_city');
	
    delete_option('custom_default_address_zip_code');
    delete_option('custom_default_address_county');
    delete_option('custom_default_address_phone_number');
    delete_option('custom_default_address_phone_number_2');
    //delete_option('custom_default_address_keyword');
}


/*
 * Generate the admin page
 */
function custom_address_shortcode()
{
    ?>
    <div class="notice notice-info">
        <p><?php echo __('Welcome to NAP Shortcodes.  ');?>  </p>
    </div>
    <div class="wrap">
        <h2><?php echo __('Enter the default name, address and phone number below', 'nap-shortcodes');?>:</h2>

        <?php if (isset($_GET['settings-updated']) && $_GET['settings-updated'] == 'true'):
            echo '<div id="setting-error-settings_updated" class="updated settings-error"> 
            <p><strong>' . __("Settings saved", "custom-address-shortcode") . '</strong></p>
         </div>';
        endif;
        ?>

        <form method="post" action="options.php">
            <?php settings_fields('custom-address-settings'); ?>
            <?php do_settings_sections('custom-address-settings'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><?php echo __('Company Name  <code>[NAME]</code>', 'nap-shortcodes');?></th>
                    <td><input type="text" style="width:50%" name="custom_default_address_name" value="<?php echo get_option('custom_default_address_name'); ?>" placeholder=""/></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php echo __('Address Line 1 <code>[ADDRESS]</code>', 'nap-shortcodes');?></th>
                    <td><input type="text" style="width:50%" name="custom_default_address_country" value="<?php echo get_option('custom_default_address_country'); ?>" placeholder=""/></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php echo __('Address Line 2 <code>[ADDRESS2]</code>', 'nap-shortcodes');?></th>
                    <td><input type="text" style="width:50%" name="custom_default_address_line_2" value="<?php echo get_option('custom_default_address_line_2'); ?>" placeholder=""/></td>
                </tr>
				 <tr valign="top">
                    <th scope="row"><?php echo __('City <code>[CITY]</code>', 'nap-shortcodes');?></th>
                    <td><input type="text" style="width:50%" name="custom_default_address_city" value="<?php echo get_option('custom_default_address_city'); ?>" placeholder=""/></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php echo __('State Abbreviation <code>[ST]</code>', 'nap-shortcodes');?></th>
                    <td><input type="text" style="width:50%" name="custom_default_address_state_abbreviation" value="<?php echo get_option('custom_default_address_state_abbreviation'); ?>" placeholder=""/></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php echo __('State <code>[STATE]</code>', 'nap-shortcodes');?></th>
                    <td><input type="text" style="width:50%" name="custom_default_address_state" value="<?php echo get_option('custom_default_address_state'); ?>" placeholder=""/></td>
                </tr>
               
                <tr valign="top">
                    <th scope="row"><?php echo __('Zip Code <code>[ZIP]</code>', 'nap-shortcodes');?></th>
                    <td><input type="text" style="width:50%" name="custom_default_address_zip_code" value="<?php echo get_option('custom_default_address_zip_code'); ?>" placeholder=""/></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php echo __('County <code>[COUNTY]</code>', 'nap-shortcodes');?></th>
                    <td><input type="text" style="width:50%" name="custom_default_address_county" value="<?php echo get_option('custom_default_address_county'); ?>" placeholder=""/></td>
                </tr>
               
                <tr valign="top">
                    <th scope="row"><?php echo __('Phone Number 1 <code>[PHONE]</code>', 'nap-shortcodes');?></th>
                    <td><input type="text" style="width:50%" name="custom_default_address_phone_number" value="<?php echo get_option('custom_default_address_phone_number'); ?>" placeholder=""/></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php echo __('Keyword <code>[KEYWORD]</code>', 'nap-shortcodes');?></th>
                    <td><input type="text" style="width:50%" name="custom_default_address_phone_number_2" value="<?php echo get_option('custom_default_address_phone_number_2'); ?>" placeholder=""/></td>
                </tr>
                
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
<?php } 





/*
 * Generate the metabox
 */ 
 
 function custom_address_shortcode_metabox(){
	 add_meta_box('rash_cuustom_address','Custom NAP Options','custom_address_shortcode_callback',array('page','post','slide','mrlg_blog'),'side','high');
 }
function custom_address_shortcode_callback($post){
	wp_nonce_field('custom_address_shortcode_save','custom_address_shortcode_single_meta_box_nonce');
	
	 
	$name  = get_post_meta($post->ID,'_custom_default_address_name',true);
	$address  = get_post_meta($post->ID,'_custom_default_address_country',true);
	$address2  = get_post_meta($post->ID,'_custom_default_address_line_2',true);
	$state  = get_post_meta($post->ID,'_custom_default_address_state',true);
	$state_abbreviation  = get_post_meta($post->ID,'_custom_default_address_state_abbreviation',true);
	$city  = get_post_meta($post->ID,'_custom_default_address_city',true);
	
	$zip_code  = get_post_meta($post->ID,'_custom_default_address_zip_code',true);
	$county  = get_post_meta($post->ID,'_custom_default_address_county',true);
	$phone_number  = get_post_meta($post->ID,'_custom_default_address_phone_number',true); 
	$phone_number2  = get_post_meta($post->ID,'_custom_default_address_phone_number_2',true); 
	$keyword  = get_post_meta($post->ID,'_custom_default_address_keyword',true); 
	
	echo '<style type="text/css"> #rash_cuustom_address {
    box-shadow: 0 0 0 1px #0091cd;}</style>'; 
	echo '<label for="custom_default_address_name">Company Name <span>[NAME]</span></label> <br />';
	echo '<input type="text" id="custom_default_address_name" name="custom_default_address_name" value="'. esc_attr($name) .'" size="30" /><br /><br />';
	
	echo '<label for="custom_default_address_country">Address Line 1 <span>[ADDRESS]</span></label> <br />';
	echo '<input type="text" id="custom_default_address_country" name="custom_default_address_country" value="'. esc_attr($address) .'" size="30" /><br /><br />';
	
	echo '<label for="custom_default_address_line_2">Address Line 2 <span>[ADDRESS2]</span></label> <br />';
	echo '<input type="text" id="custom_default_address_line_2" name="custom_default_address_line_2" value="'. esc_attr($address2) .'" size="30" /><br /><br />';
	
	echo '<label for="custom_default_address_city">City <span>[CITY]</span></label><br />';
	echo '<input type="text" id="custom_default_address_city" name="custom_default_address_city" value="'. esc_attr($city) .'" size="30" /><br /><br />';
		
	
	echo '<label for="custom_default_address_state_abbreviation">State Abbreviation <span>[ST]</span></label><br />';
	echo '<input type="text" id="custom_default_address_state_abbreviation" name="custom_default_address_state_abbreviation" value="'.esc_attr($state_abbreviation) .'" size="30" /><br /><br />';
	
	
	
	echo '<label for="custom_default_address_state">State <span>[STATE]</span></label>';
	echo '<input type="text" id="custom_default_address_state" name="custom_default_address_state" value="'. esc_attr($state) .'" size="30" /><br /><br />';

	
	
	
	echo '<label for="custom_default_address_state_abbreviation">Zip Code <span>[ZIP]</span></label><br />';
	echo '<input type="text" id="custom_default_address_zip_code" name="custom_default_address_zip_code" value="'.esc_attr($zip_code) .'" size="30" /><br /><br />';
	
	
	
	echo '<label for="custom_default_address_state">County <span>[COUNTY]</span></label>';
	echo '<input type="text" id="custom_default_address_county" name="custom_default_address_county" value="'. esc_attr($county) .'" size="30" /><br /><br />';

	echo '<label for="custom_default_address_phone_number">Phone Number 1 <span>[PHONE]</span></label><br />';
	echo '<input type="text" id="custom_default_address_phone_number" name="custom_default_address_phone_number" value="'. esc_attr($phone_number) .'" size="30" /><br /><br />';
	echo '<label for="custom_default_address_phone_number_2">KEYWORD <span>[KEYWORD]</span></label><br />';
	echo '<input type="text" id="custom_default_address_phone_number_2" name="custom_default_address_phone_number_2" value="'. esc_attr($phone_number2) .'" size="30" />';
	/*
	echo '<label for="custom_default_address_keyword">Keyword <span>[KEYWORD]</span></label><br />';
	echo '<input type="text" id="custom_default_address_keyword" name="custom_default_address_keyword" value="'. esc_attr($keyword) .'" size="30" />'; */
	
}


function custom_address_shortcode_save($post_id){
	if(! isset($_POST['custom_address_shortcode_single_meta_box_nonce'])){
		return; 
	}
	if(! wp_verify_nonce($_POST['custom_address_shortcode_single_meta_box_nonce'],'custom_address_shortcode_save')){
		return; 
	}
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
		return; 
	}
	if(! current_user_can('edit_post',$post_id)){
		return; 
	}
	if(isset($_POST['custom_default_address_name'])){ 
		$name  = sanitize_text_field($_POST['custom_default_address_name']);
		update_post_meta($post_id, '_custom_default_address_name', $name);
	}
	if(isset($_POST['custom_default_address_country'])){ 
		$address  = sanitize_text_field($_POST['custom_default_address_country']);
		update_post_meta($post_id, '_custom_default_address_country', $address);
	}
	if(isset($_POST['custom_default_address_line_2'])){ 
		$address2  = sanitize_text_field($_POST['custom_default_address_line_2']);
		update_post_meta($post_id, '_custom_default_address_line_2', $address2);
	}
	if(isset($_POST['custom_default_address_state'])){ 
		$state  = sanitize_text_field($_POST['custom_default_address_state']);	
		update_post_meta($post_id, '_custom_default_address_state', $state);
	}
	
	if(isset($_POST['custom_default_address_state_abbreviation'])){ 
		$state_abbreviation  = 	sanitize_text_field($_POST['custom_default_address_state_abbreviation']); 
		update_post_meta($post_id, '_custom_default_address_state_abbreviation', $state_abbreviation);
	}
	
	if(isset($_POST['custom_default_address_city'])){ 
	$city  = 	sanitize_text_field($_POST['custom_default_address_city']);
		update_post_meta($post_id, '_custom_default_address_city', $city);
	}
	
	if(isset($_POST['custom_default_address_zip_code'])){ 
		$zip_code  = 	sanitize_text_field($_POST['custom_default_address_zip_code']); 
		update_post_meta($post_id, '_custom_default_address_zip_code', $zip_code);
	}
	
	if(isset($_POST['custom_default_address_county'])){ 
	$county  = 	sanitize_text_field($_POST['custom_default_address_county']);
		update_post_meta($post_id, '_custom_default_address_county', $county);
	}
	if(isset($_POST['custom_default_address_phone_number'])){  
		$phone_number  = sanitize_text_field($_POST['custom_default_address_phone_number']	);
		update_post_meta($post_id, '_custom_default_address_phone_number', $phone_number);
	}
	if(isset($_POST['custom_default_address_phone_number_2'])){  
		$phone_number2  = sanitize_text_field($_POST['custom_default_address_phone_number_2']	);
		update_post_meta($post_id, '_custom_default_address_phone_number_2', $phone_number2);
	}
	/*
	if(isset($_POST['custom_default_address_keyword'])){  
		$keyword  = sanitize_text_field($_POST['custom_default_address_keyword']	);
		update_post_meta($post_id, '_custom_default_address_keyword', $keyword);
	}
	*/
	
	 
}

// allow schema cod e

function tsm_get_extended_valid_elements() {
	$elements = array(
		'@'    => array(
			'id',
			'class',
			'style',
			'title',
			'itemscope',
			'itemtype',
			'itemprop',
			'datetime',
			'rel',
		),
		'article',
		'div',
		'h2',
		'h3',
		'p',
		'dl',
		'dt',
		'dd',
		'ul',
		'li',
		'span',
		'a'    => array(
			'href',
			'name',
			'target',
			'rev',
			'charset',
			'lang',
			'tabindex',
			'accesskey',
			'type',
			'class',
			'onfocus',
			'onblur',
		),
		'img'  => array(
			'src',
			'alt',
			'width',
			'height',
		),
		'meta' => array(
			'content',
		),
		'link' => array(
			'href',
		),
		'time' => array(
			'itemprop',
			'content',
		),
	);

	return apply_filters( 'tsm_extended_valid_elements', $elements );
}

function tsm_tinymce_init( $settings ) {
	if ( ! empty( $settings['extended_valid_elements'] ) ) {
		$settings['extended_valid_elements'] .= ',';
	} else {
		$settings['extended_valid_elements'] = '';
	}

	$result = $settings['extended_valid_elements'];

	$elements = tsm_get_extended_valid_elements();

	foreach ( $elements as $key => $element ) {
		if ( is_array( $element ) && ! empty( $key ) ) {
			$name       = $key;
			$attributes = $element;
		} else {
			$name       = $element;
			$attributes = array();
		}

		if ( ! empty( $result ) ) {
			$result .= ',';
		}

		$result .= $name;

		if ( ! empty( $attributes ) ) {
			$result .= '[' . implode( '|', $attributes ) . ']';
		}
	}

	$settings['extended_valid_elements'] = $result;
	if ( ! isset( $settings['valid_children'] ) ) {
		$settings['valid_children'] = '';
	}
	$settings['valid_children'] .= '+body[meta],+div[meta],+body[link],+div[link]';

	return $settings;
}

function tsm_wp_kses_allowed_html( $tags, $context ) {

	if ( $context !== 'post' ) {
		return $tags;
	}

	$schema_attributes = array(
		'itemscope' => true,
		'itemtype'  => true,
		'itemprop'  => true,
		'datetime'  => true,
		'content'  => true,
	);

	if ( ! empty( $tags ) ) {
		$tags_with_schema_attrs = array();

		foreach ( $tags as $tag => $attributes ) {
			$tags_with_schema_attrs[ $tag ] = array_merge( $attributes, $schema_attributes );
		}

		return $tags_with_schema_attrs;
	}

	return $tags;
}

add_filter( 'tiny_mce_before_init', 'tsm_tinymce_init' );
add_filter( 'wp_kses_allowed_html', 'tsm_wp_kses_allowed_html', 10, 2 );

 
// wordpress cleanup 
function clean_up_wp() {
    // Remove WordPress version number
    remove_action('wp_head', 'wp_generator');

    // Remove Emoji scripts and styles
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    // Remove Gutenberg block library CSS
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // If you are using WooCommerce

    // Disable embeds
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    add_filter('embed_oembed_discover', '__return_false');
    remove_action('rest_api_init', 'wp_oembed_register_route');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);

    // Remove REST API links
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('template_redirect', 'rest_output_link_header', 11);

    // Disable Dashicons for non-admins
    if (!is_user_logged_in()) {
        wp_deregister_style('dashicons');
    }

    // Remove query strings from static resources
    add_filter('script_loader_src', 'remove_query_string', 15);
    add_filter('style_loader_src', 'remove_query_string', 15);

    // Remove RSD link
    remove_action('wp_head', 'rsd_link');

    // Remove WLW Manifest link
    remove_action('wp_head', 'wlwmanifest_link');

    // Clean up wp_head
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
}
//add_action('init', 'clean_up_wp');

function remove_query_string($src) {
    $parts = explode('?', $src);
    return $parts[0];
}

