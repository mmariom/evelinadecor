<?php

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>






<div class="hero" style="
    background-image:url(<?php the_field('single_background_img')?>);">

 
</div>

<?php the_content() ?>


<main class="single-text-section">
                <div class="container col-md-8 ">   


      


                            <div class="row justify-content-center mt-5">
                                <div class="col-12  col-md-7 ">
                                    <h2 style="text-align:center">
                                    <?php the_field("single_title")?>                             
                                     </h2>
                                </div>
                            
                            </div>


                            <div class="row justify-content-center mt-5">
                                <div class="col-12 col-md-4 thelist" >
                                <?php the_field("single_ingredients_title")?>
                                <p></p>
                                    <ul style="list-style-type: none; padding-left: 0px">
                                    

      
                                        <?php the_field("single_ingredients")?>
                                    </ul>
                                </div>

                                <div class="col-12 col-md-7">
                               
                                <?php the_field("single_body_text")?> 
                                </div>
                            
                            </div>


                        </div>

                </div>
        

</main>           
            <div class="container single-gallery-section">



            <div class="row justify-content-around">
                <div class="col-12 col-md-4 galerydivimg1">
                <img class="galeryimg1" src="<?php the_field("single_image_left")?>" alt="logo" width="100%" height="100%" alt="" srcset="">
                </div>
                <div class="col-12 col-md-7 galerydivimg2">
                <img class="galeryimg2" src="<?php the_field("single_image_right")?>" alt="logo" width="100%" height="100%" alt="" srcset="">
                </div>
                </div>



            

  
                       
            </div>

                   

                   
            
    









                



                
        
</main>



<?php endwhile;


else :
	echo '<p>There are no posts!</p>';

endif;

get_footer();


?>

