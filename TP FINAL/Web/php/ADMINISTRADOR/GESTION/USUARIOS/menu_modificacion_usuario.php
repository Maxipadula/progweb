<html>
 <?php include ("usuarios_datos.php"); ?>
<head>
</head>
<body>
	<?php $id = $_GET["ID"]?>
	
	<div id="divContenedor">
	 	<h2>MODIFICAR USUARIOS</H2>
		<p>Que dato desea modificar?</p>

		<form class='contacto' method="post" action="<?php echo $modificar_usuarios3?>">
			<div id="alineacion">
			</br>
 				<div><label>ID</label>
					</br>
					<input type="text" name="id_usuario"  value="<?php echo $id?>"readonly = "readonly">
 				</div>	
 			</br>
			<input type="checkbox" name="datos[]" value="usuario">Usuario</input>
			<br>
			<input type="checkbox" name="datos[]" value="nombre">Nombre</input>
			<br>
			<input type="checkbox" name="datos[]" value="password">Password</input>
			<br>
			<input type="checkbox" name="datos[]" value="licencia">Tipo de Licencia</input>
			<br>
			<input type="checkbox" name="datos[]" value="rol">Rol</input>
			</br>
			</br>
		</div>
			<input type="submit" value="Modificar" class="boton" />
			<input type="button" onclick="history.back()" name="volver atrás" value="Volver" class="boton"/>
	
		</form>
	</div>
</body>
</html>