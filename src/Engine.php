<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

function run(string $condition = null, callable $get_expression = null, callable $get_result = null, int $count = 3)
{
    line('Welcome to the Brain Game!');

    $i = 0;
    $name = prompt('May I have your name?');
    $has_condition = $condition !== null ? true : false;

    line('Hello, %s!', $name);

    if ($has_condition) {
        line($condition);
        while ($i < $count) {
            $expression = is_callable($get_expression) ? $get_expression() : $get_expression;
            $result = is_callable($get_result) ? $get_result($expression) : $get_result;
            line('Question: %s', $expression);
            $answer = prompt('Your answer');
            if ($answer === $result) {
                line("Correct!");
            } else {
                line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
                line("Let's try again, {$name}!");
                break;
            }
            $i = $i + 1;
        }
        if ($i === $count) {
            line("Congratulations, {$name}!");
        }
    }
}
