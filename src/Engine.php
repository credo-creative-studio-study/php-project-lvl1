<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

function run($condition_str = null, $create_expression = null, $calculate_result = null, $count = 3)
{
    line('Welcome to the Brain Game!');

    $i = 0;
    $name = prompt('May I have your name?');

    line('Hello, %s!', $name);

    if ($condition_str) {
        line($condition_str);
        while ($i < $count) {
            $expression = $create_expression();
            $result = $calculate_result($expression);
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
