=== Cost of Goods for WooCommerce ===
Contributors: algoritmika, anbinder
Tags: woocommerce, cost, cost of goods, woo commerce
Requires at least: 4.4
Tested up to: 5.3
Stable tag: 1.4.0
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Save WooCommerce products purchase costs (i.e. cost of goods).

== Description ==

**Cost of Goods for WooCommerce** plugin lets you save WooCommerce products purchase costs.

For **variable products** costs can be saved for each variation separately or for all variations at once.

There are options to select which **admin columns** to add:

* **product cost**,
* **product profit**,
* **order cost**,
* **order profit**.

Included **bulk edit costs tool** allows you to bulk edit all products costs, prices and stock from a single page.

**Import costs tool** is available if you need to import costs from another product metas.

= Premium Version =

[Pro plugin version](https://wpfactory.com/item/cost-of-goods-for-woocommerce/) has options to **recalculate orders cost and profit** (for all orders or only for orders with no costs). It also includes graphical costs/profit and stock **reports**.

= Feedback =

* We are open to your suggestions and feedback. Thank you for using or trying out one of our plugins!
* [Visit plugin site](https://wpfactory.com/item/cost-of-goods-for-woocommerce/).

== Installation ==

1. Upload the entire plugin folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Start by visiting plugin settings at "WooCommerce > Settings > Cost of Goods".

== Changelog ==

= 1.4.0 - 24/12/2019 =
* Dev - "Admin Order Meta Box" option added.
* Dev - Tools - Bulk Edit Costs - "Edit prices" option added.
* Dev - Tools - Bulk Edit Costs - "Search products" option (and "Search all" value) added.
* Dev - Admin settings split into sections ("General" and "Tools").
* Dev - Code refactoring.
* Tested up to: 5.3.
* WC tested up to: 3.8.

= 1.3.6 - 02/10/2019 =
* Dev - Tools - Bulk Edit Costs - Manage stock - "Stock update method" option added.

= 1.3.5 - 23/09/2019 =
* Dev - Reports - Additional safe checks added (to avoid possible PHP warnings on some servers).

= 1.3.4 - 06/09/2019 =
* Dev - Tools - Bulk Edit Costs - Better styling (modified row).
* Dev - "WooCommerce PDF Invoices, Packing Slips, Delivery Notes & Shipping Labels" plugin compatibility.
* WC tested up to: 3.7.

= 1.3.3 - 04/08/2019 =
* Fix - Tools - Bulk Edit Costs - Search by product title - Now searching in any part of the title (not only from the beginning).
* Dev - Tools - Bulk Edit Costs - Better styling (active row).
* Dev - Tools - Bulk Edit Costs - Manage stock - Trailing zeros removed from stock input.

= 1.3.2 - 08/07/2019 =
* Dev - Tools - Bulk Edit Costs - "Search by product title" input added.
* Dev - Tools - Bulk Edit Costs - "Stock" column added. "Manage stock" option added.
* Dev - Tools - Bulk Edit Costs - "Price" column added.
* Dev - Tools - Bulk Edit Costs - Restyling and minor code refactoring.
* Dev - Reports - "Stock > Cost of goods" report added.

= 1.3.1 - 26/06/2019 =
* Dev - Admin Orders List Columns - "Order statuses" options added.

= 1.3.0 - 18/06/2019 =
* Dev - "Cost of goods" report added (to "Reports > Orders").

= 1.2.0 - 17/05/2019 =
* Dev - Tools - "Bulk Edit Costs" tool added.
* Dev - Admin settings descriptions updated etc.
* Dev - Minor code refactoring.
* WC tested up to: 3.6.
* Tested up to: 5.2.

= 1.1.1 - 19/12/2018 =
* Fix - Core - `add_cost_input_shop_order()` - Getting order on AJAX correctly now.

= 1.1.0 - 06/12/2018 =
* Fix - Comma decimal separator bug fixed.
* Dev - Profit in percent added to profit HTML output.
* Dev - Cost meta changed from `_alg_cost` to `_alg_wc_cog_cost`.
* Dev - Forcing cost of goods to be always set excluding taxes.
* Dev - Saving costs as order item meta.
* Dev - Saving total cost and profit as order meta.
* Dev - Import Costs Tool - Code optimized.
* Dev - Major code refactoring.
* Dev - Plugin URI updated.
* Pro - Dev - "Recalculate orders cost and profit for all orders" option added.
* Pro - Dev - "Recalculate orders cost and profit for orders with no costs" option added.

= 1.0.1 - 17/05/2018 =
* Fix - Cost not saved for simple products - bug fixed.
* Fix - Admin settings link fixed.

= 1.0.0 - 10/05/2018 =
* Initial Release.

== Upgrade Notice ==

= 1.0.0 =
This is the first release of the plugin.
