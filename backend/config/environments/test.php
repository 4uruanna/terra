<?php

// #################################################################################
// Configuration
// #################################################################################

define('DAY_IN_SECONDS', 86400);

// Database
// ........................................

define('DB_NAME', 'oml_test');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_USER', 'superman');
define('DB_PASSWORD', 'toor');

// #################################################################################
// Setup & Mocks
// #################################################################################

// WordPress Mocks
// .......................................

function wp_get_environment_type()
{
    return 'development';
}

function get_template_directory()
{
    return __DIR__ . '/../web/app/themes/oml';
}

function wp_die()
{
    error_log('wp_die called');
    exit(1);
}

// Setup
// ........................................

require_once __DIR__ . '/../web/app/themes/oml/config/config.php';
require_once __DIR__ . '/../web/app/themes/oml/config/setup.php';
