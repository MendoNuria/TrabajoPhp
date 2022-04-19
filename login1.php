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




      ////////////////////////////////////77
   function signo_zodiaco($fechaNacimiento){ 
    $zodiaco = ''; 
    $dia = date ("d"); 
    $mes = date ("m");
    list ( $dia, $mes) = explode ( "-", $fechaNacimiento );

      if (($mes == 1 && $dia > 19)  || ($mes == 2 && $dia < 19)) {
         $zodiaco = "Acuario";
      } elseif (($mes == 2 && $dia > 18)  || ($mes == 3 && $dia < 21)) {
         $zodiaco = "Piscis";
      } elseif (($mes == 3 && $dia > 20)  || ($mes == 4 && $dia < 20)) {
         $zodiaco = "Aries";
      } elseif (($mes == 4 && $dia > 19)  || ($mes == 5 && $dia < 21)) {
         $zodiaco = "Tauro";
      } elseif (($mes == 5 && $dia > 20)  || ($mes == 6 && $dia < 21)) {
         $zodiaco = "Géminis";
      } elseif (($mes == 6 && $dia > 20)  || ($mes == 7 && $dia < 23)) {
         $zodiaco = "Cáncer";
      } elseif (($mes == 7 && $dia > 22)  || ($mes == 8 && $dia < 23)) {
         $zodiaco = "Leo";
      } elseif (($mes == 8 && $dia > 22)  || ($mes == 9 && $dia < 23)) {
         $zodiaco = "Virgo";
      } elseif (($mes == 9 && $dia > 22)  || ($mes == 10 && $dia < 23)) {
         $zodiaco = "Libra";
      } elseif (($mes == 10 && $dia > 22) || ($mes == 11 && $dia < 22)) {
         $zodiaco = "Escorpio";
      } elseif (($mes == 11 && $dia > 21) || ($mes == 12 && $dia < 22)) {
         $zodiaco = "Sagitario";
      } elseif (($mes == 12 && $dia > 21) || ($mes == 1 && $dia < 20)) {
         $zodiaco = "Capricornio";
      }
      return $zodiaco; 
 }
 echo signo_zodiaco($fechanac);
   ?>
</body>
</html>