<?php

namespace terra\v1\core\di;

abstract class Transient extends Dependency
{
    public static function inject(array $arg_list = []): object
    {
        return parent::inject($arg_list);
    }
} 