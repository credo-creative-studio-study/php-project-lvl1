<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Games\Progression;

use function Php\Project\Lvl1\Helpers\generate_random_number;
use function Php\Project\Lvl1\Engine\run;

function brain_progression()
{
    $create_expression = function () {
        $MIN_VALUE = 5;
        $REC_VALUE = 10;
        $progression_length = generate_random_number($MIN_VALUE, $REC_VALUE);
        $start_random_num = generate_random_number(1, 20);
        $step_random_num = generate_random_number(1, 10);
        $nums = [$start_random_num];

        $i = 0;
        while ($i < $progression_length - 1) {
            $nums[] = $start_random_num += $step_random_num;
            $i += 1;
        }

        $nums[array_rand($nums)] = '..';

        return implode(' ', $nums);
    };

    $result_calc = function ($str) {
        $nums = explode(' ', $str);
        $index = array_search('..', $nums, true);
        $num = '';
        if ($index === 0) {
            $a = (int) $nums[$index + 1];
            $b = (int) $nums[$index + 2];
            $diff = $b - $a;
            $num = $a - $diff;
        } elseif ($index === (count($nums) - 1)) {
            $a = (int) $nums[$index - 2];
            $b = (int) $nums[$index - 1];
            $diff = $b - $a;
            $num = $b + $diff;
        } else {
            $prev_index = gettype($index) === 'integer' ? $index - 1 : null;
            $next_index = gettype($index) === 'integer' ? $index + 1 : null;
            $a = (int) $nums[$prev_index];
            $b = (int) $nums[$next_index];
            $num = ($a + $b) / 2;
        }

        return (string) $num;
    };

    $condition = 'What number is missing in the progression?';

    run($condition, $create_expression, $result_calc);
}
