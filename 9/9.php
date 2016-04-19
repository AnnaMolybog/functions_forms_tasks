<?php
function addText () {
if (!empty($_POST['inputText'])) {
    $text = $_POST['inputText'];
    return $text;
}
    return "";
}
function textReverse($text) {
     $text = strrev($text);
     echo $text;
 }