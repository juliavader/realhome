<?php /*Template Name: About*/  ;?>
<?php get_header() ;?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="about">
        <div class="container mt-5 mb-5">
            <h2 class="pb-5 title-about"><?php the_title() ;?></h2>
            <div class="row d-sm-block d-xs-block d-s-block d-lg-flex justify-content-between ">
                <div class="col pb-sm-5 about-image "><?php the_post_thumbnail() ;?></div>
                <div class="col"><?php the_content() ;?></div>
            </div>
        </div>
    </section>

    <section class=" text-center specs d-flex d-sm-flex  flex-wrap justify-content-center pt-5 pb-5">

        <?php if( have_rows('spec_') ): ?>
            <?php  while ( have_rows('spec_') ) : the_row();?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <i class="<?php the_sub_field('logo');?>"></i>
                        <h5 class="card-title mt-4"> <?php the_sub_field('titre');?></h5>
                        <p class="card-text mt-4"><?php  the_sub_field('zonetexte');;?></p>
                    </div>
                </div>
            <?php endwhile;  ;?>
        <?php else : ;?>

            // no rows found

        <?php  endif; ;?>

    </section>


    <section class="agents">
        <div class="container mt-5 mb-5">

            <h2 class="mb-5">Notre <span class="font-weight-bold ">Équipe</span></h2>

            <div class="row justify-content-around">
        <?php
        $args = array(
            'post_type' => 'agents',
            'posts_per_page' => -1
        );

        $agents_query = new WP_Query($args);

        while ($agents_query->have_posts()) : $agents_query->the_post();  ?>

            <div class="card" style="width: 16rem;" >
                <div class="card-img-top">
                    <?php the_post_thumbnail() ;?>
                </div>

                <div class="card-body">
                    <h3 class="card-title text-center font-weight-bold"><?php the_title() ;?></h3>

                    <h4 class="card-subtitle text-muted about-agent-work text-center"><?php the_field('work') ;?></h4>

                </div>
            </div>

        <?php endwhile;
        // Reset Post Data
        wp_reset_postdata(); ?>
            </div>
        </div>
    </section>



<?php endwhile; endif; ;?>

<?php get_footer() ;?>