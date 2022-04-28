<?php
    $url = 'http://10.10.15.13/index.html?p3=3000';
    $result = file_get_contents($url);
    if ($result !== false) {
        // echo "porte ouverte";
    }
?>