<?php
defined( 'ABSPATH' ) or exit;

if( !class_exists( 'Khazad_SAS_buisnes_Connect_Footer_Script' )){
    class Khazad_SAS_buisnes_Connect_Footer_Script {
        function __construct() {
            add_action('wp_footer', array($this, 'khazconnect_custom_footer_script'));
        }

        // add script to the WP Footer
        function khazconnect_custom_footer_script(){
         echo "<script> (function() { var dk=document, gk=dk.createElement('script'), sk=dk.getElementsByTagName('script')[0]; gk.type='text/javascript'; gk.defer=true; gk.async=true; gk.src='https://www.khaz.fr/data.js'; sk.parentNode.insertBefore(gk,sk); })(); </script>";
        }

    }
}