<?php
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );

function wpm_enqueue_styles(){
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function hc_register_scripts() {
    wp_enqueue_script('jquery-slim', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), false, false);
    wp_enqueue_script('jqury-migrate', '//code.jquery.com/jquery-1.11.0.min.js', array(), false, false);
    wp_enqueue_script('nav-script', get_stylesheet_directory_uri(). '/assets/js/hc-sticky-nav.js', array(), false, false);
}

add_action( 'wp_enqueue_scripts', 'hc_register_scripts' );

/**
 * Remove new widget editor
 */
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
add_filter( 'use_widgets_block_editor', '__return_false' );

/* ajout logo */
add_theme_support('custom-logo');


/* autoriser les svg */
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

// sidebar
add_action( 'widgets_init', 'sortie_de_crise_widgets_init' );
function sortie_de_crise_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'header sidebar', 'sortie_de_crise_website' ),
        'id'            => 'header-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'footer a propos', 'sortie_de_crise_website' ),
        'id'            => 'footer-a-propos',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'footer nous contacter', 'sortie_de_crise_website' ),
        'id'            => 'footer-nous-contacter',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'footer reseaux', 'sortie_de_crise_website' ),
        'id'            => 'footer-reseaux',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'mentions footer', 'sortie_de_crise_website' ),
        'id'            => 'footer-mentions',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}

///////////////////////////////////////////widget barre recherche
// Creating the widget 
class wpb_widget extends WP_Widget {
  
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'UC_recherche', 
      
    // Widget name will appear in UI
    __('UC recherche', 'UC_widget_domain'), 
      
    // Widget description
    array( 'description' => __( 'barre de recherche du header', 'UC_widget_domain' ), ) 
    );
    }
      
    // Creating widget front-end
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'recherche', $instance['rechercher'] );
      
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
      
    // This is where you run the code and display the output
    echo "<form id='searchform' method='get' action=";
    echo esc_url( home_url( '/' ) );
    echo ">";
    echo "<input type='text' class='search-field' name='s' placeholder='Rechercher' value='";
    echo get_search_query();
    echo "'>";
    echo "<input class='submit' value='' type='submit'></form>";
    }
    
    // Widget Backend 
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'New title', 'wpb_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    } 
     
     
    // Register and load the widget
    function wpb_load_widget() {
        register_widget( 'wpb_widget' );
    }
    add_action( 'widgets_init', 'wpb_load_widget' );


?>