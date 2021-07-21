<?php
// include 'config.php';
// 1) Conexion
//$conexion = mysqli_connect("localhost:3306", "usuario", "@a1b2c3@");
$conexion = mysqli_connect("127.0.0.1", "root", "");

mysqli_select_db($conexion, "usuarios");

// ) Almacenamos los datos del envío POST
// No se utiliza este paso en este caso puntual

// 2) Preparar la orden SQL
// Sintaxis SQL SELECT
// SELECT * FROM nombre_tabla
// => Selecciona todos los campos de la siguiente tabla
// SELECT campos_tabla FROM nombre_tabla
// => Selecciona los siguientes campos de la siguiente tabla
$consulta = 'SELECT * FROM usuarios';

// 3) Ejecutar la orden y obtenemos los registros
$datos = mysqli_query($conexion, $consulta);

$user_ingresado = $_POST['email'];
$password_ingresado = $_POST['psw'];

if ($datos['email'] == $user_ingresado and $datos['psw'] == $password_ingresado){
  print('ACEPTADO');
} else {
  print('Error! VERIFIQUE LOS DATOS');
}
?>
