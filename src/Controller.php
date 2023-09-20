<?php 

namespace ortemx\GuessNumber\Controller;

use function ortemx\GuessNumber\View\showGame;

function startGame() {
    echo "Game started".PHP_EOL;
    showGame();
}
