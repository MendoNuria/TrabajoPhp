<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<?php    
$baseDatos = $_POST["baseDatos"];
    $tabla = $_POST["tabla"];
    $nombre     = $_POST["usuario"];
    $fechaNacimiento  = $_POST["fechaNac"];
    $color       = $_POST["color"];
  

           
    $servidor     = "localhost";
    $usuarioBD    = "NuriaBD";
    $contrasenaBD = "nuria";
    $nombreBD     = "TrabajoFinal";
    $nombreTablaBD= "datos";


    $conexion = mysqli_connect("localhost", $usuarioBD, $contrasenaBD,  $nombreBD);
    
    
    $registros = mysqli_query($conexion, "SELECT * FROM  datos WHERE nombre = '$nombre'");
   // or die("El usuario " . $usuario . " no se encuentra registrado <br> <img src='./imagenes/llorando.jpeg'>"
   // . mysqli_error($conexion));




   //////////////////////// LOGIN DEL USUARIO INTRODUCIDO
   
    $registrarse = mysqli_num_rows($registros);
  
        if ($registrarse == 1){
          
  /*        
     echo "<p> <center>  El usuario " . $reg['nombre'] . " nació el dia "  . date ('d-m-Y', strtotime ($reg['fechanac'])) . "</center> ". "<br>"." </p>";

     echo "<p> <center>  El usuario " . $nombre . " nació el dia "  . date ('d-m-Y', strtotime($reg['fechanac'])) . "</center> ". "<br>"." </p>";
    */  
          }elseif ($registrarse == 0) 
            echo "<p class = 'emoticono'> <center><font color = white> El usuario  $nombre no se encuentra registrado. </font> <br> <br> <br> .
            <img src = './imagenes/3Whh.gif'>
            . </center> . </p>  ";

            echo "<a href='./index.php'>Volver a la pagina de registro / login </a>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

while ($reg=mysqli_fetch_array($registros))
{
  echo "<p> <center>  El usuario  <strong> " . $reg['nombre'] . " </strong> nació el dia "  . date ('d-m-Y', strtotime ($reg['fechanac'])) . "</center> ". "<br>"." </p>";
//////////////////////     HOROSCOPO             //////////////////////////

$dia = substr($reg['fechanac'], -2, 2 );
$mes = substr($reg['fechanac'],-5, 2);

    
          if (($mes == 1 && $dia > 19)  || ($mes == 2 && $dia < 19)) {
            echo  "<p><center> El signo el zodiaco de $nombre es " . $zodiaco = "Acuario".  "</center>". "</p>";
            echo "<br>";
            echo "<center><img class=foto src='./imagenes/ico-acuario.png'> ";
          } elseif (($mes == 2 && $dia > 18)  || ($mes == 3 && $dia < 21)) {
            echo  "<p><center> El usuario $nombre tiene el siguiente signo zodiaco de " . $zodiaco = "Piscis" .  "</center>". "</p>" ;
            echo "<br>";
            echo "<center><img class=foto src='./imagenes/ico-piscis.png'> ";
          } elseif (($mes == 3 && $dia > 20)  || ($mes == 4 && $dia < 20)) {
            echo  "<p> <center>El usuario $nombre tiene el siguiente signo zodiaco de " . $zodiaco = "Aries" .  "</center>". "</p>" ;
            echo "<br>";
            echo "<center><img class=foto src='./imagenes/ico-aries.png'> ";
          } elseif (($mes == 4 && $dia > 19)  || ($mes == 5 && $dia < 21)) {
            echo  "<p> <center>El usuario $nombre tiene el siguiente signo zodiaco de " . $zodiaco = "Tauro" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center> <img class=foto src='./imagenes/ico-tauro.png' > </center>";
          } elseif (($mes == 5 && $dia > 20)  || ($mes == 6 && $dia < 21)){
            echo  "<p> <center>El usuario  $nombre tiene el siguiente signo zodiaco de " . $zodiaco = "Géminis" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center><img  class=foto src='./imagenes/ico-geminis.png'> ";
          } elseif (($mes == 6 && $dia > 20)  || ($mes == 7 && $dia < 23)) {
            echo "<p><center> El usuario  $nombre   tiene el siguiente signo zodiaco de " . $zodiaco = "Cáncer" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center><img class=foto src='./imagenes/ico-cancer.png'> ";
          } elseif (($mes == 7 && $dia > 22)  || ($mes == 8 && $dia < 23)) {
            echo "<p> <center>El usuario   $nombre tiene el siguiente signo zodiaco de " . $zodiaco = "Leo" .  "</center>".  "</p>";
            echo "<br>";
            
            echo "<center><img class=foto src='./imagenes/ico-leo.png'> ";
          } elseif (($mes == 8 && $dia > 22)  || ($mes == 9 && $dia < 23)) {
            echo "<p><center> El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Virgo" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center><img class=foto src='./imagenes/ico-virgo.png'> ";
          } elseif (($mes == 9 && $dia > 22)  || ($mes == 10 && $dia < 23)) {
            echo "<p> <center>El usuario   $nombre tiene el siguiente signo zodiaco de " . $zodiaco = "Libra" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center><img class=foto src='./imagenes/ico-libra.png'> ";
          } elseif (($mes == 0 && $dia > 22) || ($mes == 11 && $dia < 22)) {
            echo "<center>El usuario  $nombre tiene el siguiente signo zodiaco de " . $zodiaco = "Escorpio" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center><img class=foto src='./imagenes/ico-escorpio.png'> ";
          } elseif (($mes == 11 && $dia > 21) || ($mes == 12 && $dia < 22)) {
            echo "<center>El usuario  $nombre tiene el siguiente signo zodiaco de " . $zodiaco = "Sagitario" .  "</center>". "</p>";
            echo "<br>";
            echo "<center><img class=foto src='./imagenes/ico-sagitario.png' > ";
          } elseif (($mes == 12 && $dia > 21) || ($mes == 1 && $dia < 20)) {
            echo "<p><center> El usuario  $nombre tiene el siguiente signo zodiaco de " . $zodiaco = "Capricornio" . "</center>". "</p>";
            echo "<br>";
            echo "<p><center>   <img class=foto  src='./imagenes/ico-capricornio.png'> </center> </p>";
          }

        
         echo "<br>";
         echo "<br>";
///////////////////////////////////   COLOR HEXADECIMAL /////////////////

$color = ($reg['color']);
//echo "<font color =$reg[color]".  $color . "</font>";
echo "<center>" . "<p> Su color preferido es el  <font color = $reg[color]> " . $reg['color']. "." . "</font>" . "</p> "."</center>";
echo "<hr>";
echo "<a href='./index.php'>Volver a la pagina de registro / login </a>";
echo "<br>";

echo "<hr>";



}

    mysqli_close($conexion);
    ?>

</body>
</html>