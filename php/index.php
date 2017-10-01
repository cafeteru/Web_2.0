<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>

<body>
    <?php
        $nombre = "Iván";
        $array = array(1, 2, 3, 5); 
        echo "\t\t";
        echo "<p>Mi nombre " .$nombre. "</p>\n";
        echo "\t\t<p>";
        print_r($array);
        echo "\t\t";
        echo "<br>";
        echo "\n\t\t";   
        echo "Tamaño: " .sizeof($array);
        echo "\n\t\t";
        echo "<br>";
        echo "\n\t\t";    
        array_push($array, 8);
        $reemplazo = array(1 => 234);
        $array = array_replace ($array, $reemplazo);
        echo var_dump($array);
        echo "\t\t";
        echo "</p>\n";
    ?>
    <form>
        <p>Introduce un valor:</p>
        <input name="valor" type="text">
        <p>Introduce otro valor:</p>
        <input name="valor2" type="text">
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>

    <?php
        $algunvalor = false;   
        if($_GET){
            echo "<p>Varables GET:</p>";
            foreach($_GET as $posicion){
                if($posicion != NULL){
                    echo "<p>" .$posicion. "</p>";
                    $algunvalor = true;
                }
            } 
        } 
        if(!$algunvalor)
            echo "<p>No hay valores GET</p>";
    ?>
    
    <form method="post">
        <p>¿Cuál es tu nombre?</p>
        <input name="nombre" type="text">
        <p>¿Y tu apellido?</p>
        <input name="apellido" type="text">
        <input type="submit" value="Enviar">
    </form>
    
    <?php
        $algunvalor = false;   
        if($_POST){
            echo "<p>Varables POST:</p>";
            foreach($_POST as $posicion){
                if($posicion != NULL){
                    echo "<p>" .$posicion. "</p>";
                    $algunvalor = true;
                }
            } 
        } 
        if(!$algunvalor)
            echo "<p>No hay valores POST</p>";
    ?>
    
</body>

</html>
