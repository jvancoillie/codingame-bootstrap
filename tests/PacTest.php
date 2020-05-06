<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class PacTest extends TestCase
{
    public function testGetContent(): void
    {
        TestCase::assertEquals('Codingame is great !', (new \Pac())->play());
    }
}