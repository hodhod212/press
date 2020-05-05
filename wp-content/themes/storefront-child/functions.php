<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{

    $parent_style = 'storefront-style'; // This is 'storefront-style' for the Storefront theme.

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}
?>

<?php
function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/js/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');
?>




<?php
add_action('wp_enqueue_scripts', 'mygoogleapi_enqueue_scripts');
function mygoogleapi_enqueue_scripts()
{
    wp_enqueue_script('js-google', '//maps.googleapis.com/maps/api/js?key=AIzaSyDuY8nVHj0InqQ9tokmYp_k6GtyYXQuJ6A', null, null);
}
?>
<?php
//Google map
function my_acf_init()
{

    acf_update_setting('google_api_key', 'AIzaSyBpNvCqTf6b4Z108tvnhcirlfLlxsEyOcg');
}

add_action('acf/init', 'my_acf_init');
?>	

<?php //<~ don't add me in

// Add in your functions.php
add_action('wp_enqueue_scripts', 'themeprefix_google_map_script'); // Firing the JS and API
// Enqueue Google Map scripts
function themeprefix_google_map_script()
{
    wp_enqueue_script('google-map', get_stylesheet_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('google-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBpNvCqTf6b4Z108tvnhcirlfLlxsEyOcg', null, null, true); // Add in your key
}
?>
<?php
//remove page title
add_action('wp', 'bbloomer_storefront_remove_title_from_home_default_template');

function bbloomer_storefront_remove_title_from_home_default_template()
{
    if (is_front_page()) remove_action('storefront_page', 'storefront_page_header', 10);
}
?>
<?php


?>
