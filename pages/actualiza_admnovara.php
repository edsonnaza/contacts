<?php

session_start();

	//$mysqli = new mysqli("localhost", "root", "", "bdpersona");	
	
 

	//$sql = $mysqli->query("update tbcontactos set nombre='$nombre', edad=$edad, direccion='$direccion' where id=$id");


	//$mysqli = new mysqli("localhost", "root", "", "bdpersona");	
			  $id=$_POST['id'];
		  	$nombres = $_POST['nombre'];
			$cargo = $_POST['cargo'];
			$celular = $_POST['celular'];
			$skype = $_POST['skype'];
		 	$correo= $_POST['correo'];						
			//$sql = $mysqli->query("insert into tbcontactos (nombre, edad, direccion) values ('$nom', $edad, '$dir') ");		




                                        // Conectando, seleccionando la base de datos
											$link = mysql_connect('localhost', 'root', '1nf0m3d')
											    or die('No se pudo conectar: ' . mysql_error());
											//echo 'Connected successfully';
											mysql_select_db('novara') or die('No se pudo seleccionar la base de datos');

											// Realizar una consulta MySQL
											$query = "UPDATE contacto_administrativo_novara SET Nombres='$nombres', Cargo='$cargo', Celular='$celular',Skype='$skype',Correo='$correo' WHERE id_administrativo='$id'";
											$result = mysql_query($query) or die('No fue posible actulizar los datos: ' . mysql_error());	
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Contacto Actualizado"); 
         
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=contactos_administrativo_novara.php">


