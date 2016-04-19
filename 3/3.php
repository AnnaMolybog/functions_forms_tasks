<?php
include "index.phtml";
function worldDelete ($str, $n)
{
    $pattern = "/[\s,]+/";
    $arr = preg_split($pattern, trim($str));
    $strL = [];
    foreach ($arr as $key => $value) {
        $strL[$key] = mb_strlen($value, 'UTF8');
        if ($strL[$key] > $n) {
            unset($arr[$key]);
        }
    }
    return $arr;
}
$str = file_get_contents('file.dat');
if (!empty($_POST)) {
    $n = $_POST['inputText1'];
    $arr = [];
    $arr = worldDelete($str, $n);
    file_put_contents('file.dat', "\n" . implode(" ", $arr), FILE_APPEND);
    echo "<pre>";
    print_r($arr);

}