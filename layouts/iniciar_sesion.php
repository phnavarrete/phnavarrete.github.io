<?php
$user_ingresado = $_POST['email'];
$password_ingresado = $_POST['psw'];
$bbdd = [
    'email'=> 'admin@admin.com',
    'psw'=> '1234',
];
if ($bbdd['email'] == $user_ingresado and $bbdd['psw'] == $password_ingresado){
  print('ACEPTADO');
} else {
  print('Error! VERIFIQUE LOS DATOS');
}
?>
