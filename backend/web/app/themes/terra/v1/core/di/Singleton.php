<?php

namespace terra\v1\core\di;

abstract class Singleton extends Dependency
{
    public static array $instance_list = [];

    public static function inject(array $arg_list = []): object
    {
        $class = get_called_class();

        if (!isset(self::$instance_list[$class])) {
            self::$instance_list[$class] = parent::inject($arg_list);
        }

        return self::$instance_list[$class];
    }
} 