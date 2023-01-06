<?php

session_start();

    //$mysqli = new mysqli("localhost", "root", "", "bdpersona");   
    
 

    //$sql = $mysqli->query("update tbcontactos set nombre='$nombre', edad=$edad, direccion='$direccion' where id=$id");


    //$mysqli = new mysqli("localhost", "root", "", "bdpersona");   
            
    $accion=$_POST['accion'];


              $id=$_POST['id'];
            $empresa = $_POST['empresa'];
            $referencia = $_POST['referencia'];
            $telefono = $_POST['telefono'];
             $id_ciudad = $_POST['id_ciudad'];
            $correo= $_POST['correo'];                      
            //$sql = $mysqli->query("insert into tbcontactos (nombre, edad, direccion) values ('$nom', $edad, '$dir') ");       





if($accion=='modificar'){ 



                                        // Conectando, seleccionando la base de datos
                                            $link = mysql_connect('localhost', 'root', '1nf0m3d')
                                                or die('No se pudo conectar: ' . mysql_error());
                                            //echo 'Connected successfully';
                                            mysql_select_db('novara') or die('No se pudo seleccionar la base de datos');

                                            // Realizar una consulta MySQL
                                            $query = "UPDATE contactos_entidades SET Empresa='$empresa', Contacto='$referencia', Telefono='$telefono',id_ciudad='$id_ciudad',Correo='$correo' WHERE idcontactos_entidades='$id'";
                                            $result = mysql_query($query) or die('No fue posible actualizar los datos: ' . mysql_error());   


                                            if($result==true){

                                                   // echo '<SCRIPT LANGUAGE="javascript">alert("Contacto Actualizado")</SCRIPT>'  ;

                                            }
                        }


                        if($accion=='Guardar'){ 



                                        // Conectando, seleccionando la base de datos
                                            $link = mysql_connect('localhost', 'root', '1nf0m3d')
                                                or die('No se pudo conectar: ' . mysql_error());
                                            //echo 'Connected successfully';
                                            mysql_select_db('novara') or die('No se pudo seleccionar la base de datos');

                                            // Realizar una consulta MySQL
                                            $query = "INSERT INTO contactos_entidades (Empresa,Contacto,Telefono,id_ciudad,Correo) VALUES ('$empresa','$referencia','$telefono','$id_ciudad','$correo')";
                                            $result = mysql_query($query) or die('No fue posible actulizar los datos: ' . mysql_error());   


                                            if($result==true){

                                                  //  echo '<SCRIPT LANGUAGE="javascript">alert("Contacto Agregado con exito!")</SCRIPT>'  ;

                                            }
                        }


                         if($accion=='Eliminar'){ 



                                        // Conectando, seleccionando la base de datos
                                            $link = mysql_connect('localhost', 'root', '1nf0m3d')
                                                or die('No se pudo conectar: ' . mysql_error());
                                            //echo 'Connected successfully';
                                            mysql_select_db('novara') or die('No se pudo seleccionar la base de datos');

                                            // Realizar una consulta MySQL
                                            $query = "DELETE FROM contactos_entidades WHERE idcontactos_entidades='$id'";
                                            $result = mysql_query($query) or die('No fue posible actulizar los datos: ' . mysql_error());   


                                            if($result==true){

                                                  //  echo '<SCRIPT LANGUAGE="javascript">alert("Contacto Agregado con exito!")</SCRIPT>'  ;

                                            }
                        }
?>  

     


<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NOVARA -  MACRO PROCESOS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">

    
</script>

<style type="text/css">
/*
   Vertical text
   by @kizmarh
*/
.vertical-text {
    display: inline-block;
    overflow: hidden;
    width: 3.5em;
    
}
.vertical-text__inner {
    display: inline-block;
    white-space: nowrap;
    line-height: 1.5;
    transform: translate(0,100%) rotate(-90deg);
    transform-origin: 0 0;
}
/* This element stretches the parent to be square
   by using the mechanics of vertical margins  */
.vertical-text__inner:after {
    content: "";
    display: block;
    margin: -1.5em 0 100%;


    table th {
  text-align: center;
}

}
</style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Novara SA</a>


     

            </div>
            <!-- /.navbar-header -->
            	  <ul class="nav navbar-nav navbar-right">
         <li>
                            <a href="../index.php"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li>
                            <a href="../index.php"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        
                        <li>
                            <a href="../contactos_administrativo_novara.php"><i class="fa fa-laptop fa-fw"></i> Administrativo</a>
                        </li>
                        <li>
                            <a href="../contactos_vendedores_novara.php"><i class="fa fa-bar-chart-o fa-fw"></i> Vendedores</a>
                        </li>
                         <li>
                            <a href="../contactos_choferes_novara.php"><i class="fa fa-car fa-fw"></i> Choferes</a>
                        </li>
                         <li>
                            <a href="../contactos_silo_cedrales.php"><i class="fa fa-database fa-fw"></i> Silo Cedrales</a>
                        </li>
                         <li>
                            <a href="../contactos_nueva_esperanza.php"><i class="fa fa-home fa-fw"></i> Suc. Nueva Esperanza</a>
                        </li>
                        <li>
                            <a href="../contactos_externo.php"><i class="fa fa-file fa-fw"></i>Contactos Empresas</a>
                        </li>
                            
                        <li>
                            <a href="../facturas.php"><i class="fa fa-file fa-fw"></i> Facturas</a>
                        </li>
                         <li>
                            <a href="../rrhh.php"><i class="fa fa-file fa-fw"></i>RRHH-Estadisticas</a>
                        </li>
                       
                          
                        
                         <li>
                            <a href="../contactos_entidades.php"><i class="fa fa-file fa-fw"></i>Contactos Entidades</a>
                        </li>
                         <li>
                            <a href="../procesos_macro.php"><i class="fa fa-file fa-fw"></i>Manuales Procedimientos</a>
                        </li>
          </ul>
        </li>
      </ul>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           
            <!-- /.navbar-static-side -->
        </nav>

        <div id="panel panel-default">

        	<div class="panel-body">

        		<?php 

        		if($result==true){

        			?>
                            
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Proceso Realizado con exito!.
                            </div>
                      <?php }?>
                            
                             
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">COBRANZAS <small>- Flujo de proceso, actividades y responsables</small></h1>   
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Nuevo Contacto</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="contactos_entidades.php" method="POST">                              
                                    
                                    <input  id="id" name="id" type="hidden" ></input>           
                                    <div class="form-group">
                                        <label for="nombre">MARCRO PROCESO:</label>
                                        <input class="form-control" id="empresa" name="empresa" type="text" ></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="cargo">PROCESO:</label>
                                        <input class="form-control" id="referencia" name="referencia" type="text" ></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="celular">SUB-PROCESO:</label>
                                        <input class="form-control" id="telefono" name="telefono" type="text" ></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="skype">TIPO DE DOCUMENTO:</label>
                                    


                                       <select id="id_ciudad" name="id_ciudad" class="form-control" required="true"  >
                                        <?php 

                                        

                                            // Conectando, seleccionando la base de datos
                                            $link = mysql_connect('localhost', 'root', '1nf0m3d')
                                                or die('No se pudo conectar: ' . mysql_error());
                                            //echo 'Connected successfully';
                                            mysql_select_db('novara') or die('No se pudo seleccionar la base de datos');

                                            // Realizar una consulta MySQL
                                            $query = 'SELECT * FROM city where CountryCode="PRY"';
                                           

                                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                                            // Imprimir los resultados en HTML

                                            while ($line1 = mysql_fetch_array($result, MYSQL_ASSOC)) {

                                                    echo '<option class="form-control" value='.$line1['ID'].'>'.utf8_encode($line1['Name']).' </option>';
                                            }

                                        ?>
                                        </select>
                                    </div>



                                    <div class="form-group">
                                        <label for="correo">Email:</label>
                                        <input class="form-control" id="correo" name="correo" type="text" ></input>
                                    </div>

                                    <input type="submit" name="accion" value="Guardar" class="btn btn-success">                           
                       </form>
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 


        <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Contacto</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="contactos_entidades.php" method="POST">                       		
                       		        
                       		        <input  id="id" name="id" type="hidden" ></input>   		
		                       		<div class="form-group">
		                       			<label for="nombre">Entidad/Empresa:</label>
		                       			<input class="form-control" id="empresa" name="empresa" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="cargo">Referencia/Encargado:</label>
		                       			<input class="form-control" id="referencia" name="referencia" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="celular">Telefono:</label>
		                       			<input class="form-control" id="telefono" name="telefono" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="skype">Ciudad:</label>
		                       		


                                       <select id="id_ciudad" name="id_ciudad" class="form-control" required="true"  >
                                        <?php 

                                        

                                            // Conectando, seleccionando la base de datos
                                            $link = mysql_connect('localhost', 'root', '1nf0m3d')
                                                or die('No se pudo conectar: ' . mysql_error());
                                            //echo 'Connected successfully';
                                            mysql_select_db('novara') or die('No se pudo seleccionar la base de datos');

                                            // Realizar una consulta MySQL
                                            $query = 'SELECT * FROM city where CountryCode="PRY"';
                                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                                            // Imprimir los resultados en HTML

                                            while ($line1 = mysql_fetch_array($result, MYSQL_ASSOC)) {

                                                    echo '<option class="form-control" value='.$line1['ID'].'>'.utf8_encode($line1['Name']).' </option>';
                                            }

                                        ?>
                                        </select>
		                       		</div>



		                       		<div class="form-group">
		                       			<label for="correo">Email:</label>
		                       			<input class="form-control" id="correo" name="correo" type="text" ></input>
		                       		</div>

									<input type="submit" name="accion" value="modificar" class="btn btn-success">							
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 


   <div class="modal" id="eliminar" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Eliminar Contacto?</h4>
                    </div>

                    
                    <div class="modal-body">  
                    <div class="panel-body">

        		 

        		 

        		
                            
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               Seguro desea eliminar el registro?
                            </div>
                  
                            
                             
            </div> 

                       <form action="contactos_entidades.php" method="POST">                       		
                       		        
                       		        <input  id="id" name="id" type="hidden" ></input>   		
		                       		<div class="form-group">
		                       			<label for="nombre">Entidad/Empresa:</label>
		                       			<input class="form-control" id="empresa" name="empresa" type="text" ></input>
		                       		</div>
		                       		 

									<input type="submit" name="accion" value="Eliminar" class="btn btn-danger">							
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div> 
            <!-- /.row -->
            <div class="table-responsive">
                <div class="col-lg-12">
                   
                        <!-- /.panel-heading -->
          
            <table   class="table table-striped table-bordered table-hover small table-responsive" id="dataTables-example">
                         	 
			<colgroup>
				<col style="width: 3%"/>
				<col style="width: 3%"/>
				<col style="width: 3%"/>
				<col style="width: 3%"/>
				<col style="width: 3%"/>
				<col style="width: 3%"/>
				<col style="width: 3%"/>
				<col style="width: 3%"/>
				<col style="width: 3%"/>
                <col style="width: 3%"/>
                   


			
			</colgroup>
			<thead>
				
                <tr>
                     <th rowspan="2" style="text-align: center; width: 2%; ">#</th> 
                    <th rowspan="2" style="text-align: center; width: 2%; ">PROCESO</th> 
					<th rowspan="8" style="text-align: center; width: 30%; " valign="center"> ACTIVIDAD</th>
                    
					<th colspan="8" style="text-align: center;">RESPONSABLE</th>

				</tr>


				<tr>


					<th>Cobranza  <em class="label label-success" >  (Nathalia)</em></th>
					<th>Vendedor</th>
					<th>Créditos <br><em class="label label-success">  (Enrique)</em></th>
					<th>Comité de Crédito</th>
					<th>Asist. Adm. <em class="label label-success"> (Ysidro)</em></th>
					<th>Garantías <br><em class="label label-success"> (Nélida)</em></th>
					<th>Enc. Adm./Financ. <em class="label label-success"> (Tiago, Luis G.)</em></th>
					<th>Tesoreria  <em class="label label-success">(Orlando)</em></th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td colspan="11">Fecha Vigencia: NOV-2019.</td>
				</tr>
			</tfoot>
			<tbody>

				<tr>

                  <td>1 </td>
                  <td rowspan="11"  style="vertical-align:middle;" style="vertical-align:baseline;"  >   <div class="vertical-text"><div class="vertical-text__inner" style="font-size: 35px; text-align: right; ">C O B R A N Z A </div></div> </td>

					<th style="text-align: left;"><p>Verifica Posicion de Cobranza vencidas y a vencer
				  * Extracto de cuentas a Pagar y Recibir
				  * Acompañamiento de Zafra.
				</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i></td>
					<td>  </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>2 </td>
                   
					<th><p>Pasa posición al Vendedor,  solicitando condición de cumplimiento de Cobranza de la deuda vencida y a vencer.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i></td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>3 </td>
                     
					<th><p>Hace seguimiento de posicion de la Cobranza.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i></td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i></td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td> 4</td>
                     
					<th><p>Informa situacion de Cobranza vencida y a vencer al comité de Creditos de forma semanal.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i></td>
					<td style="text-align: center;"> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>5 </td>
                     
					<th><p>Recepciona pago de Productor/Cliente Efectivo y/o Cheque al dia.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i></td>
					<td style="text-align: center;"> <span class="pull-center"><i class="fa fa-check"></i></td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>6 </td>
                    
					<th><p>Emite Recibo Provisorio de cobranza.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i></td>
					<td style="text-align: center;"> <span class="pull-center"><i class="fa fa-check"></i></td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>7 </td>
                     
					<th><p>Entrega Efectivo y/o Cheque a acobrar a Tesoreria  y recibo Provisorio a Adm. para la compensacion.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i></td>
					<td style="text-align: center;">  </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>8 </td>
                    
					<th><p>Recepciona Dinero Efectivo y/o Cheque a cobrar.</p></th>
					<td style="text-align: center;"></td>
					<td style="text-align: center;">  </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td style="text-align: center;"> <span class="pull-center"><i class="fa fa-check"></i></td>
				</tr>
				<tr>
                    <td>9 </td>
                    
					<th><p>Deposita Dinero y/o Cheque a cobrar.</p></th>
					<td style="text-align: center;"></td>
					<td style="text-align: center;">  </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td style="text-align: center;"> <span class="pull-center"><i class="fa fa-check"></i></td>
				</tr>
				<tr>
                    <td>10 </td>
                   
					<th><p>Compensa posicion de Productor/Cliente.</p></th>
					<td style="text-align: center;"></td>
					<td style="text-align: center;">  </td>
					<td> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>11 </td>
                    
					<th><p>Confirmado los Fondos, registra la cobranza y Emite recibo de dinero de cobranza efectiva.</p></th>
					<td style="text-align: center;"></td>
					<td style="text-align: center;">  </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
				</tr>
				<tr>
                    <td>12 </td>
                     <td rowspan="21" style="vertical-align:middle;" style="vertical-align:baseline;" > <div class="vertical-text"><div class="vertical-text__inner" style="font-size: 35px;  "> R E N E G O C I A C I O N   &nbsp;&nbsp;   C O B R A N Z A </div></div> </td>
					<th><p>Presenta planteamiento de re-negociacion de Deuda.</p></th>
					<td style="text-align: center;"></td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>13 </td>
                     
					<th><p>Analiza antecedentes del Productor/Cliente según Operaciones anteriores y cumplimiento de los minimos para dar inicio a la solicitud de refinanciacion ante el comite de Creditos.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>14 </td>
                     
					<th><p>Consulta referencias Comerciales e informconf.</p></th>
					<td> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>15 </td>
                   
					<th><p>Plantea al Comité refinanciacion y nuevas garantias.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>16 </td>
                    
					<th><p>Hace el seguimiento de la Aprobacion del Comité.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>17 </td>
                     
					<th><p  > <div class="alert alert-warning alert-dismissable">    Aprueba o Rechaza las condiciones de refinanciacion de deuda y garantias presentadas - 3 aprobadores. </div></p></th>
					<td> </td>
					<td> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>18 </td> 
                   
					<th><p>Informa del estatus al vendedor para proceder a la formalizacion del nuevo acuerdo de renegociacion.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					 
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
                    <td> </td>
				</tr>
				<tr>
                    <td>19 </td>  
                     
					<th><p>Informa a Productor/Cliente sobre el nuevo acuerdo y garantias requeridas.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>

				<tr>
                    <td>20 </td>  
                    
					<th><p>Formaliza Nuevo Acuerdo y firman la CONSTANCIA DE REFINANCIACIÓN entre ambas partes.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>21 </td>  
                    
					<th><p>Recepciona del Productor/Cliente  Cheque diferido y/o garantias requeridas.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>22 </td>  
                     
					<th><p>Emite Recibo Provisiorio.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
                    <td>23 </td>  
                    
					<th><p>Reclasifica Posicion del Productor/Cliente a Renegociacion a Cobrar en Versat en funcion al acuerdo y nuevo vencimiento y solicita la factura por Interes.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>

				<tr>
                    <td>24 </td>  
                     
					<th><p>Emite Factura por Intereses Recalculados.</p></th>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>

				<tr>
                    <td>25 </td>  
                     
					<th><p>Recepciona Efectivo y Cheque Diferido.</p></th>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
				</tr>

					<tr>
                    <td>26 </td>      
                    
					<th><p>Recepciona Pagares y/o otras Garantias.</p></th>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
				</tr>

				<tr>
                    <td>27 </td>  
                    
					<th><p>Registra Cheque Diferido.</p></th>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
				</tr>
				<tr>
                    <td>28 </td>  
                    
					<th><p>Llegado el Vencimiento Deposita Cheque.</p></th>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
				</tr>
				<tr>
                    <td>29 </td>  
                    
					<th><p>Emite Recibo de dinero de cobranza efectiva.</p></th>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
				</tr>
				<tr>
                    <td>30 </td>  
                    
					<th><p>Entrega Recibo de dinero de cobranza efectiva y Pagare al Productor/Cliente.</p></th>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td style="text-align: center;"><span class="pull-center"><i class="fa fa-check"></i> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>

				</tr>


             </table>
                            <!-- /.table-responsive -->
                            
                     
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

 
<script>	


		  $('#editUsu').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient0 = button.data('id')
		  var recipient1 = button.data('empresa')
		  var recipient2 = button.data('referencia')
		  var recipient3 = button.data('telefono')
		  var recipient4 = button.data('idciudad')
		  var recipient5 = button.data('correo')
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
		  modal.find('.modal-body #empresa').val(recipient1)
		  modal.find('.modal-body #referencia').val(recipient2)
		  modal.find('.modal-body #telefono').val(recipient3)		 
		   modal.find('.modal-body #id_ciudad').val(recipient4)	
		    modal.find('.modal-body #correo').val(recipient5)	

            if(recipient5==modal.find('.modal-body #id_ciudad').val())
            modal.find('.modal-body #id_ciudad').select
		});
		
	</script>

	<script>	


		  $('#eliminar').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient0 = button.data('id')
		  var recipient1 = button.data('empresa')
		//  var recipient2 = button.data('referencia')
		 // var recipient3 = button.data('telefono')
		 // var recipient4 = button.data('idciudad')
		 // var recipient5 = button.data('correo')
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
		  modal.find('.modal-body #empresa').val(recipient1)
		  //modal.find('.modal-body #referencia').val(recipient2)
		  //modal.find('.modal-body #telefono').val(recipient3)		 
		   //modal.find('.modal-body #id_ciudad').val(recipient4)	
		   // modal.find('.modal-body #correo').val(recipient5)	

          // if(recipient5==modal.find('.modal-body #id_ciudad').val())
          //  modal.find('.modal-body #id_ciudad').select
		});
		
	</script>
</body>

</html>
 