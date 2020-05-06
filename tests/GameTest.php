<?php

namespace Tests;

use Codingame\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    public function testGetContent(): void
    {
        TestCase::assertEquals('Codingame is great !', (new Game())->play());
    }
}