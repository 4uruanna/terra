<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use terra\v1\core\di\Transient;

class TransientTestFoo extends Transient {}

class TransientTestBar extends Transient
{
    public TransientTestFoo $foo;
    public string $a;

    public function __construct(TransientTestFoo $foo, string $a)
    {
        $this->foo = $foo;
        $this->a = $a;
    }
}

final class TransientTest extends TestCase
{
    public function testTransientInjection(): void
    {
        $this->assertInstanceOf(TransientTestFoo::class, TransientTestFoo::inject());
    }

    public function testTransientIsNotSameInstance(): void
    {
        $instanceA = TransientTestFoo::inject();
        $instanceB = TransientTestFoo::inject();
        $this->assertNotSame($instanceA, $instanceB);
    }

    public function testTransientContrustorInjection(): void
    {
        $instance = TransientTestBar::inject(["a" => "123"]);
        $this->assertSame("123", $instance->a);
        $this->assertInstanceOf(TransientTestFoo::class, $instance->foo);
    }
}
