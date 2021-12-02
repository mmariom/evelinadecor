<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <script src="https://use.fontawesome.com/2302f30595.js"></script>
    
    <?php wp_head() ?>



      </head>
      <body <?php body_class(); ?>>


      <!--  MAIN HEADER  -->
      <header class="head-main">
      <a class="nav-button ml-auto  hamburger"><span id="nav-icon3"><span></span><span></span><span></span><span></span></span></a>

          <div class="navigationmenu">
              <div class="dontshowinmobile"></div>
           


             
              <a href="<?php echo get_home_url(); ?>" style="text-align:center;  text-decoration: none;">
              <h1 class="sitename">evelin decor</h1>

             


        </div>





         <!--navbar end-->
        
   



         
        <div class="fixed-top main-menu">
          <div class="d-flex justify-content-center pt-4">
            <ul class="nav flex-column">
              <li class="nav-item delay-1"><a class="nav-link
              <?php
                                            wp_nav_menu( array(
                                              'theme_location'  => 'alphamenu',
                                              'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                              'container'       => 'div',
                                              'container_class' => 'collapse navbar-collapse',
                                              'container_id'    => 'bs-example-navbar-collapse-1',
                                              'menu_class'      => 'navbar-nav mr-auto',
                                              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                              'walker'          => new WP_Bootstrap_Navwalker(),
                                          ) );
                                          
                                        ?>


              " ></a></li>
           


                
            </ul>
          </div>




        </div> <!--main-menu end-->


   
      </header>


      <div class="desktop-nav">
      <a href="<?php echo get_home_url(); ?>" style="text-align:center;  text-decoration: none;" >
              <h1 class="sitename">evelin decor</h1>
      <nav class="navbar navbar-expand-md navbar-light bg-light desk-menu-hover" role="navigation">
    
    


    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon "></span>
        
    </button>
    
   
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'alphamenu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    
</nav>

      </div>

                       

       <!-- END  MAIN HEADER  
      menu imported from : https://bootsnipp.com/snippets/z85Qd
                                            
      -->

 



      <script>
        $(document).ready(function(){
        $('.nav-button').click(function(){
        $('body').toggleClass('nav-open');
        });
      });
      </script>

<!-- 
  
        <!-- <div class="header-search">
			<?php get_search_form(); ?>
       


     -->

