	<?php
	

			//$mysqli = new mysqli("localhost", "root", "", "bdpersona");	
			$nombres = $_GET['nombre'];
			$cargo = $_GET['cargo'];
			$celular = $_GET['celular'];
			$skype = $_GET['skype'];
			$correo= $_GET['correo'];						
			//$sql = $mysqli->query("insert into tbcontactos (nombre, edad, direccion) values ('$nom', $edad, '$dir') ");		




                                        // Conectando, seleccionando la base de datos
											$link = mysql_connect('localhost', 'root', '1nf0m3d')
											    or die('No se pudo conectar: ' . mysql_error());
											//echo 'Connected successfully';
											mysql_select_db('novara') or die('No se pudo seleccionar la base de datos');

											// Realizar una consulta MySQL
											$query = "INSERT INTO contacto_administrativo_novara (Nombres, Cargo,Celular,Skype,Correo) values ('$nombres','$cargo','$celular','$skype','$correo')";
											$result = mysql_query($query) or die('No se puedo registrar los datos nuevos: ' . mysql_error());	
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert("Contacto Registrado"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=contactos_administrativo_novara.php">
