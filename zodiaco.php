<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--

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

if(($DIA>=21 && $MES=="ABRIL") || ($DIA<=20 && $MES=="MAYO"))
{echo "SU SIGNO ES:";
 echo"<br>";
 echo"TAURO";
}
if(($DIA>=21 && $MES=="MAYO") || ($DIA<=21 && $MES=="JUNIO"))
{echo "SU SIGNO ES:";
 echo"<br>";
 echo"GEMINIS";
}
if(($DIA>=21 && $MES=="JUNIO") || ($DIA<=20 && $MES=="JULIO"))
{echo "SU SIGNO ES:";
 echo"<br>";
 echo"CANCER";
}
if(($DIA>=21 && $MES=="JULIO") || ($DIA<=21 && $MES=="AGOSTO"))
{echo "SU SIGNO ES:";
 echo"<br>";
 echo"LEO";
}
if(($DIA>=22 && $MES=="AGOSTO") || ($DIA<=22 && $MES=="SEPTIEMBRE"))
{echo "SU SIGNO ES:";
 echo"<br>";
 echo"VIRGO";
}
if(($DIA>=23 && $MES==9) || ($DIA<=22 && $MES==10))
{echo "SU SIGNO ES:";
 echo"<br>";
 echo"LIBRA";
}
if(($DIA>=23 && $MES==10) || ($DIA<=22 && $MES==11))
{echo "SU SIGNO ES:";
 echo"<br>";
 echo"ESCORPIO";
}
if(($DIA>=23 && $MES==11) || ($DIA<=20 && $MES==12))
{echo "SU SIGNO ES:";
 echo"<br>";
 echo"SAGITARIO";
}
if(($DIA>=21 && $MES==12) || ($DIA<=19 && $MES==1))
{echo "SU SIGNO ES:";
 echo"<br>";
 echo"CAPRICORNIO";
}
if(($DIA>=20 && $MES==1) || ($DIA<=18 && $MES==2))
{echo "SU SIGNO ES:";
 echo"<br>";
 echo"ACUARIO";
}
if(($DIA>=19 && $MES==2) || ($DIA<=20 && $MES==3))
{echo "SU SIGNO ES:";
 echo"<br>";
 echo"PISCIS";
}

-->
</body>
</html>