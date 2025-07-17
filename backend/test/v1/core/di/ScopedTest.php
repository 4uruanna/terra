<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use terra\v1\core\di\Scoped;

class ScopedTestFoo extends Scoped {}

class ScopedTestBar extends Scoped {
    public ScopedTestFoo $foo;
    public string $a;

    public function __construct(ScopedTestFoo $foo, string $a)
    {
        $this->foo = $foo;
        $this->a = $a;
    }
}

final class ScopedTest extends TestCase
{
    public function testScopedInjection(): void
    {
        $this->assertInstanceOf(ScopedTestFoo::class, ScopedTestFoo::inject());
    }

    public function testScopedIsSameInstance(): void
    {
        $instanceA = ScopedTestFoo::inject();
        $instanceB = ScopedTestFoo::inject();
        $this->assertSame($instanceA, $instanceB);
    }

    public function testScopedIsNotSameInstance(): void
    {
        $instanceA = ScopedTestFoo::inject([], "A");
        $instanceB = ScopedTestFoo::inject([], "B");
        $this->assertNotSame($instanceA, $instanceB);
    }

    public function testScopedContrustorInjection(): void
    {
        $instance = ScopedTestBar::inject(["a" => "123"]);
        $this->assertSame("123", $instance->a);
        $this->assertInstanceOf(ScopedTestFoo::class, $instance->foo);
    }
}
