<?php
session_start();
include('config/conexion.php');

$sql="SHOW COLUMNS FROM switch.usuarios WHERE `Field` NOT IN ('usuario');";
$res=$connect->query($sql);
$row_usuario=obtener_row_usuario('john.quintero');
while ($row=$res->fetch_assoc()) {
$_SESSION[$row['Field']]=$row_usuario[$row['Field']];
}
print_r( $_SESSION );

function obtener_row_usuario($usuario){
  global $connect;
  $sql="SELECT * FROM switch.usuarios WHERE usuario='".$usuario."'";
  $res=$connect->query($sql);
  if ($res->num_rows>0) {
      return $row=$res->fetch_assoc();
  }
}



$connect->close();
?>
