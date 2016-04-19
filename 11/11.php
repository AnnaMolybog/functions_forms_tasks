<?php
mb_internal_encoding("UTF-8");
function addText() {
    if (!empty($_POST['inputText'])) {
        $text = $_POST['inputText'];
        return $text;
    }
    return "";
}
function textU($text) {
    $pattern = "/[\.?!]/";
    $arr = preg_split($pattern, trim($text));
    foreach ($arr as $key => $str) {
        $str = trim($str);
        $str = mb_ucfirst($str);
        $arr[$key] = $str;
    }
    return $arr;
    //print_r($arr);
}
function showText($arr) {
    return implode(". ", $arr);
}
function mb_ucfirst($str) {
    return mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1);
}
