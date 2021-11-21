<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Game;

use function cli\line;
use function cli\prompt;

function initGame()
{
    $i = 0;

    line('Welcome to the Brain Game!');

    $name = prompt('May I have your name?');

    line('Hello, %s!', $name);

    line('Answer "yes" if the number is even, otherwise answer "no".');

    while ($i < 3) {
        $random_number = rand(1, 100);
        $is_even = $random_number % 2 === 0 ? true : false;
        line('Question: %d', $random_number);

        $answer = prompt('Your answer: ');

        if ($answer === 'yes' && $is_even || $answer === 'no' && !$is_even) {
            line("Correct!");
        } else {
            $correct = $answer === 'yes' ? 'no' : 'yes';
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct}'.");
            line("Let's try again, {$name}!");
            break;
        }

        $i = $i + 1;
    }

    if ($i === 3) {
        line("Congratulations, {$name}!");
    }
}
