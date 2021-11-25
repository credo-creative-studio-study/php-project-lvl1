<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Games\Gcd;

use function Php\Project\Lvl1\Helpers\generate_random_number;
use function Php\Project\Lvl1\Engine\run;

function brain_gcd()
{
    $create_expression = function () {
        $x = generate_random_number();
        $y = generate_random_number();

        return "{$x} {$y}";
    };

    $result_calc = function ($str) {
        $nums = explode(' ', $str);
        $gcd = function ($a, $b) {
            while ($a != $b) {
                if ($a > $b) {
                    $a -= $b;
                } else {
                    $b -= $a;
                }
            }
            return $a;
        };
        return (string) $gcd($nums[0], $nums[1]);
    };

    $condition = 'Find the greatest common divisor of given numbers.';

    run($condition, $create_expression, $result_calc);
}
