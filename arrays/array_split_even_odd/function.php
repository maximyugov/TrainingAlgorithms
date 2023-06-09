<?php

/**
 * Function returns array with integers divided into separate groups.
 * Condition of separation is whether it odd or even
 * 
 * @param array $array List of unsigned integers
 * @return array List of arrays containing grouped integers
 */
function array_split_even_odd(array $array): array
{
    if (count($array) < 2) {
        return $array;
    }

    $result = [[$array[0]]];

    for ($i = 1; $i < count($array); $i++) {
        if (($array[$i] + $array[$i - 1]) % 2 == 1) {
            array_push($result, []);
        }
        $result[array_key_last($result)][] = $array[$i];
    }

    return $result;
}
