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

<!-- HIDE MENU ON SCROLL -->

    <h1>Tienda de ropa</h1>
    <button type="submit"><a href="index.html">Inicio</a></button>
    <button type="submit"><a href="listar.php">Listar ropa</a></button>
    <button type="submit"><a href="agregar.html">Agregar ropa</a></button>
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>EDITAR</th>
        <th>BORRAR</th>
    </tr>
    

    // 4) Mostrar los datos del registro
    <?php while ($reg=mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['tipo_prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        <td><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="100px"></td>
        <td><a href="modificar.php?id=<?php echo $reg['id'];?>">Editar</a></td>
        <td><a href="borrar.php?id=<?php echo $reg['id'];?>">Borrar</a></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
