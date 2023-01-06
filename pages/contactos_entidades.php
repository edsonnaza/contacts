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

    <title>Contactos - Entidades/Empresas</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">

    
</script>

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

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        
                        <li>
                            <a href="contactos_administrativo_novara.php"><i class="fa fa-laptop fa-fw"></i> Administrativo</a>
                        </li>
                        <li>
                            <a href="contactos_vendedores_novara.php"><i class="fa fa-bar-chart-o fa-fw"></i> Vendedores</a>
                        </li>
                         <li>
                            <a href="contactos_choferes_novara.php"><i class="fa fa-car fa-fw"></i> Choferes</a>
                        </li>
                         <li>
                            <a href="contactos_silo_cedrales.php"><i class="fa fa-database fa-fw"></i> Silo Cedrales</a>
                        </li>
                         <li>
                            <a href="contactos_nueva_esperanza.php"><i class="fa fa-home fa-fw"></i> Suc. Nueva Esperanza</a>
                        </li>
                        <li>
                            <a href="contactos_externo.php"><i class="fa fa-file fa-fw"></i>Contactos Empresas</a>
                        </li>
                            
                        <li>
                            <a href="facturas.php"><i class="fa fa-file fa-fw"></i> Facturas</a>
                        </li>
                         <li>
                            <a href="rrhh.php"><i class="fa fa-file fa-fw"></i>RRHH-Estadisticas</a>
                        </li>
                       
                          
                        
                         <li>
                            <a href="contactos_entidades.php"><i class="fa fa-file fa-fw"></i>Contactos Entidades</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

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
                    <h1 class="page-header">Contacto de Entidades - Dpto. Créditos y Cobranzas</h1>  
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Contactos Empresas
                            <button type="button" data-toggle="modal" data-target="#nuevoUsu" class="btn btn-success">Registrar Nuevo Contacto</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover small" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Entidad/Empresa</th>
                                        <th>Referencia/Encargado</th>
                                        <th>Telefono</th>
                                        <th>Ciudad</th>
                                        <th>Email</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                       // $nombreConexion = mysql_connect($localhost , $serverdatos , $s3rv3rd4t0s);

                                        //$result = mysql_query($nombreConexion, "select * from contactos_administrativo_novara order by Nombres");

                                       

                                        //mysql_select_db($link, "novara");

                                       //$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

                                       



                                        // Conectando, seleccionando la base de datos
											$link = mysql_connect('localhost', 'root', '1nf0m3d')
											    or die('No se pudo conectar: ' . mysql_error());
											//echo 'Connected successfully';
											mysql_select_db('novara') or die('No se pudo seleccionar la base de datos');

											// Realizar una consulta MySQL
											$query = 'SELECT *,city.Name as ciudad FROM contactos_entidades,city where contactos_entidades.id_ciudad=city.ID';
											$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

											// Imprimir los resultados en HTML
                                                $n=0;
											while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
                                                $n=$n+1;
													
													echo '<tr class="odd gradeX">';
                                       				echo "<td>".$n. "</td>";
                                        			echo "<td>". ($line['Empresa'])."</td>";
                                        			echo "<td>".($line['Contacto'])."</td>" ;
                                        			 echo "<td> <a href='tel:+".$line['Telefono'].">'</a>".$line['Telefono']."</td>";
                                        			echo "<td>".$line['ciudad']."</td>" ;
                                        			echo "<td>".$line['Correo']."</td>" ;

                                        			  echo "<td><a data-toggle='modal' data-target='#editUsu' data-id='" .$line['idcontactos_entidades'] ."' data-empresa='" . ($line['Empresa']) ."' data-referencia='" .$line['Contacto'] ."' data-telefono='" .$line['Telefono'] ."' data-idciudad='" .$line['id_ciudad'] ."' data-correo='" .$line['Correo'] ."' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-pencil'></span> Editar</a><a data-toggle='modal' data-target='#eliminar' data-id='" .$line['idcontactos_entidades'] ."' data-empresa='" .($line['Empresa']) ."' data-referencia='" .$line['Contacto'] ."' data-telefono='" .$line['Telefono'] ."' data-idciudad='" .$line['id_ciudad'] ."' data-correo='" .$line['Correo'] ."' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash'></span> Eliminar</a></td> ";

                                        			 




                                        			 

                                        			    	
				
                                        			//echo "<td><button type='button' data-toggle='modal' data-target='#editUsu' class='btn btn-outline btn-primary btn-sm'>Editar</button>                                         				<button type='button' data-toggle='modal' data-target='#nuevoUsu' class='btn btn-outline btn-danger btn-sm'>Eliminar</button>                                         			</td>";

                                        			 
                                    				echo "</tr>";

												 }

                                    ?>
                                   
                                  
                               
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

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
 