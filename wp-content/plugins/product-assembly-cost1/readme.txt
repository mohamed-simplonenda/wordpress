=== Product Assembly / Gift Wrap / ... Cost for WooCommerce ===
Contributors: webdados
Donate link: http://bit.ly/donate_product_assembly_cost
Tags: woocommerce, product, assembly, installation, extra service, gift wrap, extra cost, webdados
Requires at least: 4.4
Tested up to: 5.6
Stable tag: 2.0.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Add an option to your WooCommerce products to enable assembly, gift wrap or any other service and optionally charge a fee for it.

== Description ==

This plugin allows you to add an option to your WooCommerce products to enable assembly, gift wrap or any other service and optionally charge a fee for it.

In WooCommerce > Settings > Products you can set up the default service status and cost, the service name, the message and the way the costs are shown on the cart.

If the customer chooses to add the service when buying the product, that information is shown in the cart and orders. The service cost can be added to the cart as a global fee, instead of at the product level, to avoid discount plugins to also affect it.

This is a fork of [WooCommerce Product Gift Wrap](https://wordpress.org/plugins/woocommerce-product-gift-wrap/) by [Mike Joley](https://mikejolley.com/)

Banner photos by [Igor Ovsyannykov](https://unsplash.com/photos/mQgVyUC0V-I?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText) and [freestocks.org](https://unsplash.com/photos/k-Rp0V0XWWU?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText)

== Frequently Asked Questions ==

= I need help, can I get technical support? =

This is a free plugin. It’s our way of giving back to the wonderful WordPress community.

There’s a support tab on the top of this page, where you can ask the community for help. We’ll try to keep an eye on the forums but we cannot promise to answer support tickets.

If you reach us by email or any other direct contact means, we’ll assume you are in need of urgent, premium, and of course, paid-for support.

= Is it possible to customize the message on each product page? =

Yes. Use the `product_assembly_cost_message` filter. Here’s an example: [link](https://gist.github.com/webdados/dbc8c634cddd2c94e69901d35b55e95a)

== Changelog ==

= 2.0.1 - 2020-08-27 =
* Bugfix when adding the service information to the order item metadata

= 2.0.0 - 2020-08-16 =
* New option to multiply service cost by the quantity of product purchased (default) or charge only once per cart line (new)
* It’s now possbile to set variation service cost (breaking change if you’re already using this for variations, please check all your variations)
* Fix taxes bug (sorry guys 😐) - but still defaulting to the standard tax and cost set to taxable (we will revise this on a next version)
* Drop WooCommerce prior to 3.0 support
* Tested with WordPress 5.6-alpha-48783 and WooCommerce 4.4.0-rc.1

= 1.3 =
* Follow the “Prices entered with tax”, “Display prices in the shop” and “Display prices during cart and checkout” WooCommerce tax settings
* Tested with WooCommerce 4.2.0-beta.1

= 1.2.1 =
* Technical support clarification
* Tested with WordPress 5.5-alpha-47761 and WooCommerce 4.1.0

= 1.2 =
* Bugfix when used with AutomateWoo
* Tested with WooCommerce 4.0.0

= 1.1 =
* You can now enable the service by default and then explicitly disable it on each product
* New `product_assembly_cost_message` filter to customize the message
* Bugfix on the default service status
* Tested with WordPress 5.3.3-alpha-46995 and WooCommerce 3.9.0-rc.2

= 1.0 =
* Make the service name configurable so that it can be used for anything rather than just assembly
* New option to add the service name to the product name on the cart and order items, which can be useful for warehouse operations or invoicing
* Plugin name change
* Tested with WordPress 5.3.1-alpha-46798 and WooCommerce 3.9.0-beta.1

= 0.4.2 =
* Tested with WordPress 5.2.5-alpha and WooCommerce 3.8.0

= 0.4.1 =
* Added "/ unit" on assembly cost on each cart item
* Tested with WooCommerce 3.5.1 and bumped `WC tested up to` tag

= 0.4 =
* Use WooCommerce 3.0 (and above) CRUD functions to read/update product meta
* Bumped `WC tested up to` tag

= 0.3 =
* Fix for variations with assembly cost

= 0.2 =
* readme.txt improvements

= 0.1 =
* Initial release sponsored by [Ideia Home Design](https://www.ideiahomedesign.pt/)