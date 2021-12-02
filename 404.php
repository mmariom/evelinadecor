<?php


get_header();
?>

	<main id="primary" class="error-site">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'botiga' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">

			


				<?php if ( class_exists( 'WooCommerce' ) ) : ?>

                    <div class="container">  
                        <div class="row justify-content-center  mb-3">

                            <div class="col-12  col-md-10">
					            <div class="products404">
						<h3><?php esc_html_e( 'Most Popular', 'botiga' ); ?></h3>
						<?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity"]'); ?>
					        </div>
                    </div>
                    </div>	
                    </div>						
				<?php endif; ?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
