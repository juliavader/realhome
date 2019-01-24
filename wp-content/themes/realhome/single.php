<?php get_header() ;?>


    <div class="container pt-5">
        <h2 ><?php the_title() ;?></h2>
        <div class="row pt-3 justify-content-end">
            <div class="col-md-7 col-sm-12 mr-md-5  mr-sm-0   actu">
                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                                <?php the_content() ;?>
                        <hr>
                       <p><?php the_date() ;?> / par <span><?php the_author() ;?></span></p>
                        <hr>



                    <?php endwhile; ?>
                <?php endif; ?>
                <?php comments_template()?>

            </div>
            <div class="col actu-sidebar1  d-none d-md-block d-lg-block ">

                <?php
                if(is_active_sidebar('actu-sidebar-1')){
                    dynamic_sidebar('actu-sidebar-1');
                }
                ?>

            </div>

        </div>
    </div>


<?php get_footer() ;?>
