<?php 

if ( ! isset( $content_width ) ){
  $content_width = 620;
}

add_action('after_setup_theme', 'landline_init_theme');
 
function landline_init_theme() {

	register_nav_menus( array(
			'main' => 'Main Menu',
	) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(1366, 768);
	$args = array(
		'default-image' => get_template_directory_uri() . '/img/default-background.jpg',
	);
	add_theme_support( 'custom-background', $args);
	add_theme_support('automatic-feed-links');
}

function landline_scripts() {
	wp_enqueue_style( 'landline_wf', 'http://fonts.googleapis.com/css?family=Arvo:700' );
	wp_enqueue_style( 'landline_css', get_stylesheet_uri() );
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
}

add_action( 'wp_enqueue_scripts', 'landline_scripts' );

add_filter('wp_title', 'landline_wp_title');
function landline_wp_title($input){
	$output = $input . get_bloginfo( 'name' );

	return $output;
}

function landline_excerpt_more($more) {
			 global $post;
	return '... </p><p><a class="moretag" href="'. get_permalink($post->ID) . '">Read more</a>';
}
add_filter('excerpt_more', 'landline_excerpt_more');

function landline_more_link( $more_link, $more_link_text ) {
	return str_replace( $more_link_text, 'Read more', $more_link );
}
add_filter( 'the_content_more_link', 'landline_more_link', 10, 2 );

?>