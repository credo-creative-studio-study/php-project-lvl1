<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Helpers;

function generate_random_number(int $x = 1, int $y = 10): int
{
    return rand($x, $y);
}

function is_even(int $num): bool
{
    return $num % 2 === 0 ? true : false;
}

function is_prime(int $num)
{
    if ($num === 1) {
        return false;
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}
