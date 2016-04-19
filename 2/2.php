<?php
include "index.phtml";
function topThree ($a) {
    $pattern = "/[\s,]+/";
    $arr = preg_split($pattern, $a);
    $top = [];
    foreach ($arr as $key => $value) {
            $a = strlen($value);
            $top[$key] = $a;
    }
    arsort($top);
    $top3 = [];
    $i = 0;
    foreach ($top as $key => $item) {
        $top3[$i] = $arr[$key];
        $i++;
        if($i == 3) {
            break;
        }
    }
    return $top3;
}

if (!empty($_POST)) {
    $a = $_POST['inputText1'];
    $arr = topThree($a);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}