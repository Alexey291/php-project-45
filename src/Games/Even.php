<?php

namespace BrainGames\Games\Even;

use Random\RandomException;

use function BrainGames\runGame;

const RULE = 'Answer "yes" if the number is even, otherwise answer "no".';

/**
 * @throws RandomException
 */
function runEvenGame(): void
{
    runGame(
        RULE,
        function (): array {
            $number = random_int(1, 100);
            $question = (string)$number;
            $correctAnswer = isEven($number) ? 'yes' : 'no';

            return [$question, $correctAnswer];
        }
    );
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
