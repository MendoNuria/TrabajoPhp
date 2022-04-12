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

            //usuario y contraseña que llegan del formulario
            $baseDatos = $_POST["baseDatos"];
            $tabla = $_POST["tabla"];
            $nombre     = $_POST["usuario"];
            $fechaNacimiento  = $_POST["fechaNac"];
            $color       = $_POST["color"];

            //datos de la base de datos. VALORES DE LA CONEXION
            $servidor     = "localhost";
            $usuarioBD    = "nuria";
            $contrasenaBD = "nuria";
            $nombreBD     = "trabajo";
            $nombreTablaBD= "datos";



function alert($mensaje){
    echo "<script> alert(\"$mensaje\") </script>";
}

// Crear conexion con la base datos
$conexion = mysqli_connect("localhost", $usuarioBD, $contrasenaBD, $nombreBD);

// Check connection
if (!$conexion) {
    alert("Conexion fallida: " . mysqli_connect_error());
}else{
    alert("Conectado correctamente");
}   


$insertar = "INSERT INTO ".$tabla." (nombre, fechaNac, color)
VALUES (\"$nombre\", \"$fechaNacimiento\", \"$color\")";


if (mysqli_query($conexion, $insertar)) {
    echo "<p> El usuario $nombre ha sido perfectamente creado</p>";
} else {
    echo "<h1>Error en insercción de usuario: " . $insertar . "<br>" . mysqli_error($conexion). "</h1>";
}
echo "<hr>";


$hoy = date("Y-m-d");
$edad_diff = date_diff(date_create($fechaNacimiento), date_create($hoy)) ;

echo "$nombre tiene una edad de " .$edad_diff->format('%y') . " años.";
echo "<br>";


//----------------------------------------
// Definir primero la zona horaria   https://www.php.net/manual/es/timezones.php
//Array para traducir el mes al español
// Como los array comienzan en 0 tendría (0 a 11 meses) de la uniica forma que funciona es ponioedo un -1 en la llamada

date_default_timezone_set("Europe/Madrid"); 
$mesEspanol = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];


/* Intento de traducir el dia al español
  $diaEspanol = date("w");   
    if ($diaEspanol == 0) {
      echo "<p>Domingo   </p>";
  }else if ($diaEspanol == 1){
      echo "<p>Lunes   </p>";
  }else if ($diaEspanol == 2 ){
      echo "<p> Martes  </p>";
  }else if ($diaEspanol == 3){
      echo "<p> Miércoles   </p>";
  }else if ($diaEspanol == 4){
      echo "<p> Jueves </p>";
  }else if ($diaEspanol == 5){
      echo "<p>Viernes </p>";
  }else if ($diaEspanol == 6){
    echo "<p> Sábado </p>";
}
 */ 


$diaEspanol = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

echo "El usuario se ha guardado en la bases de datos llamada " . $baseDatos . " a las " .  date("H:i ") . " del " . $diaEspanol[date("w")] . " " . date ("d") . " de " . $mesEspanol[date("m")-1] . " de " . date("Y") . ".";


echo "<br>";
echo "<hr>";

?>
</body>
</html>