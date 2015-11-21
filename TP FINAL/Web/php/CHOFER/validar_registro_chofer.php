<?PHP
	session_start() ;
	
	$fecha_hora =$_POST ["fecha_hora_viaje"];
	$km_recorridos =$_POST ["km_recorridos_viaje"];
	$id_usuario = $_SESSION["id_usuario"];
	$combustible = $_POST["combustbile"];

		include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	$consulta1= mysql_query(" SELECT MAX( id_viaje ) viaje
                              FROM viaje 
                              WHERE id_usuario = '".$id_usuario."' ");
                              
	
							
							$fila1 = mysql_fetch_assoc($consulta1)or die ;
							
							$id_viaje = $fila1["viaje"];
	
	$update_viaje_km_recorridos = mysql_query("UPDATE viaje
												SET fecha_fin = '".$fecha_hora."',
													km_recorridos = '".$km_recorridos."',
													combustible_cons ='".$combustible."'
												where id_viaje = '".$id_viaje."'");
									   
	
	$total_km_recorridos = mysql_query ("select V.km_recorridos viaje_km, T.km_recorridos trans_km, V.id_transporte trans
										 from viaje V inner join 
											  transporte T on V.id_transporte = T.id_transporte
											  where V.id_viaje = '".$id_viaje."'");
											  
	$fila1 = mysql_fetch_assoc($total_km_recorridos)or die ;
	
	$total = $fila1 ["viaje_km"] + $fila1 ["trans_km"];
	
	echo $total;
	
	$id_trasnporte = $fila1["trans"];
	
	$modificacion_km = mysql_query("update transporte
									set km_recorridos = '".$total."'
									where id_transporte = '".$id_trasnporte."' ");
	
	
	
							
		
	echo "Registro exitos";
	/*if($update_viaje_km_recorridos == true)
			  header("location:./".$chofer_home."");
	*/
?>