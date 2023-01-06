	<?php
	

			//$mysqli = new mysqli("localhost", "root", "", "bdpersona");	
			$fecha_factura = $_GET['fecha_factura'];
			$fecha_gestor = $_GET['fecha_gestor'];
			$proveedor = $_GET['proveedor'];
			$descripcion = $_GET['descripcion'];
			$factura_nro= $_GET['factura_nro'];			
			$importe= $_GET['importe'];	
			$autorizado= $_GET['autorizado'];				
			$condicion= $_GET['condicion'];	
			$fecha_pago= $_GET['fecha_pago'];
			$obs= $_GET['obs'];

			//$sql = $mysqli->query("insert into tbcontactos (nombre, edad, direccion) values ('$nom', $edad, '$dir') ");		

			


                                        // Conectando, seleccionando la base de datos
											$link = mysql_connect('localhost', 'root', '1nf0m3d')
											    or die('No se pudo conectar: ' . mysql_error());
											//echo 'Connected successfully';
											mysql_select_db('novara') or die('No se pudo seleccionar la base de datos');

											// Realizar una consulta MySQL
											$query = "INSERT INTO facturas (fecha_factura, fecha_gestor,proveedor,factura_nro,importe,descripcion,obs) values ('$fecha_factura','$fecha_gestor','$proveedor','$factura_nro','$importe','$descripcion','$obs')";
											$result = mysql_query($query) or die('No se puedo registrar los datos nuevos: ' . mysql_error());	
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert("Factura Registrado!"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=facturas.php">
