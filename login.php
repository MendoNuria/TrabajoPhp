<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
              
        $baseDatos = $_POST["baseDatos"];
        $tabla = $_POST["tabla"];
        $nombre     = $_POST["usuario"];
        $fechaNacimiento  = $_POST["fechaNac"];
        $color       = $_POST["color"];
  
              
        $servidor     = "localhost";
        $usuarioBD    = "nuria";
        $contrasenaBD = "nuria";
        $nombreBD     = "trabajo";
        $nombreTablaBD= "datos";

             
        $conexion = mysqli_connect("localhost", "nuria", "nuria", "trabajo") or
              die("Problemas con la conexión");
            
        $registros = mysqli_query($conexion, "SELECT * FROM datos") or
              die("Problemas en el select:" . mysqli_error($conexion));

            while ($reg=mysqli_fetch_array($registros))
            {
            //echo "Nombre:".$reg['nombre']."<br>";
            //echo "Fecha de Nacimiento:".$reg['fechanac']."<br>";
            //echo "Color preferido:".$reg['color']."<br>" ."<br>";
           echo "El usuario " .$reg['nombre'] .  " nació el día " . $reg['fechanac'] ."<br>";



           echo "Su color preferido es " .$reg['color']."<br>" ."<br>";

            }
            echo "<br>";
            echo "<hr>";

mysqli_close($conexion);
    ?>
</body>
</html>