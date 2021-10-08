<?php

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function easv_register_resources() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
    wp_enqueue_style("easv", get_stylesheet_uri());
    wp_enqueue_style("style", get_stylesheet_directory_uri() . "/style.css"); 
    wp_enqueue_style("header", get_stylesheet_directory_uri() . "/styles/header.css"); 
    wp_enqueue_style("frontpage", get_stylesheet_directory_uri() . "/styles/frontpage.css"); 
    wp_enqueue_style("footer", get_stylesheet_directory_uri() . "/styles/footer.css"); 
    wp_enqueue_style("single_recipes", get_stylesheet_directory_uri() . "/styles/single-recipes.css"); 

    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js");
            /* Updated bootstrap and ajax  */
    wp_enqueue_script("bootstrap4css", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap4js", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js");
    wp_enqueue_script("ajax", "//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js");
            /*  End Updated bootstrap and ajax  */



}
add_action("wp_enqueue_scripts", "easv_register_resources");

function easv_register_menu(){
    register_nav_menu("main-menu", "Cook World menu");
}
add_action("init", "easv_register_menu")

?>




<?php



register_nav_menus( array(
    'alphamenu' => __( 'Alpha Menu', 'THEMENAME' ),
) );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}






function cptui_register_my_cpts_recipes() {

	/**
	 * Post Type: recipe.
	 */

	$labels = [
		"name" => __( "recipe", "custom-post-type-ui" ),
		"singular_name" => __( "recipes", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "recipe", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "recipes", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "recipes", $args );
}

add_action( 'init', 'cptui_register_my_cpts_recipes' );



?>







