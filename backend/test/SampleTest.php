<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SampleTest extends TestCase
{
    public function testAlwaysTrue(): void
    {
        $this->assertTrue(true);
    }
}
