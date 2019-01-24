<?php


// --- CSS and JS

add_action( 'wp_enqueue_scripts', 'register_styles' );

function register_styles() {


//    bootstrap
    wp_register_style('Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');
    wp_enqueue_style('Bootstrap');


//    font-awesome
    wp_register_style( 'Fontawesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
    wp_enqueue_style( 'Fontawesome');


//    Font Raleway
    wp_register_style( 'Raleway', 'https://fonts.googleapis.com/css?family=Raleway' );
    wp_enqueue_style( 'Raleway');

//    Playfair Display
    wp_register_style( 'Playfair', 'https://fonts.googleapis.com/css?family=Playfair+Display' );
    wp_enqueue_style( 'Playfair');


//    style.css
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    //   Jquery
    wp_enqueue_script( 'Jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js',   '', '', true);

    //    openstreet map
    wp_enqueue_script( 'OMS', 'https://api.openstreetmap.org/api/0.6/map?bbox=11.54,48.14,11.543,48.145',  '', '', true);

    //    script.js
    wp_enqueue_script('script', get_template_directory_uri().'/script.js', '', '', true);
}

// --- Custom logo

add_theme_support( 'custom-logo' );

// --- Navigation Menu

function rs_menu() {
    register_nav_menu('RS-menu',__( 'Menu Reseaux Sociaux' ));
}
add_action( 'init', 'rs_menu' );

function pc_menu() {
    register_nav_menu('PC-menu',__( 'Menu Principal' ));
}
add_action( 'init', 'pc_menu' );

// --- Custom header

$defaults = array(
    'width'                  => 1900,
    'height'                 => 545,
    'uploads'                => true,
    'random-default'         => false,
    'header-text'            => true,

);
add_theme_support( 'custom-header', $defaults );


// --- Custom Post Type propriété
function wp_CPT_propriete() {

    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Propriétés', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Propriétés', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Propriétés'),
        // Les différents libellés de l'administration
        'all_items'           => __( 'Toutes les Propriétés'),
        'view_item'           => __( 'Voir les Propriétés'),
        'add_new_item'        => __( 'Ajouter une nouvelle Propriétés'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer la Propriétés'),
        'update_item'         => __( 'Modifier la Propriétés'),
        'search_items'        => __( 'Rechercher une Propriétés'),
        'not_found'           => __( 'Non trouvée'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label'               => __( 'Propriétés'),
        'description'         => __( 'Tous sur Propriétés'),
        'labels'              => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        /*
        * Différentes options supplémentaires
        */
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'propriete'),

    );

    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type( 'propriete', $args );

}

add_action( 'init', 'wp_CPT_propriete');


// --- Custom Post Type agents
function wp_CPT_agents() {

    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Agents', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Agents', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Agents'),
        // Les différents libellés de l'administration
        'all_items'           => __( 'Tous les agents'),
        'view_item'           => __( 'Voir les agents'),
        'add_new_item'        => __( 'Ajouter un agent'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer votre agent'),
        'update_item'         => __( 'Modifier votre agent'),
        'search_items'        => __( 'Rechercher un agent'),
        'not_found'           => __( 'Non trouvée'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label'               => __( 'Agents'),
        'description'         => __( 'Tous sur vos Agents'),
        'labels'              => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        /*
        * Différentes options supplémentaires
        */
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'agents'),

    );

    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type( 'agents', $args );

}

add_action( 'init', 'wp_CPT_agents');



// --- Thumbnail

add_theme_support('post-thumbnails');

// --- register widget footer

register_sidebar( array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Footer Sidebar 2',
    'id' => 'footer-sidebar-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Footer Sidebar 3',
    'id' => 'footer-sidebar-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Actu Sidebar 1',
    'id' => 'actu-sidebar-1',
    'description' => 'Appears in the actuality area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Contact Sidebar 1',
    'id' => 'contact-sidebar-1',
    'description' => 'Appears in the actuality area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Contact Sidebar 2',
    'id' => 'contact-sidebar-2',
    'description' => 'Appears in the actuality area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );




//taxonomy villes

add_action( 'init', 'ville_tax', 0 );

function ville_tax() {

// Labels part for the GUI

    $labels = array(
        'name' => _x( 'ville', 'taxonomy general name' ),
        'singular_name' => _x( 'ville', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Topics' ),
        'popular_items' => __( 'Popular Topics' ),
        'all_items' => __( 'All Topics' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Topic' ),
        'update_item' => __( 'Update Topic' ),
        'add_new_item' => __( 'Add New Topic' ),
        'new_item_name' => __( 'New Topic Name' ),
        'separate_items_with_commas' => __( 'Separate topics with commas' ),
        'add_or_remove_items' => __( 'Add or remove topics' ),
        'choose_from_most_used' => __( 'Choose from the most used topics' ),
        'menu_name' => __( 'Topics' ),
        'has_archive' => true,
    );

// Now register the non-hierarchical taxonomy like tag

    register_taxonomy('ville','propriete',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'ville' ),
    ));
}





