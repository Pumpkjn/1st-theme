
<?php 

function footer_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery-1.7.1.min.js', array('jquery'));
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.tips.js', array('jquery'));
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.tipTip.js', array('jquery'));
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/colorpicker.js', array('jquery')); 
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.lightbox-0.5.js', array('jquery'));

}
add_action( 'wp_footer', 'footer_scripts' );
?>