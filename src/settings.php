<?php
$host_db = "localhost"; //Host de la Base de Datos
$name_db = ""; //Nombre de la BD
$user_db = "root"; //Usuario de la Base de Datos
$pass_db = ""; //Pass del usuario de la bd
$tbl_db = ""; //Nombre de la tabla usuarios de la BD

//Conectar con la base de datos
function connectdb($host__db, $name__db, $user__db, $pass__db, $tbl__db){
  $conexion = new mysqli($host__db, $user__db, $pass__db, $name__db);
  if(!$conexion){
    return "No se ha podido conectar con el servidor" . mysql_error();
  }
}

function getSettings(){
    return '$host_db, $name_db, $user_db, $pass_db, $tbl_db';
}

$a = connectdb($host_db, $name_db, $user_db, $pass_db, $tbl_db);
 ?>
