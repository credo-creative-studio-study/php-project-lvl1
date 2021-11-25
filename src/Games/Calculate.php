<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Games\Calculate;

use function Php\Project\Lvl1\Helpers\generate_random_number;
use function Php\Project\Lvl1\Engine\run;

function add($x, $y)
{
    return $x + $y;
}

function substract($x, $y)
{
    return $x - $y;
}

function multiply($x, $y)
{
    return $x * $y;
}

function brain_calc()
{
    $create_expression = function () {
        $x = generate_random_number();
        $y = generate_random_number();

        $add = function ($x, $y) {
            return "{$x} + {$y}";
        };

        $substract = function ($x, $y) {
            return "{$x} - {$y}";
        };

        $multiply = function ($x, $y) {
            return "{$x} * {$y}";
        };

        $operators = [$add, $substract, $multiply];
        $rand_func = $operators[array_rand($operators)];
        return call_user_func_array($rand_func, array($x, $y));
    };

    $result_calc = function ($str) {
        $arr = explode(' ', $str);
        $calculate = function ($operator, $x, $y) {
            if ($operator === '+') {
                return $x + $y;
            }
            if ($operator === '-') {
                return $x - $y;
            }
            if ($operator === '*') {
                return $x * $y;
            }
        };
        return (string) $calculate($arr[1], $arr[0], $arr[2]);
    };

    $condition = 'What is the result of the expression?';

    run($condition, $create_expression, $result_calc);
}
