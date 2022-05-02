<html>
    <head>
        <title> Primera pagina php </title>
    </head>
    <body>


        <?php

            echo " Este es el primer mensaje <br>";

            include ("proporcionadatos.php");
            require ("proporcionadatos.php");
            echo " Este es el segundo mensaje <br>";

             damedatos();

        ?>

    </body>
    </html>