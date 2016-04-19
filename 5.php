<?php
function dirWord ($dir, $word) {
    $arr1 = glob($dir.'/*');
    $arr2 = [];
    foreach ($arr1 as $key => $filename) {
        $str = file_get_contents($filename);
        $pos = strpos($str, $word);
        if ($pos != 0) {
            $arr2[$key] = $filename . "$word";
        }
    }
    return $arr2;
}
$dir = '3';
$word = 'функций';
$arr = [];
$arr = dirWord($dir, $word);
echo "<pre>";
print_r($arr);