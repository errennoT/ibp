<?php

//Ajoute les fonctionnalités au thème
function themeibp_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
    add_image_size('card', 450, 600, true);
}

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

//Application d'un filtre au titre
function themeibp_title_separator()
{
    return "|";
}

//Application d'un filtre dans la pagination
function themeibp_pagination()
{
    $pages = paginate_links(
        [
            'type' => 'array',
            'prev_text' => __('&laquo; Précédent'),
            'next_text' => __('Suivant &raquo;'),
        ]
    );
    if ($pages === null) {
        return;
    }
    echo '<nav class="pgn">';
    echo '<ul>';
    foreach ($pages as $page) {
        echo '<li>';
        echo str_replace('page-numbers', 'pgn__num', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}

//Ajout des taxonomies genre et nationalite + ajout d'un custom post
function themeibp_init()
{
    register_taxonomy('genre', 'film', [
        'labels' => [
            'name' => 'Genre',
            'singular_name'     => 'Genre',
            'plural_name'       => 'Genres',
            'search_items'      => 'Rechercher des genres',
            'all_items'         => 'Tous les genres',
            'edit_item'         => 'Editer le genre',
            'update_item'       => 'Mettre à jour le genre',
            'add_new_item'      => 'Ajouter un nouveau genre',
            'new_item_name'     => 'Ajouter un nouveau genre',
            'menu_name'         => 'Genre',
        ],
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);

    register_taxonomy('nationalite', 'film', [
        'labels' => [
            'name' => 'Nationalité',
            'singular_name'     => 'Nationalité',
            'plural_name'       => 'Nationalités',
            'search_items'      => 'Rechercher des nationalités',
            'all_items'         => 'Tous les nationalités',
            'edit_item'         => 'Editer le nationalité',
            'update_item'       => 'Mettre à jour le nationalité',
            'add_new_item'      => 'Ajouter un nouveau nationalité',
            'new_item_name'     => 'Ajouter un nouveau nationalité',
            'menu_name'         => 'Nationalité',
        ],
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);

    register_post_type('film', [
        'label' => 'Film',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-plus',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'has_archive' => true,
    ]);
}

//Ajout de plusieurs customs fields pour les customs posts
function themeibp_add_custom_box()
{
    add_meta_box('themeibp_rate', 'Détails', 'themeibp_render_box', 'film');
}

//Ajout du formulaire des customs fields
function themeibp_render_box($post)
{
?>
    <?php
    $fieldRate = get_post_meta(get_the_ID(), 'themeibp_rate', true);
    $fieldDirector = get_post_meta(get_the_ID(), 'themeibp_director', true);
    $fieldActor = get_post_meta(get_the_ID(), 'themeibp_actor', true);
    ?>

    <label for="themeibp_rate">Note du film</label></br>
    <input type="text" name="themeibp_rate" value="<?= ($fieldRate === null) ? '' : $fieldRate; ?>">
    </br></br>

    <label for="themeibp_director">Réalisateur(s) du film</label></br>
    <input type="text" name="themeibp_director" value="<?= ($fieldDirector === null) ? '' :  $fieldDirector ?>">
    </br></br>

    <label for="themeibp_actor">Acteur(s) du film</label></br>
    <input type="text" name="themeibp_actor" value="<?= ($fieldActor === null) ? '' :  $fieldActor ?>">

<?php
}

//Modifie ou ajoute les données des customs fields
function themeibp_save_meta($post_id)
{
    if (array_key_exists('themeibp_rate', $_POST)) {

        if ($_POST['themeibp_rate']) {
            update_post_meta($post_id, 'themeibp_rate', $_POST['themeibp_rate']);
        }
        if ($_POST['themeibp_director']) {
            update_post_meta($post_id, 'themeibp_director', $_POST['themeibp_director']);
        }
        if ($_POST['themeibp_actor']) {
            update_post_meta($post_id, 'themeibp_actor', $_POST['themeibp_actor']);
        }
    }
}

//Ajout du titre dans la page d'accueil
function themeibp_wp_title_for_home($title)
{
    if (empty($title) && (is_home())) {
        $title = __('Bienvenue sur l\'exercice d\'IBP', 'textdomain');
    }
    return $title;
}

//Suppression du nom de la taxonomy dans le titre
function themeibp_wp_title_for_not_home($title)
{
    $queried_object = get_queried_object();
    $nameTaxonomy = $queried_object->name;

    if (!is_home() && $nameTaxonomy !== '') {

        $title = __($nameTaxonomy, 'textdomain');
    }

    return $title;
}

//Ajoute à la home les customs posts
function themeibp_add_post_type_to_home($query)
{
    if ($query->is_main_query() && $query->is_home()) {
        $query->set('post_type', array('film'));
    }
}


//Action ou filtre pour les différents hooks
add_action('init', 'themeibp_init');
add_action('wp_enqueue_scripts', 'themeibp_register_assets');
add_action('after_setup_theme', 'themeibp_supports');

add_filter('document_title_separator', 'themeibp_title_separator');

add_action('add_meta_boxes', 'themeibp_add_custom_box');
add_action('save_post', 'themeibp_save_meta');

add_filter('wp_title', 'themeibp_wp_title_for_home');
add_filter('wp_title', 'themeibp_wp_title_for_not_home');

add_action('pre_get_posts', 'themeibp_add_post_type_to_home');

require_once('options/footer.php');
FooterOptions::register();