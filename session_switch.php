<?php
session_start();
include('config/conexion.php');

$sql="SHOW COLUMNS FROM switch.usuarios WHERE `Field` NOT IN ('usuario');";
$res=$connect->query($sql);
while ($row=$res->fetch_assoc()) {
  
}
print_r( $_SESSION );





$connect->close();
?>
