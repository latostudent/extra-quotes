<?php

if ( ! defined('ABSPATH') ) {
    die('Direct access not permitted.');
}

/**
 * Crear pagina en el dashboard para explicar como usar el shortcode
 */


function add_link_repair(){
    add_menu_page('Extra Quotes', 'Extra Quotes', 'publish_posts', 'extra-quotes', 'page_content', 'dashicons-format-quote', 16);
}
add_action('admin_menu', 'add_link_repair');

function page_content(){
    include "panel-extra-quotes.php";
}

/*
function wpdocs_add_dashboard_widgets() {
    wp_add_dashboard_widget( 'dashboard_widget', 'Panel orinoco', 'dashboard_widget_function' );
}
add_action( 'wp_dashboard_setup', 'wpdocs_add_dashboard_widgets' );

function dashboard_widget_function( $post, $callback_args ) {
    echo "<h2>Bienvenido al panel de administracion de ORINOCO</h2>
			<hr><br>
			<h4>Gestionar pedidos</h4>
			<a href='https://orinocogz.com/wp-admin/admin.php?page=orinoco-envios'>
			<button class='button button-primary'>PEDIDOS</button>
			</a>
			";
}
*/