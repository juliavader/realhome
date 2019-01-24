<?php /*Template Name: Contact*/  ;?>
<?php get_header() ;?>

<div class="container pb-5">
    <h1 class="pt-5 pb-5 font-weight-bold"><?php the_title() ;?></h1>


<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content() ;?>

    <?php endwhile; ?>
<?php endif; ?>

    <div class="d-flex flex-wrap justify-content-between">
            <div class=" col-sm-12 col-md-4 contact-sidebar-1  d-md-block d-lg-block ">

                <?php
                if(is_active_sidebar('contact-sidebar-1')){
                    dynamic_sidebar('contact-sidebar-1');
                }
                ?>
            </div>
            <div class="col-md-7 col-sm-12 contact-sidebar-2  d-md-block d-lg-block ">

                <?php
                if(is_active_sidebar('contact-sidebar-2')){
                    dynamic_sidebar('contact-sidebar-2');
                }
                ?>
            </div>

        </div>



</div>


<?php get_footer() ;?>