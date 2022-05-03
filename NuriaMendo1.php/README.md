MariaDB [(none)]> create database TrabajoFinal;
Query OK, 1 row affected (0.009 sec)

MariaDB [(none)]> USE TrabajoFinal;
Database changed
MariaDB [TrabajoFinal]> create table datos(
    -> nombre varchar (30) not null primary key,
    -> fechanac date,
    -> color varchar (30));
Query OK, 0 rows affected (0.021 sec)



ariaDB [TrabajoFinal]> show tables;
+------------------------+
| Tables_in_TrabajoFinal |
+------------------------+
| datos                  |
+------------------------+
1 row in set (0.001 sec)

MariaDB [TrabajoFinal]> create user 'NuriaBD'@'localhost' identified by 'nuria';
Query OK, 0 rows affected (0.002 sec)

MariaDB [TrabajoFinal]>  grant all privileges on TrabajoFinal.* to 'NuriaBD'@'localhost';
Query OK, 0 rows affected (0.002 sec)

MariaDB [TrabajoFinal]> flush privileges;
Query OK, 0 rows affected (0.004 sec)

MariaDB [TrabajoFinal]> show columns from datos;
+----------+-------------+------+-----+---------+-------+
| Field    | Type        | Null | Key | Default | Extra |
+----------+-------------+------+-----+---------+-------+
| nombre   | varchar(30) | NO   | PRI | NULL    |       |
| fechanac | date        | YES  |     | NULL    |       |
| color    | varchar(30) | YES  |     | NULL    |       |
+----------+-------------+------+-----+---------+-------+
3 rows in set (0.004 sec)


La diferencia con el ejercicio NuriaMendo está en que posee otro nombre como base de datos pero con el los mismos nombres de la tabla y de los campos. Tambien type del input es 'color', no un select como en el anterior ejercicio en el que daba opciones de colores ya establecidos.
En este caso los colores poseen un valor  hexadecimal (#000000  == negro).