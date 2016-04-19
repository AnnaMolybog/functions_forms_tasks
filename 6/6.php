<?php
include "index.phtml";
function scanImage ($dir) {
    $file = glob($dir.'*');

    return $file;
}
$types = ['image/gif', 'image/png', 'image/jpeg', 'image/JPG'];
if (isset($_FILES['filename'])) {
    $dir = "gallery/";
        if (in_array($_FILES['filename']['type'], $types)) {
            copy($_FILES['filename']['tmp_name'], $dir . basename($_FILES['filename']['name']));
        }
} else {
    $dir = "gallery/";
    $file = scanImage($dir);
    tableImg($file);
}
function tableImg($file) {
    $k = 0;
    $cols = 2;
    echo "<table border=''>";
    foreach ($file as $image) {
        if ($k%$cols == 0) {
            echo "<tr>";
        }
        echo "<td>";
        echo "<img src='$image' width='100'>";
        echo "</td>";
        if (($k+1)%$cols == 0) {
            echo "</tr>";
        }
        $k++;
    }
    echo "</table>";
}
$dir = "gallery/";
$file = scanImage($dir);
tableImg($file);
