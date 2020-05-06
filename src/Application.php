<?php

namespace Codingame;

class Application
{
    public function run()
    {
        $game = new Game();
        echo $game->play();
    }
}