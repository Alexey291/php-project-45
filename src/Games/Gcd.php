<?php

namespace BrainGames\Games\Gcd;

use Random\RandomException;

use function BrainGames\runGame;

const RULE = 'Find the greatest common divisor of given numbers.';

/**
 * @throws RandomException
 */
function runGcdGame(): void
{

    runGame(RULE, function (): array {
        $number1 = random_int(1, 100);
        $number2 = random_int(1, 100);

        $question = sprintf('%d %d', $number1, $number2);
        $correctAnswer = getGcd($number1, $number2);

        return [$question, (string) $correctAnswer];
    });
}

function getGcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    return $a;
}
