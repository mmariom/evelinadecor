

<?php

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>






<div class="hero"  alt="hero_image"style="
    background-image:url(<?php the_field('single_background_img')?>);">
     <h1 class="single-hero-title"><?php the_field('single_title')?></h1>
 
</div>

<?php the_content() ?>




<main class="single-text-section">
                <div class="container col-md-12" style="padding-bottom:10vh;">   

                <?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
      


                            <div class="row justify-content-center mt-5">
                                <div class="col-12  col-md-7 ">
                                    <h2 style="text-align:center">
                                                         
                                     </h2>
                                   
                                </div>
                            
                            </div>


                            <div class="row justify-content-center mt-5" > 

                           

                                    <div class="col-12  col-md-6 galerydivimg1 "  id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

                                        <?php
                                        /**
                                         * Hook: woocommerce_before_single_product_summary.
                                         *
                                         * @hooked woocommerce_show_product_sale_flash - 10
                                         * @hooked woocommerce_show_product_images - 20
                                         */
                                        do_action( 'woocommerce_before_single_product_summary' );
                                        ?>
                                        </div>
                                   
                                    <div class="col-12 col-md-4 layoutproductdesktop">
                               
                                <?php the_field("single_body_text")
                                
                                
                                ?> 

                             
                                
                                </div>

                                <div class="col-12 col-md-2  layoutproductdesktop thelist" >
                                            <div class="summary entry-summary">
                                                    <?php
                                                    /**
                                                     * Hook: woocommerce_single_product_summary.
                                                     *
                                                     * @hooked woocommerce_template_single_title - 5
                                                     * @hooked woocommerce_template_single_rating - 10
                                                     * @hooked woocommerce_template_single_price - 10
                                                     * @hooked woocommerce_template_single_excerpt - 20
                                                     * @hooked woocommerce_template_single_add_to_cart - 30
                                                     * @hooked woocommerce_template_single_meta - 40
                                                     * @hooked woocommerce_template_single_sharing - 50
                                                     * @hooked WC_Structured_Data::generate_product_data() - 60
                                                     */
                                                    do_action( 'woocommerce_single_product_summary' );
                                                    ?>
                                                </div>

                                


                                </div>

                                
                            
                            </div>


                        </div>

                </div>


           







                
        

</main>   


                   

                   
            
    


            <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>



<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
do_action( 'woocommerce_after_single_product_summary' );
?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>




     

                
        
</main>






<?php endwhile;


else :
	echo '<p>There are no posts!</p>';

endif;

get_footer();


?>





