<?php get_header() ;?>

<div class="container pt-5">
<h2 class="text-center">Nos <span class="font-weight-bold"> Actualités</span></h2>
    <div class="row pt-5 justify-content-end">
        <div class="col-md-7 col-sm-12 mr-md-5  mr-sm-0   actu">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>


                <div class="card actu mt-5 pb-4" >
                    <?php the_post_thumbnail() ;?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ;?></h5>
                        <p class="card-text"><?php the_excerpt() ;?></p>
                        <a href="<?php the_permalink() ;?>" class="btn btn-actu text-light mt-3">Lire la suite</a>
                    </div>
                </div>


    <?php endwhile; ?>
<?php endif; ?>
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