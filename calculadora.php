<html>
    <head> </head>
<body>

<?php

if(isset($_POST["button"])) {

    $numero1=$_POST["num1"];
    $numero2=$_POST["num1"];
    $operacion=$_POST["operacion"];

    if (!strcmp("Suma",$operacion)) {
        echo "El resultado es : " . ($numero1+$numero2);
    }


}

?>
</body>
</html>