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

             
        $conexion = mysqli_connect("localhost", "nuria", "nuria", "trabajo", "datos") or
              die("Problemas con la conexión");
            
        $registros = mysqli_query($conexion, "SELECT * FROM datos") or
              die("Problemas en el select:" . mysqli_error($conexion));

            while ($reg=mysqli_fetch_array($registros))
            {
            //echo "Nombre:".$reg['nombre']."<br>";
           // echo "Fecha de Nacimiento:".$reg['fechanac']."<br>";
            //echo "Color preferido:".$reg['color']."<br>" ."<br>";
           echo "El usuario " .$reg['nombre'] .  " nació el día " . $reg['fechanac'] ."<br>";
// LO que aparece en los campos de la base de datos
           echo "<br>";
            

            /*
             
1. Acuario (20 de enero — 18 de febrero)             -> $mes == 1   $dia > 20        $mes == 2   $dia < 18         
2. Piscis (19 de febrero — 20 de marzo)              -> $mes == 2   $dia > 19        $mes == 3   $dia < 20
3. Aries (21 de marzo — 19 de abril)                 -> $mes == 3   $dia > 21        $mes == 4   $dia < 19
4. Tauro (20 de abril — 21 de mayo)                  -> $mes == 4   $dia > 20        $mes == 5   $dia < 21
5. Géminis (21 de mayo — 20 de junio)                -> $mes == 5   $dia > 21        $mes == 6   $dia < 20
6. Cáncer (21 de junio — 22 de julio)                -> $mes == 6   $dia > 21        $mes == 7   $dia < 22
7. Leo (23 de julio — 22 de agosto)                  -> $mes == 7   $dia > 23        $mes == 8   $dia < 22
8. Virgo (23 de agosto — 22 de septiembre)           -> $mes == 8   $dia > 23        $mes == 9   $dia < 22
9. Libra (23 de septiembre — 22 de octubre)          -> $mes == 9   $dia > 23        $mes == 10   $dia < 22
10. Escorpio (23 de octubre — 21 de noviembre)       -> $mes == 10  $dia > 23        $mes == 11   $dia < 21
11. Sagitario (22 de noviembre — 21 de diciembre)    -> $mes == 11  $dia > 22        $mes == 12   $dia < 21
12. Capricornio (22 de diciembre — 19 de enero)      -> $mes == 12  $dia > 22        $mes == 1   $dia < 19
            */



           if (!function_exists("zodiaco")) {
            function zodiaco($fechaNacimiento){
            
            $dia=date("d", strtotime($fechaNacimiento));
            $mes=date("m", strtotime($fechaNacimiento));
            
            if((($dia >= "20") && ($mes == "1")) or (($dia <= "18") && ($mes == "2"))){
             $signo="Acuario <strong>♈</strong>";
            }
            if((($dia >= "19") && ($mes == "2")) or (($dia <= "20") && ($mes == "3"))){
                 $signo="Piscis <strong>♉</strong>";
            }
            if((($dia >= "21") && ($mes == "3")) or (($dia <= "19") && ($mes == "4"))){
                 $signo="Aries <strong>♊</strong>";
            }
            if((($dia >= "20") && ($mes == "4")) or (($dia <= "21") && ($mes == "5"))){
                 $signo="Tauro <strong>♋</strong>";
            }
            if((($dia >= "21") && ($mes == "5")) or (($dia <= "20") && ($mes == "6"))){
                 $signo="Geminis <strong>♌</strong>";
            }
            if((($dia >= "21") && ($mes == "6")) or (($dia <= "22") && ($mes == "7"))){
                 $signo="Cancer <strong>♍</strong>";
            }
            if((($dia >= "23") && ($mes == "7")) or (($dia <= "22") && ($mes == "8"))){
                 $signo="Leo <strong>♎</strong>";
            }
            if((($dia >= "23") && ($mes == "8")) or (($dia <= "22") && ($mes == "9"))){
                 $signo="Virgo <strong>♏</strong>";
            }
            if((($dia >= "23") && ($mes == "9")) or (($dia <= "22") && ($mes == "10"))){
                 $signo="Libra <strong>♐</strong>";
            }
            if((($dia >= "23") && ($mes == "10")) or (($dia <= "21") && ($mes == "11"))){
                 $signo="Escorpio <strong>♑</strong>";
            }
            if((($dia >= "22") && ($mes == "11")) or (($dia <= "21") && ($mes == "12"))){
                 $signo="Sagitario <strong>♒</strong>";
            }
            if((($dia >= "22") && ($mes == "12")) or (($dia <= "19") && ($mes == "1"))){
                 $signo="Capricornio <strong>♓</strong>";
            }
            
            return $signo;
            }
            }
    
    
            // Ejemplo de como usar:
        
             echo zodiaco($signo);
        }
mysqli_close($conexion);
    ?>
</body>
</html>