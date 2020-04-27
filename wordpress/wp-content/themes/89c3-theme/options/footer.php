<?php

class FooterOptions {

    const GROUP = 'footer_options';

    //Enregistrer un menu
    public static function register() {
        add_action('admin_menu', [self::class, 'addMenu']);
        add_action('admin_init', [self::class, 'registerDescription']);
        add_action('admin_init', [self::class, 'registerCopyright']);
    }

    //Enregistre les données après la soumission du formulaire
    public static function registerDescription(){
        register_setting(self::GROUP, 'description');

        add_settings_section('footer_options_section', 'Pied de page', function(){
            echo "Modifier la zone de texte située dans le pied de page";
        }, self::GROUP);

        add_settings_field('information', "Information du site", function(){
            ?>
            <textarea name="description" cols="50" rows="5"><?= esc_html(get_option('description')) ?></textarea>
            <?php
        }, self::GROUP, 'footer_options_section');
    }

    public static function registerCopyright(){
        register_setting(self::GROUP, 'copyright');

        add_settings_section('footer_copyright', '', function(){
            echo "Modifier le copyright situé dans le pied de page";
        }, self::GROUP);

        add_settings_field('copyright', "copyright", function(){
            ?>
            <input type="text" name="copyright" style="width:31%" value="<?= esc_html(get_option('copyright')) ?>">
            <?php
        }, self::GROUP, 'footer_copyright');
    }


    //Ajouter une option du menu
    public static function addMenu() {
        add_options_page("Gestion du footer", "Pied de page", "manage_options", self::GROUP, [self::class, 'description']);
    }


    public static function description() {
        ?>
        <h1>Gestion du footer</h1>
        <form action="options.php" method="post">
            <?php 
            settings_fields(self::GROUP);
            do_settings_sections(self::GROUP);
            submit_button();
            ?>
        </form>

        <?php
    }


}