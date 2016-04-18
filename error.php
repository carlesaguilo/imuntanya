<?php 
ob_start(); 
session_start();

$_SESSION["PATH_WEB"] = $_SERVER['DOCUMENT_ROOT']; 
    
//Inicialitzacio de totes les variables i crida a les clases necesaries
include_once $_SESSION["PATH_WEB"].'/includes/inicialitzacio.php';

//Controla les peticions especials, formularis, subcripcions de noticies, for�ar vista de pagina, etc.
include_once $_SESSION["PATH_WEB"].'/includes/peticionsEspecials.php';   
    
//Llegim els idiomes de la pagina
include_once $_SESSION["PATH_WEB"].'/includes/llegirIdiomes.php'; 	
      
//Llegim el node i continguts
include_once $_SESSION["PATH_WEB"].'/includes/llegirNode.php'; 
        
include_once 'head.php';
?>
<div>
	<div id="error">
	<br><br><br>
		<h1 >P&aacute;gina no encontrada (404)</h1>
	
		<div class="disculpa">

			Disculpe las molestias
		</div>
		
		<div class="textDisculpa">
			<div >La p&aacute;gina solicitada no se ha encontrado. Es posible que haya cambiado de nombre, ya no exista, no est&eacute; disponible temporalmente por motivos t&eacute;cnicos o que usted no haya introducido correctamente la direcci&oacute;n (URL) en el navegador.</div>
		</div>
	
		<div class="disculpa">¿Qu&eacute; puede hacer ahora?</div>
		<div >
			<div >

				<ul>
					<li>Ir a nuestra &nbsp;<a href="/">P&aacute;gina de Inicio</a>
					<li>Utilizar nuestra &nbsp;<a href="/mapa-web">Mapa web</a>
				</ul>
			</div>
		</div>
		<div class="disculpa">¿Necesita ayuda?</div>

		<div >
			<div>Si necesita ayuda para encontrar la informaci&oacute;n que busca, puede&nbsp;<a href="/contacto">contactar con nosotros</a>  o bien si lo desea a trav&eacute;s de nuestro tel&eacute;fono de atenci&oacute;n al cliente <b>(+34) 973 60 48 18</b></div>
            <br> 
			<div >Gracias por visitar INFRAESTUCTURES DE MUNTANYA</div>
		</div>

		<div>&nbsp;</div>

	</div>
</div>	
<?php 
//Peu de pagina Administrable
include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/foodWeb.php';
include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/food.php';
?>
