<?php

##############################################
## APP                                      ##
##############################################

defined("TERRA_VERSION") or define("TERRA_VERSION", "1.0.0");

##############################################
## LOG                                      ##
##############################################

defined("TERRA_LOG_FORMAT") or define("TERRA_LOG_FORMAT", "[ %datetime% | %channel% | %level_name% ] %message% %context% %extra%\n");
defined("TERRA_LOG_FILE") or define("TERRA_LOG_FILE", dirname(__DIR__, 2) . DS . WP_ENV . ".log");

##############################################
## DATABASE                                 ##
##############################################

defined("TERRA_DATABASE_CONNECTION_STRING") or define("TERRA_DATABASE_CONNECTION_STRING", "mysql:dbname=" . DB_NAME . ";host=" . DB_HOST . ";charset=" . DB_CHARSET);
