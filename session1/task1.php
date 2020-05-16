<?php

echo '<h1 style="text-align: center;">Marks to letter Grade</h1><br>';

$mark = 57;
echo 'The mark is:  ', $mark, '<br>';
switch ($mark) {
    case $mark > 85 && $mark <= 100:
        echo 'The grade is: A ';
        break;
    case  $mark > 75 && $mark <= 85:
        echo 'The grade is: B ';
        break;
    case  $mark > 65 && $mark <= 75:
        echo 'The grade is: C ';
        break;
    case  $mark > 55 && $mark <= 65:
        echo 'The grade is: D ';
        break;
    default:
        echo 'The grade is: F ';
}
