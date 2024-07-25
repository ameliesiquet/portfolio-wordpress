<?php
function portfolio_theme_enqueue_styles():void {
    wp_enqueue_style('portfolio-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'portfolio_theme_enqueue_styles');
