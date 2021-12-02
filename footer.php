


           <div class="rouded-top-footer"></div>
           <footer>

   

             <!--   CF didnt worked for footer , so its hardcoded / need to be sovled  -->
                <div class="effect jaques">
                    <h2>Contact us via: </h2>
                    <div class="buttons">
                    <a href="https://www.facebook.com/Evelina.Ebersonaite" class="fb" title="Join us on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://instagram.com/evelina.decor?utm_medium=copy_link" class="insta" title="Join us on Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="http://evelinadecor.com/contact-us/" class="in" title="Contact us"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </div>
                    <div class="copyright">
                    ©
                         <?php
                    $year = date("Y");
                    echo $year;
                    ?>
                    
                    <?php echo get_bloginfo( 'name' ); ?>
                    </div>

                </div>
        
               

               

            </footer>
          
            <?php wp_footer() ?>
</body>
</html>


