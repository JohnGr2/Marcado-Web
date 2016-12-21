<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Marcado Web</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script src="script.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   
</head>

<body onload="startTime()">
    <div class="contenedor">

        <div class="header-text">
            <h1>Sistema de Marcado Web</h1>
        </div>
        <div id="txt">
        </div>


        <form action="marcado.php" method="post">
            <h3>Cédula:</h3>
            <input type="text" name="cedula">
            <br>
            <h3>PIN:</h3>
            <input type="password" name="pin">
            <br>
            <input type="submit">
        </form>
   </div>


</body>


</html>

