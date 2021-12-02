<?php get_header() ?>







<div class="checkout-layout">



<div class="container">
  <div class="row justify-content-center cart-design">

  <div class="col-12  col-md-10">
  <?php the_content()?>
  </div>

	</div>
		
		  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-center ">
		  <?php while(have_posts()):the_post() ?>                    
		

							  <?php endwhile ?>
							  </div>
				
							 
	</div>

</div>



</div>

<?php get_footer() ?>


                
        