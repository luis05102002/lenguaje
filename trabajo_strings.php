<html>
    <head>
        <title> Primera pagina php </title>

    <style>

        .resaltar {
            color:blue;
            font-weight:bold;
        }

    </style>
    </head>
    <body>
        <?php

        //strcmp si son iguales
        //strcasecmp si tienen las mismas letras

        $var1="casa";
        $var2="CASA";
        $resultado = strcmp($var1,$var2); // devuelve 1 sino son iguales 0 si son =
        $resultado2 = strcasecmp($var1,$var2); // devuelve 1 sino son iguales 0 si son =

        echo "el resultado es " . $resultado . "<br>";
        echo "el resultado es " . $resultado2. "<br>";

        if($resultado2) {
            echo "No coinciden";
        }else {

        
            echo "coinciden";
        }

        ?>

    </body>
    </html>