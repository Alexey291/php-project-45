<?php

namespace BrainGames\Games\Progression;

use Random\RandomException;

use function BrainGames\runGame;

const RULE = 'What number is missing in the progression?';

/**
 * @throws RandomException
 */
function runProgressionGame(): void
{

    runGame(RULE, function (): array {
        $length = random_int(5, 10);
        $start = random_int(1, 20);
        $step = random_int(1, 10);
        $hiddenIndex = random_int(0, $length - 1);

        $progression = generateProgression($start, $step, $length);
        $correctAnswer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';

        $question = implode(' ', $progression);

        return [$question, (string) $correctAnswer];
    });
}

function generateProgression(int $start, int $step, int $length): array
{
    $progression = [];

    for ($index = 0; $index < $length; $index++) {
        $progression[] = $start + $index * $step;
    }

    return $progression;
}
