<?php
namespace Codingame {
class Application
{
    public function run()
    {
        $game = new Game();
        echo $game->play();
    }
}
}

namespace Codingame {
class Game
{
    public function play() : string
    {
        return 'Codingame is great !';
    }
}
}

