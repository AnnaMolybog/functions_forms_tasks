<?php
include "index.phtml";
function scanImage ($dir) {
    $file = glob($dir.'*');

    return $file;
}
$types = ['image/gif', 'image/png', 'image/jpeg', 'image/JPG'];
if (isset($_FILES['filename'])) {
    $dir = "gallery/";
    $n = count($_FILES['filename']['name']);
    for ($i = 0; $i < $n; $i++) {
        if (in_array($_FILES['filename']['type'][$i], $types)) {
            copy($_FILES['filename']['tmp_name'][$i], $dir . basename($_FILES['filename']['name'][$i]));
        }
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
