<?php

namespace BrainGames\Games\Calc;

use InvalidArgumentException;

use Random\RandomException;

use function BrainGames\runGame;

/**
 * @throws RandomException
 */
function runCalcGame(): void
{
    $rule = 'What is the result of the expression?';

    runGame($rule, function (): array {
        $operations = ['+', '-', '*'];

        $operand1 = random_int(0, 100);
        $operand2 = random_int(0, 100);
        $operation = $operations[array_rand($operations)];

        $question = sprintf('%d %s %d', $operand1, $operation, $operand2);
        $correctAnswer = calculate($operand1, $operand2, $operation);

        return [$question, (string) $correctAnswer];
    });
}

function calculate(int $operand1, int $operand2, string $operation): int
{
    return match ($operation) {
        '+' => $operand1 + $operand2,
        '-' => $operand1 - $operand2,
        '*' => $operand1 * $operand2,
        default => throw new InvalidArgumentException("Unsupported operation: {$operation}"),
    };
}

