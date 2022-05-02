<html>
    <head>
        <title> Primera pagina php </title>
    </head>
    <body>
        <?php

        function incrementaVariable () {

           static $contador=0;
            $contador++;

            echo $contador . "<br>";
        }
         incrementaVariable();
         incrementaVariable();
         incrementaVariable();
         incrementaVariable();
         incrementaVariable();
        ?>

    </body>
    </html>