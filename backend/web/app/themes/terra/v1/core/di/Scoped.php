<?php

namespace terra\v1\core\di;

abstract class Scoped extends Dependency
{
    public static array $instance_list = [];

    public static function inject(array $arg_list = [], string $scope = 'default'): object
    {
        $class = get_called_class();

        if (!isset(self::$instance_list[$scope . "__" . $class])) {
            self::$instance_list[$scope . "__" . $class] = parent::inject($arg_list);
        }

        return self::$instance_list[$scope . "__" . $class];
    }
}