<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php




            //Datos que llegan del formulario
            $baseDatos = $_POST["baseDatos"];
            $tabla = $_POST["tabla"];
            $nombre     = $_POST["usuario"];
            $fechaNacimiento  = $_POST["fechaNac"];
            $color       = $_POST["color"];
            
            //datos de la base de datos. VALORES DE LA CONEXION
            $servidor     = "localhost";
            $usuarioBD    = "NuriaBD";
            $contrasenaBD = "nuria";
            $nombreBD     = "baseDatos";
            $nombreTablaBD= "tabla";



function alert($mensaje){
    echo "<script> alert(\"$mensaje\") </script>";
}

// Crear conexion con la base datos
$conexion = mysqli_connect("localhost", $usuarioBD, $contrasenaBD, $baseDatos);

// Check connection
if (!$conexion) {
    alert("Conexion fallida: " . mysqli_connect_error());
}else{
    alert("Conectado correctamente");
}   
echo "<br>";
$insertar = "INSERT INTO ".$tabla." (nombre, fechanac, color)
VALUES (\"$nombre\", \"$fechaNacimiento\", \"$color\")";

date_default_timezone_set("Europe/Madrid"); 
$mesEspanol = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

$diaEspanol = [ "Domingo","Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];

if (mysqli_query($conexion, $insertar)) {
    echo "<p> <center>El usuario <strong> $nombre </strong> se ha creado correctamente. </center> </p>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    echo "<p> <center> El usuario se ha guardado en la bases de datos llamada  <strong> " . $baseDatos . "  </strong> a las " .  date("H:i ") . " del " . $diaEspanol[date("w")] . " " . date ("d") . " de " . $mesEspanol[date("m")-1] . " de " . date("Y") . "." . "<center>" . "</p>";
    echo "<br>";
} else {
    echo "<h1>Error en insercción de usuario: " . $insertar . "<br>" . mysqli_error($conexion). "</h1>";

}
echo "<hr>";


////////////////////////////////      FECHA DE HOY  ARRIBA         ///////////////////////////////////////////
//----------------------------------------
// Definir primero la zona horaria   https://www.php.net/manual/es/timezones.php
//Array para traducir el mes al español
// Como los array comienzan en 0 tendría (0 a 11 meses) de la unica forma que funciona es poniendo un -1 en la llamada
// ¿POR QUÉ DE  LA COLOCACIÓN EN EL IF de la CONEXION e INSERCION DE USUARIOS? 
// Si no se hiciera el echo dentro del IF y no se pudiera realizar la insección (mal introduccion de datos de BD, del nombre de la
// tabla....  imprimiría en pantalla que el usuario ha sido registrado con tal hora y dia  no siendo cierto. No ha sido registrado)
// Para ello hay que crear antes los ARRAY mes y dia en español para llamorlo dentro del if.


////////////////////////////////      AÑOS DEL USUARIO         ///////////////////////////////////////////

$hoy = date("Y-m-d");
$edad = date_diff(date_create($fechaNacimiento), date_create($hoy)) ;
echo "<br>";
echo "<p><center> <strong> $nombre  </strong>tiene una edad de " .$edad->format('%y') . " años." . "<center>" . "</p>";
echo "<br>";

echo "<a href='./index.php'>Volver a la pagina de registro / login </a>";

    ?>
</body>
</html>