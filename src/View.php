<?php

namespace ortemx\GuessNumber\View;

use function cli\line;

function showGame()
{
    $outputLine = "Введите загадоное число от 1" . " до " . MAX_NUMBER;
    line($outputLine);
}

function showWelcomeMessage()
{
    $outputLine = "Добро пожаловать в игру \"Угадай число\"."
    . "Отгадайте загаданное компьютером число в определенном диапазоне"
    . "за конечное число попыток. Результат пока что не сохраняется в базе данных.";
    line($outputLine);
}
