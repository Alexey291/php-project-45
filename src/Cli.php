<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

class Cli
{
    public static function greetUser(): string
    {
        $name = prompt('May I have your name?');
        line("Hello, %s!", $name);

        return $name;
    }
}
