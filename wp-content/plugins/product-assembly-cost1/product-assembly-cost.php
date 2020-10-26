<?php
/**
 * Plugin Name: Product Assembly / Gift Wrap / ... Cost for WooCommerce
 * Plugin URI: https://www.webdados.pt/wordpress/plugins/product-assembly-cost-for-woocommerce/
 * Description: Add an option to your WooCommerce products to enable assembly, gift wrap or any other service and optionally charge a fee for it.
 * Version: 2.0.1
 * Author: Webdados
 * Author URI: https://www.webdados.pt
 * Text Domain: product-assembly-cost
 * Domain Path: /languages/
 * WC requires at least: 3.0.0
 * WC tested up to: 4.4.0
 * 
 * 	License: GNU General Public License v3.0
 * 	License URI: http://www.gnu.org/licenses/gpl-3.0.html
**/

/* WooCommerce CRUD ready */


/*
	TO-DO:
	- Custo percentual: https://wordpress.org/support/topic/assembly-as-of-product-cost/
	- Ecrã de opções independente do Geral do WooCommerce
	- Possibilidade de criar vários "serviços" e definir TODOS os settings por serviço
	- Na edição do produto, nova tab de serviços adicionais e possibilidade de activar um a um e marcar o preço
	- Deve ser possível comprar com vários serviços ou apenas um (definição global ou por produto??)
		- O que acontece se colocarmos um mesmo produto com opções diferentes?
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/* Main class */
function WC_Product_Extra_Service_Assembly() {
	return WC_Product_Extra_Service_Assembly::instance(); 
}

add_action( 'plugins_loaded', 'product_extra_service_assembly_init', 1 );
function product_extra_service_assembly_init() {
	require_once( dirname( __FILE__ ) . '/includes/class-wc-product-extra-service-assembly.php' );
	$GLOBALS['WC_Product_Extra_Service_Assembly'] = WC_Product_Extra_Service_Assembly();
}

/* If you're reading this you must know what you're doing ;-) Greetings from sunny Portugal! */

