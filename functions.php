<?php
// Versión no publicada o mostrada.
remove_action('wp_head', 'wp_generator');
//Registrar Thumbnail genericos de Wordpress function.php 
 add_theme_support( 'post-thumbnails' );
// Registrando Sidebar
function sl_tema_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sl_tema' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sl_tema' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sl_tema_widgets_init' );
// Soporte para cambiar imagen de fondo core WP
add_theme_support(
	'custom-background',
	apply_filters(
		'sl_tema_custom_background_args',
		array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)
	)
);
// Registro de menú
register_nav_menus(array(
	'Menu Principal' => esc_html__( 'Menú Principal', 'sl_tema' ),
	'Menu Enlaces'  =>esc_html__( 'Menú Enlaces', 'sl_tema' ),
));
// Llama a navwalker
require get_template_directory() . '/bootstrap-navwalker.php';
// Controlando cantidad de texto en extracto
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
// Insertando archivos JS y CSS // 
if ( ! function_exists( 'sl_tema_enqueue_scripts' ) ) :
	function sl_scripts() {
	wp_enqueue_script( 'jquery','"https://code.jquery.com/jquery-3.5.1.js', array( 'jquery' ),'',true );	
	wp_enqueue_script( 'bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'font-awesome','https://kit.fontawesome.com/a076d05399.js', array( 'jquery' ),'',true );
	wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
	wp_enqueue_style( 'animate-css','https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/blog.css', false, null, 'all');
	}
	add_action( 'wp_enqueue_scripts', 'sl_scripts' );
endif;
//Registro de ACF
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Sl-Tema Settings',
		'menu_title'	=> 'SL-Tema Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts', 
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Redes Sociales Settings',
		'menu_title'	=> 'Redes Sociales',
		'parent_slug'	=> 'theme-general-settings',
	));
	/* acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	)); */
}


