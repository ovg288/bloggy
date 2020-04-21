<?php

/**
 * Напишите функцию intervals так, чтобы все тесты выполнились
 * и в конце на экран было выведено 'OK'
 *
 * Функция принимает на вход отсортированный массив чисел,
 * на выходе — массив интервалов, где интервал это массив из двух
 * элементов, начало и конец интервала.
 * @param array $array
 * @return array
 */

function intervals(array $array): array
{
    $intervals = [];

    $idx = 0;
    for ($i = 0; $i < count($array); $i++) {
        if (!isset($array[$i + 1]) || $array[$i + 1] !== $array[$i] + 1) {
            $intervals[] = [
                $array[$idx], $array[$i]
            ];
            $idx = $i + 1;
        }
    }

    return $intervals;
}
