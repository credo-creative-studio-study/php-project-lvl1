<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Helpers;

function generate_random_number($x = 1, $y = 10): int
{
    return rand($x, $y);
}
