<?php
function addText() {
    if (!empty($_POST['inputText'])) {
        $text = $_POST['inputText'];
        return $text;
    }
    return "";
}
function uniqueWords($text) {
    $text = strtolower($text);
    $pattern = "/[\s,]+/";
    $arr = preg_split($pattern, trim($text));
    $arr = array_unique($arr);
    $countWords = count($arr);
    return $countWords;
}
