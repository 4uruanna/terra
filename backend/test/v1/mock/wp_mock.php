<?php

defined('WP_ENV') or define('WP_ENV', 'test');

function wp_get_environment_type()
{
    return 'test';
}

function get_template_directory()
{
    return __DIR__ . '/../web/app/themes/oml';
}
