<?php
/*
 *	Plugin Name: Materialis Companion
 *  Author: Horea Radu
 *  Description: The Materialis Companion plugin adds drag and drop page builder functionality to the Materialis theme.
 *
 * License: GPLv3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 * Version: 1.3.22
 * TextDomain: materialis-companion
 */

// Makse sure that the companion is not already active from another theme
if ( ! defined("MATERIALIS_COMPANION_AUTOLOAD")) {
    require_once __DIR__ . "/vendor/autoload.php";
    define("MATERIALIS_COMPANION_AUTOLOAD", true);
}

require_once __DIR__ . "/support/wp-5.8.php";
Materialis\Companion::load(__FILE__);
add_filter('materialis_is_companion_installed', '__return_true');
