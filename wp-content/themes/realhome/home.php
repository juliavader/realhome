<?php get_header() ;?>

<div class="container">
<h2>Nos <span class="font-weight-bold"> Actualités</span></h2>
    <div class="row">
        <div class="col">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>


        <div class="card" >
            <?php the_post_thumbnail() ;?>
            <div class="card-body">
                <h5 class="card-title"><?php the_title() ;?></h5>
                <p class="card-text"><?php the_excerpt() ;?></p>

            </div>
        </div>


    <?php endwhile; ?>
<?php endif; ?>
        </div>
        <div class="col">
            <?php the_sidebar() ;?>
        </div>

    </div>
</div>


<?php get_footer() ;?>