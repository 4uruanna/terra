<?php

namespace oml\mod\api;

use terra\v1\core\di\Singleton;

abstract class Controller extends Singleton
{
    abstract public string $namespace { get; }
}
