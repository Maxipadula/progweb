 <html>
 <?php include ("mecanicos_datos.php");?>
 

	<?PHP	
	
				include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_mecanico ) IDM
                                        FROM mecanico ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_mecanico= $fila1["IDM"];
			
			$id_mecanico +=1;
	?>
 	FORMULARIO PARA TABLA MECANICO:
 	<form class='contacto' method="post" name="mecanico" action="<?php echo $validar_datos_mecanicos ?>">
 		<div id="contacto">
 				</br>
 				<div><label>ID
					</br>
					<input type="text" name="id_me"  value="<?php echo $id_mecanico?>"readonly = "readonly">
 				</label>
 				</div>	
 				</br>
				
 				<div><label>NOMBRE Y APELLIDO
 					</br>
 					<input type="text" name="nombre">
 				</label>
 				</div>
 				</br>
				
		
				
				<input type="radio" name="internoexterno" value="interno" >Interno<br>
				<input type="radio" name="internoexterno" value="externo" onclick="document.mecanico.empresa.disabled=!document.mecanico.empresa.disabled">Externo			
			
				<br>
				Empresa
				<input type ="text" name="empresa" disabled>
				<br><br>
				<input type="submit" value="Agregar">

 		</div>
 	</form>
	
	
 
 </html>