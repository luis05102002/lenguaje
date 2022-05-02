<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8"/>
    <style>
      body {
        background-color: grey;
      }
      div {
        width: 200px;
        border: 5px solid white;
        text-align: center;
        padding: 5px;
        position: absolute;
        left: 50%;
        transform: translate(-45%);
        color: white;
        background-color: black
        ;
      }
      form {
        font-weight: bold;
      }
      #mes {
        text-align: center;
      }
      #año {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div>
      <form action="cal.php" method="post">
        <label for="mes">Mes: <label><br/>
        <input type="number" id="mes" name="mes" value="01" maxlength="2" min="1" max="12" size="4"/><br/><br/>
        <label for="año">Año: <label><br/>
        <input type="number" id="año" name="año" value="2021" maxlength="4" min="1601" max="3000" size="6"/><br/><br/>
        <input type="submit" value="Enviar"/>
      </form>
    </div>
  </body>
</html>
