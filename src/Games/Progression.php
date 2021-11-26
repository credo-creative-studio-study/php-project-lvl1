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
        $index = array_search('..', $nums);
        if ($index !== 0 && $index !== (count($nums) - 1)) {
            $num = ($nums[$index - 1] + $nums[$index + 1]) / 2;
        } elseif ($index === 0) {
            $diff = $nums[$index + 2] - $nums[$index + 1];
            $num = $nums[$index + 1] - $diff;
        } elseif ($index === (count($nums) - 1)) {
            $diff = $nums[$index - 1] - $nums[$index - 2];
            $num = $nums[$index - 1] + $diff;
        }

        return (string) $num;
    };

    $condition = 'What number is missing in the progression?';

    run($condition, $create_expression, $result_calc);
}
