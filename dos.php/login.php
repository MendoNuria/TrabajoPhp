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

$registros = mysqli_query($conexion, "SELECT nombre, fechanac, color FROM $nombreTablaBD ") 
or die("El usuario " . $nombre . " no se encuentra registrado <br> <img src='./imagenes/llorando.jpeg'>"
. mysqli_error($conexion));
//or die("El usuario " . $nombre . " no se encuentra registrado <br> <img src='./imagenes/llorando.jpeg'>");



while ($reg=mysqli_fetch_array($registros))
{

   

echo "<p> <center>  El usuario " . $reg['nombre'] . " nació el dia "  . date ('d-m-Y', strtotime ($reg['fechanac'])) . "</center> ". "<br>"." </p>";
//////////////////////     HOROSCOPO             //////////////////////////

$dia = substr($reg['fechanac'], -2, 2 );
$mes = substr($reg['fechanac'],-5, 2);


   // $dia=date("d", strtotime($_POST["fechaNac"]));
    //$mes=date("m", strtotime( $_POST["fechaNac"]));
    /////////////////////////
    //$dia=date("d", substr($_POST["fechaNac"], -2, 2 ));
    //$mes=date("m", substr( $_POST["fechaNac"],-5, 2));

   //   $zodiaco = ''; 
    
        //$dia = date ("d"); 
        //$mes = date ("m");
       // list ( $dia, $mes) = explode ( "-", $fechaNacimiento );
    
          if (($mes == 1 && $dia > 19)  || ($mes == 2 && $dia < 19)) {
            echo  "<p><center> El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Acuario".  "</center>". "</p>";
            echo "<br>";
            echo "<center><img src='./imagenes/acuario.jpg'> ";
          } elseif (($mes == 2 && $dia > 18)  || ($mes == 3 && $dia < 21)) {
            echo  "<p><center> El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Piscis" .  "</center>". "</p>" ;
            echo "<br>";
            echo "<center><img src='./imagenes/piscis.jpg'> ";
          } elseif (($mes == 3 && $dia > 20)  || ($mes == 4 && $dia < 20)) {
            echo  "<p> <center>El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Aries" .  "</center>". "</p>" ;
            echo "<br>";
            echo "<center><img src='./imagenes/aries.jpg'> ";
          } elseif (($mes == 4 && $dia > 19)  || ($mes == 5 && $dia < 21)) {
            echo  "<p> <center>El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Tauro" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center> <img  src='./imagenes/tauro.jpg' > </center>";
          } elseif (($mes == 5 && $dia > 20)  || ($mes == 6 && $dia < 21)){
            echo  "<p> <center>El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Géminis" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center><img src='./imagenes/geminis.jpg'> ";
          } elseif (($mes == 6 && $dia > 20)  || ($mes == 7 && $dia < 23)) {
            echo "<p><center> El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Cáncer" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center><img src='./imagenes/cancer.jpg'> ";
          } elseif (($mes == 7 && $dia > 22)  || ($mes == 8 && $dia < 23)) {
            echo "<p> <center>El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Leo" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center><img src='./imagenes/leo.jpg'> ";
          } elseif (($mes == 8 && $dia > 22)  || ($mes == 9 && $dia < 23)) {
            echo "<p><center> El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Virgo" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center><img src='./imagenes/virgo.jpg'> ";
          } elseif (($mes == 9 && $dia > 22)  || ($mes == 10 && $dia < 23)) {
            echo "<p> <center>El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Libra" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center><img src='./imagenes/libra.jpg'> ";
          } elseif (($mes == 0 && $dia > 22) || ($mes == 11 && $dia < 22)) {
            echo "<center>El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Escorpio" .  "</center>".  "</p>";
            echo "<br>";
            echo "<center><img src='./imagenes/escorpio.jpg'> ";
          } elseif (($mes == 11 && $dia > 21) || ($mes == 12 && $dia < 22)) {
            echo "<center>El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Sagitario" .  "</center>". "</p>";
            echo "<br>";
            echo "<center><img src='./imagenes/sagitario.jpg' > ";
          } elseif (($mes == 12 && $dia > 21) || ($mes == 1 && $dia < 20)) {
            echo "<p><center> El usuario tiene el siguiente signo zodiaco de " . $zodiaco = "Capricornio" . "</center>". "</p>";
            echo "<br>";
            echo "<p><center> <img src='./imagenes/capricornio.jpg'> </center> </p>";
          }


         echo "<br>";
         echo "<br>";

          echo "<center> Su color preferido es el " . $reg['color'] . "</center> " . "<br>";
         // return $zodiaco; //  CONTROLAR ESTE RETURN
     
         echo "<br>";

//////////////////////////   COLOR               ///////////////////////////////////////7
//echo "Su color preferido es el " . $reg['color'] . "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";

}
mysqli_close($conexion);
    ?>
</body>
</html>

