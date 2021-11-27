<?php

/**
 * This file contains an example of coding styles.
*/

namespace Php\Project\Lvl1\Games\Calculate;

use function Php\Project\Lvl1\Helpers\generate_random_number;
use function Php\Project\Lvl1\Engine\run;

function add(mixed $x, mixed $y, bool $is_expression = null)
{
    return $is_expression !== null ? "{$x} + {$y}" : (int) $x + (int) $y;
}

function substract(mixed $x, mixed $y, bool $is_expression = null)
{
    return $is_expression !== null ? "{$x} - {$y}" : (int) $x - (int) $y;
}

function multiply(mixed $x, mixed $y, bool $is_expression = null)
{
    return $is_expression !== null ? "{$x} * {$y}" : (int) $x * (int) $y;
}

function brain_calc()
{
    $create_expression = function () {
        $x = generate_random_number();
        $y = generate_random_number();

        $add = function (int $x, int $y) {
            return add($x, $y, true);
        };

        $substract = function (int $x, int $y) {
            return substract($x, $y, true);
        };

        $multiply = function (int $x, int $y) {
            return multiply($x, $y, true);
        };

        $operators = [$add, $substract, $multiply];
        $rand_func = $operators[array_rand($operators)];
        return call_user_func_array($rand_func, array($x, $y));
    };

    $result_calc = function ($str) {
        $arr = explode(' ', $str);
        $calculate = function (string $operator, string $x, string $y) {
            if ($operator === '+') {
                return add($x, $y);
            }
            if ($operator === '-') {
                return substract($x, $y);
            }
            if ($operator === '*') {
                return multiply($x, $y);
            }
        };
        return (string) $calculate($arr[1], $arr[0], $arr[2]);
    };

    $condition = 'What is the result of the expression?';

    run($condition, $create_expression, $result_calc);
}
