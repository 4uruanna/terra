<?php

namespace terra\v1\core\abstract;

abstract class Repository
{
    abstract public string $model_class { get; }
    abstract public string $table_name { get; }
}
