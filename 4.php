<?php
function dirFile ($dir) {
    $file = glob($dir.'/*');
    return $file;
}
$dir = '2';
$arr = [];
$arr = dirFile($dir);
echo "<pre>";
print_r($arr);