<?php get_header() ?>

      <div class="container mt-5">
        <main class="row" id="sector-it">
            category.php
          <div class="container-fluid col-12">
            <div class="row">
           
                        <?php while(have_posts()):the_post() ?>
                        <div class="col-4">
                            <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                <h2><a href="<?php the_permalink() ?>"> <?php the_title()?></a></h2>
                                </div>
                            </div>
                            </div>
                        </div>
                        <?php endwhile ?>
                    

  
        </div>
        </div>
        </main>
</div>

      <?php get_footer() ?>