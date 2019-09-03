<?php
$index = 2;
$array = [];
$array[0] = 4;
$array[1] = 3;
$array[2] = 8;
$array[3] = 7;
foreach ($array as $value):
    echo $value . ' ';endforeach;
echo '<br> count: ' . count($array);

echo '<br><br>';
for ($i = $index; $i < count($array); $i++) {
    $array[$i+1] = $array[$i];
}
echo '<br>';
foreach ($array as $value):
    echo $value . ' ';endforeach;
echo '<br>' . 'count: ' . count($array);
