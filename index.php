<?php

$nums = range(1, 100);

function binary_search($arr, $item, $start = 0, $final = null)
{
    if ($final === null) {
        $final = count($arr) - 1;
    }

    if ($start > $final) {
        return 'Значение не найдено!';
    }

    $half = (int)(($start + $final) / 2);

    if ($arr[$half] !== $item) {
        if ($arr[$half] < $item) {
            $start = $half + 1;
        } else {
            $final = $half - 1;
        }
        return binary_search($arr, $item, $start, $final);
    }
    return $half;
}

var_dump(binary_search($nums, 77));

