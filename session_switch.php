<?php
session_start();
include('config/conexion.php');
// $_SESSION['mensajeriapp']=1;
// $_SESSION['te_informo']=0;
// $_SESSION['mda']=0;
$row_usuario=obtener_row_usuario('john.quintero');

$sql="SELECT * FROM switch.session_switch";
$res=$connect->query($sql);
while ($row_session=$res->fetch_assoc()) {
$_SESSION[$row_session['aplicativo']]=$row_usuario[$row_session['switch']];
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
