<?php /*Template Name: HomePage*/  ;?>
<?php get_header() ;?>


    <section class=" container-fluid home-featured-image d-flex align-items-center justify-content-center" style="
        background:url('<?php header_image() ;?>');">
        <div class="row">
            <h2 class=" .container mt-6 text-uppercase  text-light text-center"><?php bloginfo('name') ;?> <?php bloginfo('description') ?></h2>
        </div>
    </section>


<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <section class="container mt-5 mb-5 agency">
        <div class="row ">
            <div class="col article_header text-md-right d-flex align-items-md-center justify-content-md-end "><h2><?php the_title() ;?> </h2></div>
            <div class="col article_content pl-md-5"><p><?php the_content();?></p></div>
        </div>
    </section>

    <section class=" text-center specs d-flex  flex-wrap justify-content-center pt-5 pb-5">

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

    <section class="property pb-5">
        <h2 class="text-center pt-5 pb-5 property-title">Nos <span class="font-weight-bold">Propriétés</span> </h2>

        <p class="w-50 mx-auto text-center mt-4">Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et ommodo consequat. </p>

        <div class="container d-flex flex-wrap justify-content-around mt-5 ">

        <?php
        $args = array(
            'post_type' => 'propriete',
            'posts_per_page' => 6

        );

        // Query the posts:
        $propriete_query = new WP_Query($args);

        // Loop through the obituaries:
        while ($propriete_query->have_posts()) : $propriete_query->the_post();  ?>


            <a href="<?php the_permalink() ;?>" class ="property_link">
                <div class="card text-center" style="width: 22rem;">
                 <div class="card-img-top">
                     <?php the_post_thumbnail() ;?>
                 </div>

                    <div class="card-body bg-white">
                        <h3 class="card-title"><?php the_title() ;?></h3>
                        <h4 class="card-subtitle text-muted city"><?php echo get_post_meta($post->ID, 'ville', true) ;?></h4>
                        <h5><?php echo get_post_meta($post->ID, 'prix', true) ;?> €</h5>

                    </div>
                    <ul class=" card-menu list-group-flush options ">
                        <li class="list-group-item"><?php echo get_post_meta($post->ID, 'm2', true) ;?> m2</li>
                        <li class="list-group-item"><?php echo get_post_meta($post->ID, 'sallebain', true) ;?> Salle de bain </li>
                        <li class="list-group-item"><?php echo  get_post_meta($post->ID, 'chambres', true) ;?> Chambres</li>
                    </ul>
                </div>
            </a>


        <?php endwhile;
        // Reset Post Data
        wp_reset_postdata(); ?>

        </div>
        <a href="<?php echo site_url() ;?>/nos-proprietes" class="btn btn-property text-light text-uppercase font-weight-bold text-center mt-3  ">Voir Toutes</a>
    </section>

    <section class="agent">
        <?php
          $args = array(
              'post_type' => 'agents',
              'posts_per_page' => 1
          );


          $agents_query = new WP_Query($args);


          while ($agents_query->have_posts()) : $agents_query->the_post();  ?>


        <div class="container">
            <div class="row d-sm-block d-s-block d-xs-block d-md-flex">
                <div class="col agent-img text-right" >
                    <?php the_post_thumbnail() ;?>
                </div>
                <div class="col agent-body pt-5">
                    <h2 class="text-left pt-md-5 pb-5 agent-title">Nos <span class="font-weight-bold">Agents</span> </h2>
                    <h3 class="card-title font-weight-bold city"><?php the_title() ;?></h3>
                    <p class=" text-muted city"><?php the_content() ;?></p>
                </div>
            </div>
        </div>
        <?php endwhile;
        // Reset Post Data
        wp_reset_postdata(); ?>

        </section>

    <section class="partners pb-5">
        <div class="container">
            <div class="row">
                <div class="col-4"><h3 class="partners-title text-center">Our <span class="font-weight-bold">Partners</span></h3></div>
        <?php if( have_rows('partenaires') ): ;?>
        <?php  while ( have_rows('partenaires') ) : the_row(); ;?>

                <div class="col partners-img "><img src="<?php echo the_sub_field('image'); ;?>" alt="<?php  the_sub_field('titre'); ;?>"> </div>

        <?php   endwhile;

        else :

        // no rows found

        endif;?>
            </div>
        </div>
    </section>



    <?php endwhile; ?>
<?php endif; ?>



<?php get_footer() ;?>