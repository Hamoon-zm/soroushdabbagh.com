<?php 

// load stylesheet
function load_css()
{
    wp_register_style('bootstrap' , get_template_directory_uri(). '/css/bootstrap.rtl.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap' , get_template_directory_uri(). '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('stylesheet' , get_template_directory_uri(). '/css/main.css', '', 1.0 , 'all');
	wp_enqueue_style('stylesheet');

    wp_register_style('stylesheet' , get_template_directory_uri(). '/css/rtl.css', '', 1.0 , 'all');
	wp_enqueue_style('stylesheet');

}

add_action('wp_enqueue_scripts' , 'load_css');

// load javascript
function load_js(){

    wp_enqueue_script('jquery');

	wp_register_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', "jquery" , false, true);
	wp_enqueue_script('bootstrap');

	wp_register_script('custom', get_template_directory_uri(). '/js/app.js', "jquery" , 1.0 , true);
	wp_enqueue_script('custom');

}
add_action('wp_enqueue_scripts' , 'load_js');


//Theme Options

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

//Register Menus
// register_nav_menus(
// 	array(
// 		// id => visual name
// 		'top-menu' => 'Top Menu Location',
// 		'mobile-menu' => 'Mobile Menu Location',
// 		'footer-menu' => 'Footer Menu Location',
// 	)
// );

//Register Sidebars
function my_sidebars()
{
	register_sidebar(
		array(
			'name' => 'Page Sidebar',
			'id' => 'page-sidebar',
			'before_title' => '<h4 class="widgets_title">',
			'after_title' => '</h4>'
		)
	);

	register_sidebar(
		array(
			'name' => 'Blog Sidebar',
			'id' => 'blog-sidebar',
			'before_title' => '<h4 class="widgets_title">',
			'after_title' => '</h4>'
		)
	);
}
add_action("widgets_init", "my_sidebars");

//Adding Custom Post Type
function my_first_post_type()
{
	$args = array(
		'labels' => array(
				'name' => 'books ',
				'singular-name' => 'book',
		),
		'hierarchical' => true,
		'menu_icon' => 'dashicons-book-alt',
		'public' => true,
		'has_archive' => true,
		'supports' => array('title','editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
		// 'rewrite' => array('slug' => 'my-book')
	);
	register_post_type('books', $args);
}
{
	$args = array(
		'labels' => array(
				'name' => 'Articles',
				'singular-name' => 'Article',
		),
		'hierarchical' => true,
		'menu_icon' => 'dashicons-book-alt',
		'public' => true,
		'has_archive' => true,
		'supports' => array('title','editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
	);
	register_post_type('articles', $args);
}
{
	$args = array(
		'labels' => array(
				'name' => 'Lectures',
				'singular-name' => 'Lecture',
		),
		'hierarchical' => true,
		'menu_icon' => 'dashicons-book-alt',
		'public' => true,
		'has_archive' => true,
		'supports' => array('title','editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
	);
	register_post_type('lectures', $args);
}
{
	$args = array(
		'labels' => array(
				'name' => 'Discussions',
				'singular-name' => 'Discussion',
		),
		'hierarchical' => true,
		'menu_icon' => 'dashicons-book-alt',
		'public' => true,
		'has_archive' => true,
		'supports' => array('title','editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
	);
	register_post_type('discussions', $args);
}
{
	$args = array(
		'labels' => array(
				'name' => 'Future-events',
				'singular-name' => 'Future-event',
		),
		'hierarchical' => true,
		'menu_icon' => 'dashicons-book-alt',
		'public' => true,
		'has_archive' => true,
		'supports' => array('title','editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
	);
	register_post_type('future-events', $args);
}
add_action('init', 'my_first_post_type');

//Adding Taxonomy
function my_first_taxonomy()
{
    $args = array(

		'labels' => array(
				'name' => 'Categories',
				'singular-name' => 'Category',
		),

		'public' => true,
		'hierarchical' => true,	
	);
	register_taxonomy('category', array('articles','books','lectures','discussions','future-events'), $args);


	$args = array(

		'labels' => array(
				'name' => 'Publishers',
				'singular-name' => 'Publisher',
		),

		'public' => true,
		'hierarchical' => true,	
	);
	register_taxonomy('publisher', array('books'), $args);


}
add_action('init', 'my_first_taxonomy');



//Custom Image Sizes
add_image_size('blog-large', 800 , 600 , false);
add_image_size('blog-small', 400 , 300 , false);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}