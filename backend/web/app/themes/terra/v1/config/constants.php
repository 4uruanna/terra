<?php

##############################################
## ALIAS                                    ##
##############################################

defined("DS") or define("DS", DIRECTORY_SEPARATOR);

##############################################
## ENVIRONMENT                              ##
##############################################

defined("TERRA_IS_PRODUCTION") or define("TERRA_IS_PRODUCTION", wp_get_environment_type() === "production");
defined("TERRA_IS_STAGGING") or define("TERRA_IS_STAGGING", wp_get_environment_type() === "stagging");
defined("TERRA_IS_DEVELOPMENT") or define("TERRA_IS_DEVELOPMENT", wp_get_environment_type() === "development");
defined("TERRA_IS_TESTING") or define("TERRA_IS_TESTING", wp_get_environment_type() === "test");

##############################################
## DATE & TIMEZONE                          ##
##############################################

defined("TERRA_TIMEZONE") or define("TERRA_TIMEZONE", "Europe/Paris");
defined("TERRA_DATE_FORMAT") or define("TERRA_DATE_FORMAT", "Y-m-d H:i:s");
