<?php
$arr = [6, 4, 5, 9, 8, 7, 3, 1];
echo 'Before del: ' . count($arr) . '<br>';
foreach ($arr as $item) {
    echo $item . ' ';
}
echo '<br>';

$index = 0;
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == 9) {
        $index = $i;
    }
}
for ($j = $index; $j < count($arr); $j++) {
    $arr[$j] = $arr[$j + 1];
}
echo 'After del: ' . count($arr) . '<br>';
foreach ($arr as $item) {
    echo $item . ' ';
}