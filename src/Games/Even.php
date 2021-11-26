<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Games\Even;

use function Php\Project\Lvl1\Engine\run;
use function Php\Project\Lvl1\Helpers\generate_random_number;
use function Php\Project\Lvl1\Helpers\is_even;

function brain_even()
{
    $generate_random_number = function () {
        return generate_random_number();
    };

    $find_result = function (int $num): string {
        return is_even($num) ? 'yes' : 'no';
    };

    $condition = 'Answer "yes" if the number is even, otherwise answer "no".';
    run($condition, $generate_random_number, $find_result);
}
