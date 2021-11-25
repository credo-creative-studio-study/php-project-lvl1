<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Games\Even;

use function Php\Project\Lvl1\Engine\run;
use function Php\Project\Lvl1\Helpers\generate_random_number;

function brain_even()
{
    $generate_random_number = function () {
        return generate_random_number();
    };

    $find_result = function (int $num): string {
        return $num % 2 === 0 ? 'yes' : 'no';
    };

    $condition = 'Answer "yes" if the number is even, otherwise answer "no".';
    print_r($generate_random_number);
    run($condition, $generate_random_number, $find_result);
}
