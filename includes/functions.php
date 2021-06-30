<?php
/**
 * WooCommerce Shipping Estimate
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file license.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@skyverge.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade WooCommerce Shipping Estimate to newer
 * versions in the future. If you wish to customize WooCommerce Memberships Directory Shortcode for your
 * needs please refer to http://skyverge.com/products/woocommerce-memberships-directory-shortcode/ for more information.
 *
 * @author    SkyVerge
 * @copyright Copyright (c) 2015-2021, SkyVerge, Inc. (info@skyverge.com)
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

defined( 'ABSPATH' ) or exit;

/**
 * Returns the One True Instance of \SkyVerge\WooCommerce\ShippingEstimates\Plugin
 *
 * @since 1.0.0
 *
 * @return \SkyVerge\WooCommerce\ShippingEstimates\Plugin
 */
function wc_shipping_estimate() {
	return \SkyVerge\WooCommerce\ShippingEstimates\Plugin::instance();
}
