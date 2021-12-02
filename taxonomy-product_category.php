<?php get_header() ?>



     <div class="categorymain">



        <div class="container">
          <div class="row justify-content-center foodsection mb-3">

          <div class="col-12  col-md-8">
              <h3 style="text-align:center">
              
              <?php 
                  $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
                  echo $term->name; // will show the name
                  ?>
              </h3>
          </div>

            </div>
                
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-center foodsection">
                  <?php while(have_posts()):the_post() ?>                    
                  <div class="mt-5">
                  <p class="text-center mt-2" id="categoryfoodname"><?php the_field("single_title")?></p>
                  
                                        <a href="<?php the_permalink() ?>">
                                      <img class="imgheight" src="<?php the_field("single_background_img")?>" alt="product in category" width="100%" height="90%" alt="" srcset="">
                                      </a>
                                    </div>


                                      <?php endwhile ?>
                                      </div>
                        
        
            </div>

        </div>

      
</div>

<?php get_footer() ?>




 