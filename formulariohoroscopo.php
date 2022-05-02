
<html>
<body>

<head>
    <style>
    body {
        background-color:blue;
    }
    #mes {
        color:red;
        background-color:white;

    }
    #dia { color:black;
    } 
    </style>
</head>


<form action="horoscopo.php"method="post">
  <label for="mes">mes:</label><br>
  <input type="number" id="mes" name="mes"><br><br>

  <label for="dia"> dia:</label><br>
  <input type="number" id="dia" name="dia"><br><br>


  <input type="submit" value="Submit">
</form>

</body>
</html>