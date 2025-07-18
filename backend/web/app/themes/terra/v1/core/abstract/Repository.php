<?php

namespace terra\v1\core\abstract;

abstract class Repository
{
    public abstract string $model_class { get; }
    public abstract string $table_name { get; }
}