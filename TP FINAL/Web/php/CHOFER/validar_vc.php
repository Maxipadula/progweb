<?PHP
	session_start() ;
	
	$fecha_hora =$_POST ["fecha_hora_vc"];
	$lugar =$_POST ["lugar_vc"];
	$costo =$_POST ["costo_vc"];
	$cantidad =$_POST ["cantidad_vc"];

	

	
		include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	
			$consulta_id= mysql_query(" SELECT MAX( id_vc ) ID
                                        FROM vale_combustible ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_vc= $fila1["ID"];
			
			$id_vc++;
			
	
	$insert_vc = mysql_query("insert into vale_combustible(id_vc,id_viaje,  fecha_hora, lugar, costo, cantidad)
							                    values ('".$id_vc."',1122,'".$fecha_hora."', '".$lugar."','".$costo."', '".$cantidad."');") or die (mysql_error());

		
		echo "<p>Los datos han sido guardados con exito.</p>" ; 

	
?>