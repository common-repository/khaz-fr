<?php
defined( 'ABSPATH' ) or exit;

if( !class_exists( 'Khazad_SAS_buisnes_Connect_Admin_Options' )){
    class Khazad_SAS_buisnes_Connect_Admin_Options {
        function __construct() {
            add_action("admin_menu", array($this,"khaz_admin_menus"));
        }

        // add script to the WP Footer

        function khaz_admin_menus() {
                add_menu_page(
                __( 'Khaz Settings', 'khaz-fr' ),
                __( 'Khaz Settings', 'khaz-fr' ),
                'manage_options', 
                'khazconnect_options', 'khazconnect_settings_cb','dashicons-tide',10
                );


            function khazconnect_settings_cb() {  
                $khaz_fr_landing_page_url = "https://www.khaz.fr/";  
                ob_start(); ?>
                 <div class="khaz-logo_wrap">
                    <div class="khaz_logo">
                        <img src="<?php echo esc_url(Khazad_SAS_buisnes_Connect_URL . 'assests/images/khazlogo.png')?>" alt="khaz">
                    </div>
                    <div class="khaz-title_link">
                     <h2><strong><a href='https://www.khaz.fr' target="_blank"><?php echo esc_html_e('Khaz.fr','khaz-fr')?></a></strong></h2>
                    </div>
                 </div>
                 <div class="content-box-khaz">
                <h1><?php echo esc_html_e('Khaz','khaz-fr')?></h1>
                 <p><?php echo esc_html_e("Khaz.fr est un outil BtoB révolutionnaire qui identifie les entreprises visitant votre site web, et ce plugin WordPress facilite son intégration sans effort à votre site. Avec une installation en quelques clics, libérez le potentiel de votre site web pour générer 10 fois plus d'opportunités de business sans modifications supplémentaires","khaz-fr")?></p>
                   <a href="<?php echo esc_url($khaz_fr_landing_page_url); ?>" class="khaz-button" target="_blank"><?php echo esc_html_e('Create A Free Account','khaz-fr')?></a>
                </div>  
                <?php 
                $output = ob_get_clean();
                    $allowed_tags = array(
                        'div' => array(
                            'class' => array(),
                        ),
                        'img' => array(
                            'src' => array(),
                            'alt' => array(),
                        ),
                        'h2' => array(
                            'class' => array(),
                        ),
                        'strong' => array(),
                        'a' => array(
                            'href' => array(),
							'target' => array(), 
							'class' => array(), 
                        ),
                        'p' => array(),
                    );

                    echo '<div class="khaz-wrap">' . wp_kses($output, $allowed_tags) . '</div>';
            }    
        }

    }
}