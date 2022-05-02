<html>

<head></head>

<body>


</form>
  <?php
  $frase=$_POST["frase"];
  $ArrayVocales = [];
  $CantidadVocales=[];
  $yaEsta=false;
  for ($x=0; $x < strlen($frase); $x++) { 
    $letra=substr($frase,$x,1);
    $tamañoArray=count($ArrayVocales);
    for ($y=0; $y < $tamañoArray; $y++) { 
      $yaEsta=false;
        if ($ArrayVocales[$y]==$letra) {
            $yaEsta = true;
            $CantidadVocales[$y]=$CantidadVocales[$y]+1;
            break;
        }
    }
    if (!$yaEsta) {
      $ArrayVocales[$tamañoArray]=$letra;
      $CantidadVocales[$tamañoArray]=1;
    }
  }

  do {
    $continuaOrdenacion=false;
    for ($x=1; $x < $tamañoArray; $x++) { 
      
        if ($CantidadVocales[$x-1]<$CantidadVocales[$x]) {
            $save=$CantidadVocales[$x-1];
            $saveVocales=$ArrayVocales[$x-1];
            $CantidadVocales[$x-1]=$CantidadVocales[$x];
            $ArrayVocales[$x-1]=$ArrayVocales[$x];
            $CantidadVocales[$x]=$save;
            $ArrayVocales[$x]=$saveVocales;
            $continuaOrdenacion=true;
        }
    }
} while ($continuaOrdenacion);


  print "$frase";
  print "<br>";
  for ($i=0; $i < $tamañoArray; $i++) { 
    print "$ArrayVocales[$i] = $CantidadVocales[$i]";
    print "<br>";
  }

  ?>
</body>

</html>