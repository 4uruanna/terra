<?php

namespace terra\v1\core\abstract;

use terra\v1\core\di\Singleton;

abstract class Repository extends Singleton
{
    abstract public string $model_class { get; }
    abstract public string $table_name { get; }
}
