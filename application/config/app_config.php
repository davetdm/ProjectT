<?php

date_default_timezone_set('Africa/Johannesburg');
define("DEVELOPMENT", true);
define("MAILER", true);
define('APP_NAME', "Tuttie");
define('COMPANY_NAME', "StarX Technologies (Pty) Ltd");
define('SITE_TITLE', " - " . APP_NAME);
define('VERSION', "v2.0 - Stable");
define('COPYRIGHT', "Copyright © 2018 " . APP_NAME . ". All Rights Reserved.");
define('SUPPORT_EMAIL', 'support@tuttie.io');
define('CONTACT_SUPPORT', '0624013939');
define('ROOT_URL', DEVELOPMENT ? "http://www.projectt.local" . DS : "https://www.projectt.io" . DS);
define('STATIC_URL', ROOT_URL . "static" . DS);
define('MEDIA_URL', ROOT_URL . "media" . DS);
define('DATABASE', "product_db");

if (DEVELOPMENT) {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}


