<html>		

	<?php include ("supervisor_home.php");
	
			
	 
		include ('../rutas.php');
	  
		$permiso = "supervisor home";
	  	
		$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
		mysql_select_db ("tpFinal",$conexion) or die ("no db");
	  
		include("../permiso.php");
	  
		if ( isset ($_SESSION["nombre"])){
		
		$nombre = $_SESSION["nombre"];
	   
		}
		else{
		     session_destroy();
    
           header("location:login.php");
	   }
	   
	?>
	<div id="divContenedor">
	<div class="divTabla">
	<head>
		<LINK REL="Stylesheet" HREF="../../Css/login.css" TYPE="text/css">
		
	
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Mapa de Google Maps</title>
		<meta name="Description" content="Mapa elemental de Google Maps para usarlo desde la PC, que se muestra a todo lo ancho y alto del navegador e incluye un cuadro de b&#250;squeda.">
		<meta name ="author" content ="Norfi Carrodeguas">
		<style type="text/css" media="screen">
			<!--
			html,body{height:100%;margin:0;padding:0;}
			#map{height:96%;}
			-->
		</style>	
	</head>
	<!DOCTYPE html>
	<html lang="es">
				
	
	<?php
				
	$consulta_viaje_modificar  = mysql_query ("SELECT id_vc, id_viaje,  fecha_hora, lugar, costo, cantidad 
													FROM vale_combustible
													   ") or die (mysql_error());
			
			if ($row = mysql_fetch_array($consulta_viaje_modificar)){
			echo "<table border = '1'> \n";
			echo "<tr><td>ID</td><td>ID COMBUSTIBLE</td><td>ID VIAJE</td><td>FECHA HORA</td><td>COSTO</td><td>
			CANTIDAD</td></tr> \n";
			do{
				echo "<tr><td>".$row["id_vc"]."</td><td>".$row["id_viaje"]."</td><td>".$row["fecha_hora"]
				."</td><td>".$row["lugar"]."</td><td>".$row["costo"]."</td><td>".$row["cantidad"]."</td></tr> \n";     
			} while ($row = mysql_fetch_array ($consulta_viaje_modificar));
			echo "</table> \n";
		} else {
			echo "no se encontraron ningun registro";
		} 
				
	?>		
	
	<p>Colocar id del viaje</p>	
	
	 <div><label>CODIGO
		</br>
		<input type="text" name="cod_viaje"  value="<?php echo $codigo_reparacion?>"readonly = "readonly">
 		</label>
 	</div>

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es&callback=iniciar"></script>

	<script>
		function iniciar() {
		var mapOptions = { //valor mapa
		center: new google.maps.LatLng(25.80, -80.30), //latitud y longitud
		zoom: 10, 
		mapTypeId: google.maps.MapTypeId.ROADMAP}; //tipo de mapa
		var map = new google.maps.Map(document.getElementById("map"),mapOptions);}		
	</script>

	<div id="map" style="width:500px;height:250px;"></div>
	<form style="float:left;" action="https://maps.google.com/?q=" method="get">
		<input type="text" name="q" value="">
		<input type="submit" value="Buscar en Google Maps">
	</form>
	<!--
	<div style="float:right;">
	Mas info: <a href="http://norfipc.com/" target="_blank">NorfiPC</a></div>
	-->
	
	</div>
	</div>
	</html>
</html>