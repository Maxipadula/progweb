<html>
	<head>
	

	</head>
	
	<body>
		<?php
			
			 session_start();
			 
			 $permiso ="registrar datos de viaje";
			 $id = $_SESSION["id_usuario"];
			 
			 include ('../rutas.php');
			
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../permiso.php");
			
		?>
		
		<?php include ("menu_chofer.php");?>
				
		<div id="divContenedor">
			<div class="divTabla">
			<p> REGISTRO DE VIAJE</p>
			
			<form class='contacto' method="post" action="<?php echo $chofer_validar_registro_viaje?>">
			<div id="contacto">
				
				</br>
				<div><label>FECHA Y HORA DE LLEGADA
					<input type="text" name="fecha_hora_viaje">
					</label>
				</div>
				</br>
				
				<div><label>KILOMETROS RECORRIDOS
					<input type="text" name="km_recorridos_viaje" size="5">
					</label>
				</div>
				
					
				<div><label>COMBUSTIBLE CONSUMIDO
					<input type="text" name="combustbile" size="5">
					</label>
				</div>
				
				</br>
				
			
				<input type="submit" value="Registrar">
				<input type="reset" value="Borrar Todo">
			</div>
			</form>
			</div>
		</div>
	</body>
</html>