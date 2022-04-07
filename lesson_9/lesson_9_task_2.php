<?php
/**
 * Заполнить массив из 18 элементов так, что третий (шестой, девятый и тд)
 * элемент имеется значение равное сумме двух предыдущих.
 */
echo '<pre>';
function getFillArray(int $count)
{
    $arr = [];
    for ($i = 0; $i < $count; $i++) {
        if (($i + 1) % 3 === 0) {
            $arr[] = $arr[$i - 1] + $arr[$i - 2];
        }else{
            $arr[]=rand(0,10);
        }
    }
    return $arr;
}

var_dump(getFillArray(18));