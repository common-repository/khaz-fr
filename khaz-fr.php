<?php
/**
 * Plugin Name: Khaz-fr
 * Plugin URI: https://www.Khaz.fr/
 * Description: Khaz-fr is a revolutionary BtoB tool that identifies businesses visiting your website, and this WordPress plugin makes it effortless to integrate into your site. With installation in just a few clicks, unlock the potential of your website to generate 10 times more business opportunities without additional modifications.
 * Author: Renaud Varoqueaux
 * Author URI: https://www.varoqueaux.fr/
 * Version: 1.0.3
 * Requires at least: 5.6
 * Tested up to: 6.5.3
 * Requires PHP: 7.0
 * Text Domain: khaz-fr
 * Copyright (c) 2024 Khaz-fr
 * License: GPL v2 or later
 * License URI:https://www.gnu.org/licenses/gpl-2.0.html
 * @author    Renaud Varoqueaux
 * @category  Genarel
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 * 
 */

/*
Khaz-fr is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Khaz-fr is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Khaz-fr. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

defined( 'ABSPATH' ) or exit;

if( !class_exists( 'Khazad_SAS_buisnes_Connect' )){
    class Khazad_SAS_buisnes_Connect {
        function __construct() {
            $this->define_constants(); 

            require_once( Khazad_SAS_buisnes_Connect_PATH . 'includes/frontend/khazconnect-footerscript.php' );
            $Khazad_SAS_buisnes_Connect_Footer_Script = new Khazad_SAS_buisnes_Connect_Footer_Script();

            require_once( Khazad_SAS_buisnes_Connect_PATH . 'includes/admin/khazconnect-adminoptions.php' );
            $Khazad_SAS_buisnes_Connect_Admin_Options = new Khazad_SAS_buisnes_Connect_Admin_Options();

            add_action('admin_enqueue_scripts', array($this,'admin_khaz_style'));

        }

        // define Constants
        protected function define_constants(){
            define( 'Khazad_SAS_buisnes_Connect_PATH', esc_url_raw(plugin_dir_path( __FILE__ )) );
            define( 'Khazad_SAS_buisnes_Connect_URL', esc_url(plugin_dir_url( __FILE__ ) ));
            define( 'Khazad_SAS_buisnes_Connect_VERSION', '1.0.0' );
        }

        public static function activate(){

        }

        public static function deactivate(){
        }

        public static function uninstall(){
        }

        function admin_khaz_style(){
            wp_enqueue_style('khaz-admin-style', Khazad_SAS_buisnes_Connect_URL.'assests/css/khaz-admin.css', array(), '1.0' );
        }
    
    }
}

if( class_exists( 'Khazad_SAS_buisnes_Connect' ) ){
    register_activation_hook( __FILE__, array( 'Khazad_SAS_buisnes_Connect', 'activate' ) );
    register_deactivation_hook( __FILE__, array( 'Khazad_SAS_buisnes_Connect', 'deactivate' ) );
    register_uninstall_hook( __FILE__, array( 'Khazad_SAS_buisnes_Connect', 'uninstall' ) );

    $Khazad_SAS_buisnes_Connect = new Khazad_SAS_buisnes_Connect();
}