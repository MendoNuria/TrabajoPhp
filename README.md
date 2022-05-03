# TrabajoPhp
TrabajoPhpMysql
1.- Datos introducidos en la base de datos de trabajoPhp.


MariaDB [(none)]> create database trabajo;
Query OK, 1 row affected (0.012 sec)

MariaDB [(none)]> use trabajo;

MariaDB [trabajo]> create table datos(
    -> nombre varchar (30) not null primary key,
    -> fechanac date,
    -> color varchar (30));

MariaDB [trabajo]> show tables;
+-------------------+
| Tables_in_trabajo |
+-------------------+
| datos             |
+-------------------+

MariaDB [trabajo]> create user 'nuria'@'localhost' identified by 'nuria';
Query OK, 0 rows affected (0.017 sec)

MariaDB [trabajo]> grant all privileges on trabajo.* to 'nuria';
Query OK, 0 rows affected (0.006 sec)

MariaDB [trabajo]> flush privileges;
Query OK, 0 rows affected (0.007 sec)

MariaDB [trabajo]> show columns from datos;
+----------+-------------+------+-----+---------+-------+
| Field    | Type        | Null | Key | Default | Extra |
+----------+-------------+------+-----+---------+-------+
| nombre   | varchar(30) | NO   | PRI | NULL    |       |
| fechanac | date        | YES  |     | NULL    |       |
| color    | varchar(30) | YES  |     | NULL    |       |
+----------+-------------+------+-----+---------+-------+
3 rows in set (0.003 sec)




2.- Al realizar la conexión correctamente e insertar campos en la tabla “datos”  se ve que en el campo ‘fechanac’ la forma de ingresar el formato fecha  lo hace de forma distinta al que lo hace PHP.
En Mysql Y-m-d   y en Php d-m-Y.


MariaDB [trabajo]> select * from datos;
+--------+------------+---------+
| nombre | fechanac   | color   |
+--------+------------+---------+
| Laura  | 2005-04-19 | #cd1515 |
+--------+------------+---------+
1 row in set (0.001 sec)

//////////////////////////////////// FECHAS //////////////////////////////////////////////////

Hay que tener en cuanta Hay una gran diferencia entre / y - cuando se usa como divisor al formatear una fecha, si el separador es un / entonces se asume el formato americano m/d/y; y si el divisor es un -, entonces se asume el formato europeo d-m-y. Para evitar la ambigüedad, se recomienda utilizar las fechas ISO 8601 (YYYY-MM-DD).
<?php
echo date("jS F, Y", strtotime("11.12.10"));
// outputs 10th December, 2011

echo date("jS F, Y", strtotime("11/12/10"));
// outputs 12th November, 2010

echo date("jS F, Y", strtotime("11-12-10"));
// outputs 11th December, 2010 
?>




