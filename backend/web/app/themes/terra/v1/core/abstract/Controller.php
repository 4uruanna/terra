<?php

namespace terra\v1\core\abstract;

use terra\v1\core\di\Singleton;

abstract class Controller extends Singleton
{
    abstract public string $namespace { get; }
}
