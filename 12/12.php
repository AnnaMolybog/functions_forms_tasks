<?php
function addText() {
    if (!empty($_POST['inputText'])) {
        $text = $_POST['inputText'];
        return $text;
    }
    return "";
}
function textReverse($text) {
    $pattern = "/[\.?!]/";
    $arr = preg_split($pattern, trim($text));
    foreach ($arr as $key => $str) {
        $str = trim($str);
        $arr[$key] = $str;
    }
    $arr = array_reverse($arr);
    return implode(". ", $arr);
}