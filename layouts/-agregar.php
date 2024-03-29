<?php
// include 'config.php';
// 1) Conexion
//$conexion = mysqli_connect("localhost:3306", "usuario", "@a1b2c3@");
$conexion = mysqli_connect("127.0.0.1", "root", "");

mysqli_select_db($conexion, "prueba_cadenas");

// ) Almacenamos los datos del envío POST
// No se utiliza este paso en este caso puntual

// 2) Preparar la orden SQL
// Sintaxis SQL SELECT
// SELECT * FROM nombre_tabla
// => Selecciona todos los campos de la siguiente tabla
// SELECT campos_tabla FROM nombre_tabla
// => Selecciona los siguientes campos de la siguiente tabla
$consulta = 'SELECT * FROM bbdd_prueba_cadenas';

// 3) Ejecutar la orden y obtenemos los registros
$datos = mysqli_query($conexion, $consulta);
?>

<!doctype html>
<html lang="en">
  <link rel="stylesheet" href="styles/estilos.css">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CADENAS</title>
<link rel="shortcut icon" href="images/bicycle_98662.ico">
</head>
<body>
<!-- HIDE MENU ON SCROLL -->
  <!-- NAVEGADOR DE PAGINA -->
  <div id="hmosnavbar">
    <a class=dropbtn href="../index.html">MENDOZA PEDALEA</a>
    <a class=dropbtn href="./iniciar_sesion.html">INICIAR SESION</a>
    <a class=dropbtn href="./registrarse.html">REGISTRARSE</a>
    <div class="dropdown">
      <button class="dropbtn">CONTACTOS<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="#">PABLO NAVARRETE</a>
        <a href="#">ESTEBAN ALVAREZ</a>
      </div>
    </div>
    <input class="searchbutton" type="text" placeholder="Search..">
  </div>
<h2>Agregar ropa</h2>
<p>Ingrese los datos de la prenda.</p>


<form method="POST" action="agregar.php" enctype="multipart/form-data">
    <label>Tipo de prenda</label>
    <input type="text" name="tipo_prenda" placeholder="Tipo de prenda" required>
    <label>Marca</label>
    <input type="text" name="marca" placeholder="Marca" required>
    <label>Talle</label>
    <input type="text" name="talle" placeholder="Talle" required>
    <label>Precio</label>
    <input type="text" name="precio" placeholder="Precio" required>
    <label>Imagen</label>
    <input type="file" name="imagen" placeholder="imagen">
    <input type="submit" name="submit" value="Ingresar">
</form>
