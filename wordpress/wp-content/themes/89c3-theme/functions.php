<?php

//Charge le JS et le CSS
function themeibp_register_assets()
{
    wp_register_style('css', '/wp-content/themes/89c3-theme/assets/css/base.css', ['fonts', 'main', 'vendor', 'style'], false);
    wp_register_style('fonts', '/wp-content/themes/89c3-theme/assets/css/fonts.css');
    wp_register_style('main', '/wp-content/themes/89c3-theme/assets/css/main.css', [], false);
    wp_register_style('vendor', '/wp-content/themes/89c3-theme/assets/css/vendor.css');
    wp_register_style('style', '/wp-content/themes/89c3-theme/assets/css/style.css');

    wp_register_script('jquery', '/wp-content/themes/89c3-theme/assets/js/jquery-3.2.1.min.js', [], false, true);
    wp_register_script('modernizr', '/wp-content/themes/89c3-theme/assets/js/modernizr.js', [], false);
    wp_register_script('pace', '/wp-content/themes/89c3-theme/assets/js/pace.min.js', [], false);
    wp_register_script('plugins', '/wp-content/themes/89c3-theme/assets/js/plugins.js', [], false, true);
    wp_register_script('main', '/wp-content/themes/89c3-theme/assets/js/main.js', [], false, true);

    wp_enqueue_style('css');

    wp_enqueue_script('modernizr');
    wp_enqueue_script('pace');
    wp_enqueue_script('jquery');
    wp_enqueue_script('plugins');
    wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'themeibp_register_assets');