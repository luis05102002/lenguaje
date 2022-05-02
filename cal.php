<!DOCTYPE>
<html>
  <head>
    <style>
      body {
        background-color: yellow;
      }
      table {
        text-align: center;
        position: absolute;
        left: 35%;
        transform: translate(-40%);
        border: 1px solid black;
        border-collapse: collapse;
        background-color: white;
      }
      td,th {
        border: 1px solid black;
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <?php
      $añoIntroducido=(int)($_POST['año']);
      $mesIntroducido=(int)($_POST['mes']);
      $mes;
      if ($mesIntroducido<=2){
        $mes=$mesIntroducido+12;
        $añoIntroducido--;
      }else {
        $mes=$mesIntroducido;
      }
      if ($mes>=6 AND $mes<=8){
        echo "<style>body{background-image:url('img/verano.jpg');}
        table {background-color:rgba(0, 0, 0, 0);}</style>";
      }
      $siglo=(int)($añoIntroducido/100);
      $año=$añoIntroducido%100;
      $esBisiesto=FALSE;
      if (($añoIntroducido%4==0 AND $añoIntroducido%100!=0) OR ($añoIntroducido%400==0)) {
        $esBisiesto=TRUE;
      }
      $numDiasPorMes=0;
      switch ($mes) {
        case 13: $numDiasPorMes=31;break;
        case 14:
          if ($esBisiesto==true){
            $numDiasPorMes=29;
          }else {
            $numDiasPorMes=28;
          } break;
        case 3: $numDiasPorMes=31;break;
        case 4: $numDiasPorMes=30;break;
        case 5: $numDiasPorMes=31;break;
        case 6: $numDiasPorMes=30;break;
        case 7: $numDiasPorMes=31;break;
        case 8: $numDiasPorMes=31;break;
        case 9: $numDiasPorMes=30;break;
        case 10: $numDiasPorMes=31;break;
        case 11: $numDiasPorMes=30;break;
        case 12: $numDiasPorMes=31;break;
      }
      $diasSemana=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sábado","Domingo");
      echo "<table><tr>";
      for ($x=0;$x<count($diasSemana);$x++){
          echo "<th>$diasSemana[$x]</th>";
      }
      echo "</tr><br/>";
      $calendario=array('0' => array('0' => null,'1' => null,'2' => null,'3' => null,'4' => null,'5' => null,'6' => null));
      $fil=0;$c=0;
      $diaDeSemanaEnQueCae;
      for ($x=1;$x<=$numDiasPorMes;$x++){
        $diaDeSemanaEnQueCae=(($x+(int)(($mes+1)*2.6))+$año+(int)($año/4)+(int)($siglo/4)-(2*$siglo))%7;
        if ($diaDeSemanaEnQueCae<0) {
          if ($diaDeSemanaEnQueCae==(-6)){
            $diaDeSemanaEnQueCae=1;
          } elseif ($diaDeSemanaEnQueCae==(-5)){
            $diaDeSemanaEnQueCae=0;
          } else {
            $diaDeSemanaEnQueCae=$diaDeSemanaEnQueCae+5;
          }
        } else {
          if ($diaDeSemanaEnQueCae==0){
            $diaDeSemanaEnQueCae=5;
          } elseif ($diaDeSemanaEnQueCae==1){
            $diaDeSemanaEnQueCae=6;
          } else {
            $diaDeSemanaEnQueCae=$diaDeSemanaEnQueCae-2;
          }
        }
        $calendario[$fil][$diaDeSemanaEnQueCae]=$x;
        if ($diaDeSemanaEnQueCae==6){
          $fil++;
        }
      }
      for ($x=0;$x<count($calendario);$x++){
        echo "<tr>";
        for ($y=0;$y<count($calendario[$x]);$y++){
          echo "<td>".$calendario[$x][$y]."</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    ?>
  </body>
</html>
