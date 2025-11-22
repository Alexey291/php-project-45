<?php

namespace BrainGames\Games\Prime;

use Random\RandomException;

use function BrainGames\runGame;

const RULE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

/**
 * @throws RandomException
 */
function runPrimeGame(): void
{

    runGame(RULE, function (): array {
        $number = random_int(1, 100);
        $question = (string) $number;
        $correctAnswer = isPrime($number) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    });
}

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    if ($number === 2) {
        return true;
    }

    if ($number % 2 === 0) {
        return false;
    }

    $sqrt = (int) sqrt($number);

    for ($i = 3; $i <= $sqrt; $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
