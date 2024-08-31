<?php

/**
 * makarav functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package makarav
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function makarav_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on makarav, use a find and replace
		* to change 'makarav' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('makarav', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Header', 'makarav'),
			'menu-2' => esc_html__('Footer 1', 'makarav'),
			'menu-3' => esc_html__('Footer 2', 'makarav'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'makarav_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'makarav_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function makarav_content_width()
{
	$GLOBALS['content_width'] = apply_filters('makarav_content_width', 640);
}
add_action('after_setup_theme', 'makarav_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function makarav_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'makarav'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'makarav'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'makarav_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function makarav_scripts()
{
	wp_enqueue_style('makarav-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('makarav-style', 'rtl', 'replace');

	wp_enqueue_script('makarav-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'makarav_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Register Custom Taxonomy
function create_project_taxonomy() {
    $labels = array(
        'name' => _x('Categories', 'taxonomy general name'),
        'singular_name' => _x('Category', 'taxonomy singular name'),
        'search_items' => __('Search Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Category'),
        'parent_item_colon' => __('Parent Category:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
        'menu_name' => __('Categories'),
    );

    register_taxonomy('categories', array('project', 'ongoing_projects'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'category', 'with_front' => false),
    ));
}
add_action('init', 'create_project_taxonomy', 0);

// Register Custom Post Type: Projects
function our_services() {
    $labels = array(
        'name' => _x('Our Services', 'post type general name'),
        'singular_name' => _x('Services Item', 'post type singular name'),
        'add_new' => _x('Add New', 'Services item'),
        'add_new_item' => __('Add New Item'),
        'edit_item' => __('Edit Item'),
        'new_item' => __('New Item'),
        'view_item' => __('View Item'),
        'search_items' => __('Search'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => '',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => 'dashicons-portfolio',
        'rewrite' => array('slug' => 'our_services', 'with_front' => false),
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('categories')
    );

    register_post_type('our_services', $args);
}
add_action('init', 'our_services');

// Register Custom Post Type: Ongoing Projects
function ongoing_projects() {
    $labels = array(
        'name' => _x('Ongoing Projects', 'post type general name'),
        'singular_name' => _x('Ongoing Project Item', 'post type singular name'),
        'add_new' => _x('Add New', 'ongoing project item'),
        'add_new_item' => __('Add New Ongoing Project Item'),
        'edit_item' => __('Edit Ongoing Project Item'),
        'new_item' => __('New Ongoing Project Item'),
        'view_item' => __('View Ongoing Project Item'),
        'search_items' => __('Search Ongoing Projects'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => '',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => 'dashicons-portfolio',
        'rewrite' => array('slug' => 'ongoing_projects', 'with_front' => false),
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('categories')
    );

    register_post_type('ongoing_projects', $args);
}
add_action('init', 'ongoing_projects');


function get_nav_menu_item_children($parent_id, $nav_menu_items, $depth = true)
{
	$nav_menu_item_list = array();
	foreach ((array) $nav_menu_items as $nav_menu_item) {
		if ($nav_menu_item->menu_item_parent == $parent_id) {
			$nav_menu_item_list[] = $nav_menu_item;
			if ($depth) {
				if ($children = get_nav_menu_item_children($nav_menu_item->ID, $nav_menu_items))
					$nav_menu_item_list = array_merge($nav_menu_item_list, $children);
			}
		}
	}
	return $nav_menu_item_list;
}


if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title'    => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

	// Service Common Section
    acf_add_options_page(array(
        'page_title'    => 'Service Common Section',
        'menu_title'    => 'Service Common Section',
        'menu_slug'     => 'service-common-section',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

add_theme_support('site-icon');

function theme_prefix_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 82,
        'width'       => 272,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'theme_prefix_setup');

class Simple_Link_Walker extends Walker_Nav_Menu {
    // Start the element output
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // Define the attributes for the <a> tag
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target)     . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn)        . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_url($item->url)        . '"' : '';

        // Build the <a> tag
        $output .= '<a' . $attributes . '>';
        $output .= apply_filters('the_title', $item->title, $item->ID);
        $output .= '</a>';
    }

    // No need to close <li> or <ul> tags, as we are not using them
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '';
    }
}

add_filter('wpcf7_form_elements', function($content) {
    // Remove all <span> and <p> tags
    $content = preg_replace('/<(span|p)[^>]*>|<\/(span|p)>/', '', $content);
    return $content;
});





