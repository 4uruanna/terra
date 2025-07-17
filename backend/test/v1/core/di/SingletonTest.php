<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use terra\v1\core\di\Singleton;

class SingletonTestFoo extends Singleton {}

class SingletonTestBar extends Singleton {
    public SingletonTestFoo $foo;
    public string $a;

    public function __construct(SingletonTestFoo $foo, string $a)
    {
        $this->foo = $foo;
        $this->a = $a;
    }
}

final class SingletonTest extends TestCase
{
    public function testSingletonInjection(): void
    {
        $this->assertInstanceOf(SingletonTestFoo::class, SingletonTestFoo::inject());
    }

    public function testSingletonIsSameInstance(): void
    {
        $instanceA = SingletonTestFoo::inject();
        $instanceB = SingletonTestFoo::inject();
        $this->assertSame($instanceA, $instanceB);
    }

    public function testSingletonContrustorInjection(): void
    {
        $instance = SingletonTestBar::inject(["a" => "123"]);
        $this->assertSame("123", $instance->a);
        $this->assertInstanceOf(SingletonTestFoo::class, $instance->foo);
    }
}
