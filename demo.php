<?php
$arr = [2, 4, 6, 10];
echo 'Before add value: <br>';
echo 'Count: ' . count($arr) . '<br>';
foreach ($arr as $value) {
    echo $value . ' ';
}

echo '<br><br>';
function add($index, $data, $array)
{
    global $arr;
    $newArray = array();
    for ($i = 0; $i < $index; $i++) {
        $newArray[] = $array[$i];
    }
    $newArray[] = $data;
    for ($i = $index; $i < count($array); $i++) {
        $newArray[] = $array[$i];
    }

    $arr = $newArray;

}

add(3, 8, $arr);

echo 'After add value: <br>';
echo 'Count: ' . count($arr) . '<br>';
foreach ($arr as $value) {
    echo $value . ' ';
}