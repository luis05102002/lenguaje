<html>

<head>
  <style>
    div{
      width: 200px;
    height: 100px;
  position: absolute;
  top: 300px;;
  left:500px;
  rotate: 45deg;
  z-index:+1;
  opacity:0.5;
    transform: rotate(37deg);

      }
        
    
.vocales{
    background-color:yellow;
}
.consonantes{
  color:white;
  background-color:blue;
}
.espacios{
  background-color:green;
}
.otro{
  background-color:orange;
}
table{
  background-color:green;
  border: 1px solid;
}
    </style>
</head>

<body>

  <?php
  print "<div class=marca-de-agua>Manuel 32905238N</div>";
  $frase=$_POST["frase"];
  $filas=$_POST["filas"];
  $columnas=$_POST["columnas"];
  $vocales=array('a','e','i','o','u','A','E','I','O','U');
  $consonantes=array('q','w','r','t','y','p','l','k','j','h','g','f','d','s','z','x','c','v','b','n','m','M','B','N','V','C','X','Z','S','D','F','G','H','J','K','L','P','Y','T','R','W','Q');
  $espacio=" ";
  $Array;
  $letra="";
  $count=0;
  $nuevoArray;
  print $frase;
  for ($x=0; $x < $filas; $x++) {   
    for ($y=0; $y < $columnas; $y++) { 
      $letra=substr($frase,$count,1);
      $Array[$x][$y]=$letra;
      $count++;
    }
  }
  
  print "<table>";
  for ($x=0; $x < $filas; $x++) { 
    print "<tr>";
    for ($y=0; $y < $columnas; $y++) { 
      print "<td>";
      
      if (arraysearchByMelli($Array[$x][$y],$vocales)) {
        $colocarLetra=$Array[$x][$y];
        print "<p class=vocales>$colocarLetra</p>";
      }else if (arraysearchByMelli($Array[$x][$y],$consonantes)) {
        $colocarLetra=$Array[$x][$y];
        print "<p class=consonantes>$colocarLetra</p>";
      }else if ($Array[$x][$y]==$espacio) {
        $colocarLetra=$Array[$x][$y];
        print "<p class=espacios>$colocarLetra</p>";
      }else{
        $colocarLetra=$Array[$x][$y];
        print "<p class=otro>$colocarLetra</p>";
      }
      print "</td>";
    }
    print "</tr>";
    
  }
  print "</table>";
  print "<br>";
  print "<table>";
  for ($x=0; $x < $filas ; $x++) { 
    print "<tr>";
    for ($y=$columnas-1; $y >=0 ; $y--) { 
      print "<td>";
      
      if (arraysearchByMelli($Array[$x][$y],$vocales)) {
        $colocarLetra=$Array[$x][$y];
        print "<p class=vocales>$colocarLetra</p>";
      }else if (arraysearchByMelli($Array[$x][$y],$consonantes)) {
        $colocarLetra=$Array[$x][$y];
        print "<p class=consonantes>$colocarLetra</p>";
      }else if ($Array[$x][$y]==$espacio) {
        $colocarLetra=$Array[$x][$y];
        print "<p class=espacios>$colocarLetra</p>";
      }else{
        $colocarLetra=$Array[$x][$y];
        print "<p class=otro>$colocarLetra</p>";
      }
      print "</td>";
    }
    print "</tr>";
    
  }
  print "</table>";
  print $frase;
  
  function arraysearchByMelli($letra,$ArrayLetras){
    for ($i=0; $i < count($ArrayLetras); $i++) { 
        if ($ArrayLetras[$i]==$letra) {
            return true;
        }
    }
    return false;
}

  ?>
</body>

</html>