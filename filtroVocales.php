<html>

<head></head>

<body>


</form>
  <?php
  $frase=$_POST["frase"];
  $ArrayVocales = array('a', 'e', 'i', 'o', 'u','á', 'é', 'í', 'ó', 'ú','A', 'E', 'I', 'O', 'U','Á', 'É', 'Í', 'Ó', 'Ú');
  $cadenaSinVocales="";
  $frase = utf8_decode($frase);
  for ($i=0; $i < count($ArrayVocales); $i++) { 
    $ArrayVocales[$i] = utf8_decode($ArrayVocales[$i]);
  }
  
  for ($x=0; $x < strlen($frase); $x++) { 
    $esProhibido=false;
    for ($y=0; $y < count($ArrayVocales); $y++) { 
      if(strcmp(substr($frase,$x,1), $ArrayVocales[$y]) === 0){
        $esProhibido=true;
        //$y=count($ArrayVocales);
        break;
      }
    }
    if ($esProhibido){
      $cadenaSinVocales=$cadenaSinVocales."";
    }else{
      $cadenaSinVocales=$cadenaSinVocales.substr($frase,$x,1);
    }
  }
print $cadenaSinVocales;
  ?>
</body>

</html>