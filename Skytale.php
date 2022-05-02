<html>

<head></head>

<bodcolumnas>
<table class="default">

</form>
<?php
  $frase=$_POST["mensaje"];
  $nlineas=$_POST["columnas"];
  $nColumnas=$_POST["filas"];
  if($nColumnas*$nlineas<strlen($frase)){
    print "vete a la mierda manuel";
  }else{
    $z=0;
  $texto;
  print $frase;
  print "<br>";
  for($lineas=0;$lineas<$nlineas;$lineas++){
    for($columnas=0;$columnas<$nColumnas;$columnas++){
      $texto[$lineas][$columnas]=substr($frase,$z,1);
      $z++;
    }
  }
$cifrado="";
 print "<table>";
  for($lineas=0;$lineas<$nColumnas;$lineas++){
    print"<tr>";
    for($columnas=0;$columnas<$nlineas;$columnas++){
      print "<td>";
      print $texto[$columnas][$lineas];
      $cifrado=$cifrado.$texto[$columnas][$lineas];
      print "</td>";
    }
    print"</tr>";
  }
  print "</table>";

print $cifrado;

$frasebien="";
print "<table>";
for($columnas=0;$columnas<$nlineas;$columnas++){
  print"<tr>";
  for($lineas=0;$lineas<$nColumnas;$lineas++){
    print "<td>";
    print $texto[$columnas][$lineas];
    $frasebien=$frasebien.$texto[$columnas][$lineas];
    print "</td>";
  }
  print"</tr>";
}
print "</table>";
print $frasebien;
  }
  
  ?>
</bodcolumnas>

</html>