<?php
include "index.phtml";
function getCommonWords($a, $b) {
    $pattern = "/[\s,]+/";
    $arrA = preg_split($pattern, $a);
    $arrB = preg_split($pattern, $b);
    $arr = [];
    foreach ($arrA as $value) {
        foreach ($arrB as $item) {
            $result = strcasecmp($value, $item);
            if ($result == 0) {
                $arr[] = $value;
            }
        }
    }
    return $arr;
}
if (!empty($_POST)) {
    $a = $_POST['inputText1'];
    $b = $_POST['inputText2'];
    $arr = getCommonWords($a, $b);
    echo "<pre>";
    print_r($arr);
    unset ($arr);
}