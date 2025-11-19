<?php

namespace BrainGames\Games\Even;

use Random\RandomException;

use function BrainGames\runGame;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

/**
 * @throws RandomException
 */
function runEvenGame(): void
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';

    runGame(
        $rule,
        function (): array {
            $number = random_int(1, 100);
            $question = (string)$number;
            $correctAnswer = isEven($number) ? 'yes' : 'no';

            return [$question, $correctAnswer];
        }
    );
}
