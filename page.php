
  <?php get_header() ?>



                <?php while(have_posts()):the_post() ?>

                <div class="container mt-5">
                     <main class="row" id="programme-md">
                        <section class="col-9">
                            <h1><?php the_title() ?></h1>
                            <?php the_content() ?>


                        </section>
                        <aside class="col-3">
                            <div class="card">
                                <img src="<?php the_field("image")?>" class="card-img-top" alt="...">
                                <div class="card-header">Information</div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6 fw-bold">Duration: </div>
                                        <div class="col-6"> <?php the_field("duration")?></div>
                                        <div class="col-6 fw-bold">Economy:</div>
                                        <div class="col-6"><?php the_field("economy")?></div>
                                        <div class="col-6 fw-bold">Start of term:</div>
                                        <div class="col-6"><?php the_field("start")?></div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </main>
                </div>


    <?php endwhile ?>
     <?php get_footer() ?>