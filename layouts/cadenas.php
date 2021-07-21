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
  <!-- BOTTOM MENU-->
  <div class="bnavbar">
      <!-- ACCESORIOS-->
      <div class="dropup">
        <button class="dropbtn">ACCESORIOS</button>
        <div class="dropup-content">
          <a data-toggle="tooltip" data-placement="right" title="Tooltip on right" href="#"></a>
          <a href="#">SOPORTE DE CELULAR</a>
          <a href="#">LUCES DELANTERAS</a>
          <a href="#">LUCES TRASERAS</a>
          <a href="#">ALFORJAS</a>
          <a href="#">CASCOS</a>
          <a href="#">CADENAS</a>
          <a  href="#">INFLADORES</a>
        </div>
      </div>
      <!-- INDUMENTARIA-->
      <div class="dropup">
        <button class="dropbtn">INDUMENTARIA</button>
        <div class="dropup-content">
          <a data-toggle="tooltip" data-placement="right" title="Tooltip on right" href="#"></a>
          <a  href="#">REMERAS</a>
          <a  href="#">CALZAS</a>
          <a  href="#">MEDIAS</a>
          <a  href="#">ZAPATILLAS</a>
          <a  href="#">PAÑUELOS</a>
        </div>
      </div>
      <!-- COMPONENTES-->
      <div class="dropup">
        <button class="dropbtn">COMPONENTES</button>
        <div class="dropup-content">
          <a data-toggle="tooltip" data-placement="right" title="Tooltip on right" href="#"></a>
          <a href="#">PEDALES</a>
          <a href="#">CUADROS</a>
          <a href="#">MANUBRIOS</a>
          <a href="#">CADENAS</a>
          <a href="#">FRENOS</a>
          <a href="#">LLANTAS</a>
        </div>
      </div>
      <!-- TALLER-->
      <div class="dropup">
        <button class="dropbtn">TALLER</button>
        <div class="dropup-content">
          <a data-toggle="tooltip" data-placement="right" title="Tooltip on right" href="#"></a>
          <a href="#">AJUSTES</a>
          <a href="#">REPARACIONES</a>
          <a href="#">CAMBIOS DE COMPONENTES</a>
          <a href="#">TUBELIZADO</a>
          <a href="#">PUESTA A PUNTO</a>
          <a href="#">CAMBIO DE ACEITE DE FRENOS</a>
          <a href="#">ARMADO DE BICICLETAS</a>
          <a href="#">SERVICE</a>
        </div>
      </div>
      <!-- HIDRATACION-->
      <div class="dropup">
        <button class="dropbtn">HIDRATACION</button>
        <div class="dropup-content">
          <a data-toggle="tooltip" data-placement="right" title="Tooltip on right" href="#"></a>
          <a class="dropdown-item" href="#">POMOS</a>
          <a class="dropdown-item" href="#">CAMEL BACK</a>
          <a class="dropdown-item" href="#">BEBIDAS ENERGIZANTES</a>
        </div>
      </div>
      <!-- RUEDAS-->
      <div class="dropup">
        <button class="dropbtn">RUEDAS</button>
        <div class="dropup-content">
          <a data-toggle="tooltip" data-placement="right" title="Tooltip on right" href="#"></a>
          <a class="dropdown-item" href="#">RODADO 26</a>
          <a class="dropdown-item" href="#">RODADO 27,5</a>
          <a class="dropdown-item" href="#">RODADO 29</a>
          <a class="dropdown-item" href="#">DESCENSO</a>
          <a class="dropdown-item" href="#">RUTERA</a>
          <a class="dropdown-item" href="#">CÁMARAS</a>
          <a class="dropdown-item" href="#">KIT DE REPARACIÓN</a>
        </div>
      </div>
  </div>
  <!-- PRODUCT CARDS -->
	<div style="height: 50px;">
	</div>
	<div class="pccontainer">
	<?php
    while ($reg = mysqli_fetch_array($datos)) { ?>
    <div class="card">
		<img src="data:image/png;base64, <?php echo base64_encode($reg['imagen']) ?>" alt="img" style="width:100%">
		<p class="price">$<?php echo $reg['precio']; ?></p>
		<h1><?php echo ucwords($reg['subgrupo'] . " ") . strtoupper($reg['marca']); ?></h1>
        <p><?php echo ucwords($reg['descripcion'] . " " ); ?></p>
		<p><button>Add to Cart</button></p>
    </div>
	<?php } ?>
	</div>
<!-- FOOTER -->
  <div class="fcontainer">
    <!-- VISTO RECIENTEMENTE-->
    <div class="vistorecientemente">
      <h5>VISTO RECIENTEMENTE</h5>
    </div>
    <!-- SUBFOOTER-->
    <div class="sfcontainer">
        <!-- REDES SOCIALES -->
        <div class="redessociales">
          <div>
            <h5>REDES SOCIALES</h5>
            <ul>
              <li><a href=# title="Opens in a new browser window"
                  target="_blank"><img
                    src="images/facebook.png"
                    alt="" width="32" height="32">Facebook</a></li>
              <li><a href="#" title="Opens in a new browser window"
                  target="_blank"><img
                    src="images/instagram.png"
                    alt="" width="32" height="32">Instragram</a></li>
            </ul>
          </div>
        </div>
        <!-- CATEGORIAS -->
        <div>
          <div>
            <h5>CATEGORÍAS</h5>
            <ul>
              <li><a href="#">ACCESORIOS</a></li>
              <li><a href="#">INDUMENTARIA</a></li>
              <li><a href="#">COMPONENTES</a></li>
              <li><a href="#">TALLER</a></li>
              <li><a href="#">HIDRATACIÓN</a></li>
              <li><a href="#">RUEDAS</a></li>
            </ul>
          </div>
        </div>
        <!-- SERVICIO AL CLIENTE-->
        <div>
          <div>
            <h5>SERVICIO AL CLIENTE</h5>
            <ul>
              <li><a href="/customer-service/email-or-phone-us">CONTACTANOS</a></li>
              <li><a href="/staticcontent/postageInfoPage.jsp">COSTOS DE ENVÍO</a></li>
              <li><a href="/customer-service/returning-an-item">DEVOLVER UN PRODUCTO</a></li>
              <li><a href="/customer-service/making-a-warranty-return">GARANTÍA</a></li>
              <li><a href="/customer-service" class="more">VER MÁS</a></li>
            </ul>
          </div>
        </div>
        <!-- ACERCA DE NOSOTROS-->
        <div>
          <div>
            <h5>ACERCA DE NOSOTROS</h5>
            <ul>
              <li><a href="/customer-service/store-showroom-details">QUIÉNES SOMOS</a></li>
              <li><a href="http://hub.chainreactioncycles.com/events/" target="_blank"
                  title="Opens in a new browser window" class="elink">EVENTOS</a></li>
            </ul>
          </div>
        </div>
        <!-- DATOS DE CUENTA-->
        <div>
          <div>
            <div class="crcFooterNewsletterSlot"
              onclick="callTrack('_trackEvent','','Click Promo','-FooterNewsletterSlot-Merchandiser Slot');">
              <h5>REGISTRATE &amp; AHORRÁ</h5>
              <p>ADQUIERE <strong>15% OFF</strong> EN TU PRIMER COMPRA. SÓLO PARA CLIENTES NUEVOS</p>
            </div>
          </div>
          <div id="crcFooterNewsletterSignupContent" class="crcFooterNewsletterSignup">
            <label for="crcNewsletterEmail" class="crcFooterNewsletterSignupPrompt">
              Ingresá tu dirección de correo electrónico</label>
            <input type="text" id="crcNewsletterEmail" class="email_id" bean="ProfileFormHandler.email"
              autocomplete="off" autocapitalize="off" autocorrect="off" maxlength="100">
            <div class="invalid_email footer_error_msg" style="display:none;">Your email address is not valid - please
              enter in the correct format. (eg someone@somewhere.com)</div>
            <div class="exceeds_length_email footer_error_msg" style="display:none;">Your email address exceeds our
              limit. Please use a shorter email address to sign up.</div>
            <a class="crcNewsletterSignupSubmit"
              onclick="callTrack('_trackEvent','Newsletter Sign up','Confirm Signup','');displayFooterNewsletters();">
              REGISTRATE</a>
          </div>
          <div class="crcFooterContentSlot">
            <div class="footerPrivacyInfoDisclaimerSlot"
              onclick="callTrack('_trackEvent','','Click Promo','-FooterPrivacyInfoDisclaimerSlot-Merchandiser Slot');">
              Al registrarse usted acepta nuestros <a href="#" target="_blank">Términos y condiciones</a> y
              <a href="#" target="_blank">políticas de privacidad.</a> </div>
          </div>
        </div>
    </div>
  </div>
<!--FOOTER SHIMANO-->
<!-- SCRIPTS -->
  <script src="scripts/js.js"></script>

</body>

</html>
