<?php

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>




<div class="hero" alt="hero-image" style="
    background-image:url(<?php the_field('header_image')?>);
">
  <h2 class="hero-title"><?php the_field('headet_title')?></h2>
  <p class="hero-content"><?php the_field('header_desription')?></p>
 
</div>

<?php the_content() ?>


<main>
                <div class="container col-md-8">   


      


                            <div class="row justify-content-center mt-5">
                                <div class="col-12  col-md-8">
                                    <h3 style="text-align:center">
                                    <?php the_field('homepage_welcome_text_title')?>
                                    </h3>
                                </div>
                            
                            </div>


                            <div class="row justify-content-center mt-5  ">
                                <div class="col-12 col-md-5">
                                <?php the_field('homepage_welcome_text_left_artcile')?>
                                
                                </div>

                                <div class="col-12 col-md-5 d-flex justify-content-center" style="align-items:center;">
                                <?php the_field('homepage_welcome_text_right_video')?>
                                   
                                </div>
                            
                            </div>


                        </div>

                </div>
        

           
            <div class="container mt-5">

                        <div class="row justify-content-center foodsection mb-3">

                                    <div class="col-12  col-md-8">
                                        <h3 style="text-align:center">
                                        
                                        <?php the_field('frontpage_section1_title')?>
                                        </h3>
                                    </div>
                    
                         </div>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-center foodsection">
                                    <div>
                                    <a id="hyperlinkremove" href="<?php the_field("frontpage_section1_item1_link")?>">
                                    <img class="imgheight" src="<?php the_field("frontpage_section1_item1_image")?>" alt="product" width="100%" height="90%" alt="" srcset="">
                                    <p class="text-center mt-2"><?php the_field("frontpage_section1_item1_text")?></p>
                                    </a>
                                    </div>

                                    <div >
                                    <a id="hyperlinkremove"  href="<?php the_field("frontpage_section1_item2_link")?>">
                                    <img class="imgheight" src="<?php the_field("frontpage_section1_item2_image")?>" alt="product" width="100%" height="90%" alt="" srcset="">
                                    <p class="text-center mt-2"><?php the_field("frontpage_section1_item2_text")?></p>
                                    </a>
                                    </div>


                                    <div >
                                    <a id="hyperlinkremove" href="<?php the_field("frontpage_section1_item3_link")?>">
                                    <img class="imgheight" src="<?php the_field("frontpage_section1_item3_image")?>" alt="product" width="100%" height="90%" alt="" srcset="">
                                    <p class="text-center mt-2"><?php the_field("frontpage_section1_item3_text")?></p>
                                    </a>
                                    </div>
                        
                        </div>
            </div>

                   
            <div class="container mt-5">

                        <div class="row justify-content-center foodsection mb-3">
                                    <div class="col-12  col-md-8">
                                        <h3 style="text-align:center">
                                        <?php the_field('frontpage_section2_title')?>
                                        </h3>
                                    </div>
                    
                         </div>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-center foodsection">
                                    <div>
                                    <a id="hyperlinkremove" href="<?php the_field("frontpage_section2_item1_link")?>">
                                    <img class="imgheight" src="<?php the_field("frontpage_section2_item1_image")?>" alt="product" width="100%" height="90%" alt="" srcset="">
                                    <p class="text-center mt-2"><?php the_field("frontpage_section2_item1_text")?></p>
                                    </a>
                                    </div>

                                    <div >
                                    <a id="hyperlinkremove" href="<?php the_field("frontpage_section2_item2_link")?>">
                                    <img class="imgheight" src="<?php the_field("frontpage_section2_item2_image")?>" alt="product" width="100%" height="90%" alt="" srcset="">
                                    <p class="text-center mt-2"><?php the_field("frontpage_section2_item2_text")?></p>
                                    </a>
                                    </div>


                                    <div >
                                    <a id="hyperlinkremove" href="<?php the_field("frontpage_section2_item3_link")?>">   
                                    <img class="imgheight" src="<?php the_field("frontpage_section2_item3_image")?>" alt="product" width="100%" height="90%" alt="" srcset="">
                                    <p class="text-center mt-2"><?php the_field("frontpage_section2_item3_text")?></p>
                                    </a>
                                    </div>
                        
                        </div>
            </div>
    

                   
            <div class="container mt-5">

                        <div class="row justify-content-center foodsection mb-3">
                                    <div class="col-12  col-md-8">
                                        <h3 style="text-align:center">
                                        <?php the_field('frontpage_section3_title')?>
                                        </h3>
                                    </div>
                    
                         </div>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-center foodsection">
                                    <div>
                                    <a id="hyperlinkremove" href="<?php the_field("frontpage_section3_item1_link")?>">
                                    <img class="imgheight" src="<?php the_field("frontpage_section3_item1_image")?>" alt="product" width="100%" height="90%" alt="" srcset="">
                                    <p class="text-center mt-2"><?php the_field("frontpage_section3_item1_text")?></p>
                                    </a>   
                                </div>

                                    <div >
                                    <a id="hyperlinkremove" href="<?php the_field("frontpage_section3_item2_link")?>">
                                    <img class="imgheight" src="<?php the_field("frontpage_section3_item2_image")?>" alt="product" width="100%" height="90%" alt="" srcset="">
                                    <p class="text-center mt-2"><?php the_field("frontpage_section3_item2_text")?></p>
                                    </a>
                                </div>


                                    <div >
                                    <a id="hyperlinkremove" href="<?php the_field("frontpage_section3_item3_link")?>">
                                    <img class="imgheight" src="<?php the_field("frontpage_section3_item3_image")?>" alt="product" width="100%" height="90%" alt="" srcset="">
                                    <p class="text-center mt-2"><?php the_field("frontpage_section3_item3_text")?></p>
                                    </a>
                                    </div>
                        
                        </div>


                        
            </div>





    









                



                
        
</main>



<?php endwhile;


else :
	echo '<p>There are no posts!</p>';

endif;




?>
<?php get_footer(); ?>
