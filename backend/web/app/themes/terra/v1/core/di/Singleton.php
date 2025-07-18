<?php

namespace terra\v1\core\di;

use terra\v1\core\error\InternalError;

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

    public function __clone(): void
    {
        throw new InternalError("Cannot clone singleton");
    }

    public function __wakeup(): void
    {
        throw new InternalError("Cannot unserialize singleton");
    }

    public function __unserialize(array $data): void
    {
        throw new InternalError("Cannot unserialize singleton");
    }
}
