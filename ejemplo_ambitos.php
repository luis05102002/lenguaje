<html>
    <head>
        <title> Primera pagina php </title>
    </head>
    <body>
        <?php

          $nombre ="Juan";

          function dameNombre () {

            global $nombre;
          
          }

          dameNombre();

          echo $nombre; 

        ?>

    </body>
    </html>