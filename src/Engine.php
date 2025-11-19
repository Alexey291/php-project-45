<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

const ROUNDS_TO_WIN = 3;

/**
 * @param callable(): array{0: string, 1: string} $makeRound
 */
function runGame(string $rule, callable $makeRound): void
{
    line('Welcome to the Brain Games!');

    $cli = new Cli();
    $name = $cli->greetUser();

    line($rule);

    for ($round = 0; $round < ROUNDS_TO_WIN; $round++) {
        [$question, $correctAnswer] = $makeRound();

        line('Question: %s', $question);
        $answer = trim(prompt('Your answer'));

        if (strtolower($answer) !== strtolower($correctAnswer)) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);

            return;
        }

        line('Correct!');
    }

    line('Congratulations, %s!', $name);
}
