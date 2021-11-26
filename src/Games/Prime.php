<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Games\Prime;

use function Php\Project\Lvl1\Engine\run;
use function Php\Project\Lvl1\Helpers\generate_random_number;
use function Php\Project\Lvl1\Helpers\is_prime;

function brain_prime()
{
    $generate_random_number = function () {
        return generate_random_number();
    };

    $find_result = function (int $num): string {
        return is_prime($num) ? 'yes' : 'no';
    };

    $condition = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    run($condition, $generate_random_number, $find_result);
}
