<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

function run(string $condition = null, mixed $get_expression = null, mixed $get_result = null, int $count = 3)
{
    line('Welcome to the Brain Game!');

    $i = 0;
    $name = prompt('May I have your name?');
    $has_condition = $condition ? true : false;

    line('Hello, %s!', $name);

    if ($has_condition) {
        line($condition);
        while ($i < $count) {
            $expression = $get_expression();
            $result = $get_result($expression);
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
