<?php

if ( ! function_exists( 'ferrywpthemev2_setup' ) ) :
		function ferrywpthemev2_setup()	{
			add_theme_support( 'title-tag' );
			
			register_nav_menus(
				array(
				  'primary-nav' => esc_html__( 'Primary Nav', 'ferrywpthemev2' ),
				  'extra-menu' => __( 'Extra Menu' )
				)
			);
		}
endif; // ferrywpthemev2_setup
add_action( 'after_setup_theme', 'ferrywpthemev2_setup' );

function ferrywpthemev2_scripts() {
	wp_enqueue_style( 'bootstrap-sytle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css' );
	wp_enqueue_style( 'ubuntu-font', 'https://fonts.googleapis.com/css?family=Ubuntu&display=swap' );
	wp_enqueue_style( 'ferrywpthemev2-style', get_stylesheet_uri() );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'ferrywpthemev2_scripts' );

?>