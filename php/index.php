<?php
    $nombre = "Iván";
    $array = array(1, 2, 3, 5); 
 
    echo "<html>";
    echo "<head>";
    echo "<meta charset=\"utf-8\">";
    echo "</head>";
    echo "<body>";
    echo "<p>Mi nombre " .$nombre. "</p>";
    echo "<p>";
    print_r($array);
    echo "<br>Tamaño: " .sizeof($array). "<br> ";
    array_push($array, 8);
    $reemplazo = array(1 => 234);
    $array = array_replace ($array, $reemplazo);
    echo  var_dump($array);
    echo "</p>";
    echo "</body>";
    echo "</html>";
?>