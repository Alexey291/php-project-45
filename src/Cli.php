<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

function greetUser(): string
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}
