<?php get_header(); ?>


<section class="property pb-5">
    <h2 class="text-center pt-5 pb-5  font-weight-bold">Nos Propriétés</h2>

    <nav class="navbar w-75 mx-auto justify-content-around navbar-property">
        <?php $terms = get_terms('ville', array(
            'hide empty' => false
        )); ?>
        <li class="nav-item active">
            <a href="<?php echo site_url(); ?>/nos-proprietes">Tous</a>
        </li>
        <?php foreach ($terms as $term) : ; ?>
            <li class="nav-item active">
                <a href="<?php echo get_term_link($term->slug, 'ville'); ?>"><?php echo $term->name; ?></a>
            </li>
        <?php endforeach;; ?>

    </nav>
    <?php wp_reset_postdata(); ?>

    <div class="container d-flex flex-wrap justify-content-around mt-5 ">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="property_link">
                    <div class="card text-center" style="width: 22rem;">
                        <div class="card-img-top">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <div class="card-body bg-white">
                            <h3 class="card-title"><?php the_title(); ?></h3>
                            <h4 class="card-subtitle text-muted city"><?php echo get_post_meta($post->ID, 'ville', true); ?></h4>
                            <h5><?php echo get_post_meta($post->ID, 'prix', true); ?> €</h5>

                        </div>
                        <ul class=" card-menu list-group-flush options ">
                            <li class="list-group-item"><?php echo get_post_meta($post->ID, 'm2', true); ?> m2</li>
                            <li class="list-group-item"><?php echo get_post_meta($post->ID, 'sallebain', true); ?> Salle
                                de bain
                            </li>
                            <li class="list-group-item"><?php echo get_post_meta($post->ID, 'chambres', true); ?>
                                Chambres
                            </li>
                        </ul>
                    </div>
                </a>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</section>


<?php get_footer(); ?>



