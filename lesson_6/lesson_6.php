<?php

/* перевернуть массив в обратном порядке */

$x = [1, 2, 3, 4, 5];
$y = [];

for ($i = 0; $i <= count($x) - 1; $i++) {

    ($y[] = $x[count($x) - $i - 1]);
}
print_r($y);

echo '<br>';
/* array_filter() стандартная пхп функция - отфильтровать >= 3 */
function func($x)
{
    if ($x >= 3) {
        return ($x);
    }
}

print_r(array_filter($x, "func"));
echo '<br>';
/* array_reduce() стандартная пхп сумма элементов массива */
function sum($x, $y)
{
    $x += $y;
    return $x;
}

var_dump(array_reduce($x, "sum"));

