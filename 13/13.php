<?php
function addText() {
    if (!empty($_POST['inputText'])) {
        $text = $_POST['inputText'];
        return $text;
    }
    return "";
}
function countWords($text) {
    $arr = explode(" ", $text);
    //print_r($arr);
    $arrUnique = array_unique($arr);
    //print_r($arrUnique);
    $i = 0;
    $arrCount = [];
    foreach ($arrUnique as $key => $item) {
        $count = 0;
        foreach ($arr as $value) {
            if ($value == $item) {
                $count += 1;
            } else {
                $count +=0;
            }
        }
        //$arrNew['item'] = $item;
        //$arrNew['count'] = $count;
        $arrCount[$item] = $count;
        $i++;
    }
    return $arrCount;
    //echo "<pre>";
    //print_r($arrCount);
}
function showCount($arrCount) {
    foreach ($arrCount as $key => $count) {
        echo $key . " - " . $count . "<br>";
    }
}