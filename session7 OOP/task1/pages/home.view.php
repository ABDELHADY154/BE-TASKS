<?php
echo 'sorting class: <br>';


$arr = new SortArr;
$arr->setArr([11, -2, 4, 35, 0, 8, -9]);
print_r($arr);
echo '<br>';
$sortedArr = $arr->getSortedArr();
print_r($sortedArr);
