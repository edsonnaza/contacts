<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NOVARA SA</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="index.php">NOVARA SA</a>
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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerra Session</a>
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
                            <a href="contactos_entidades.php"><i class="fa fa-file fa-fw"></i>Contactos Entidades</a>
                        </li>
                          


                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

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

                                           


                                             $query = 'SELECT * FROM contacto_administrativo_novara';
                                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                                            // Imprimir los resultados en HTML
                                            $cantidad_silo_cedrales=0;

                                            while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {

                                                 $cantidad_administrativo_novara=$cantidad_administrativo_novara+1;

                                                    /*
                                                    echo '<tr class="odd gradeX">';
                                                    echo "<td>".$line['id_silocedrales']. "</td>";
                                                    echo "<td>".utf8_encode($line['nombres'])."</td>";
                                                    echo "<td>".utf8_encode($line['cargo'])."</td>" ;
                                                     echo "<td> <a href='tel:+".$line['celular'].">'</a>".$line['celular']."</td>";
                                                    echo "<td>".$line['skype']."</td>" ;
                                                    echo "<td>".$line['correo']."</td>" ;
                                                     
                                                    echo "</tr>";*/

                                                 }



                                                  $query = 'SELECT * FROM contacto_silo_cedrales';
                                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                                            // Imprimir los resultados en HTML
                                            $cantidad_silo_cedrales=0;

                                            while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {

                                                 $cantidad_silo_cedrales=$cantidad_silo_cedrales+1;

                                                    /*
                                                    echo '<tr class="odd gradeX">';
                                                    echo "<td>".$line['id_silocedrales']. "</td>";
                                                    echo "<td>".utf8_encode($line['nombres'])."</td>";
                                                    echo "<td>".utf8_encode($line['cargo'])."</td>" ;
                                                     echo "<td> <a href='tel:+".$line['celular'].">'</a>".$line['celular']."</td>";
                                                    echo "<td>".$line['skype']."</td>" ;
                                                    echo "<td>".$line['correo']."</td>" ;
                                                     
                                                    echo "</tr>";*/

                                                 }



                                                  $query = 'SELECT * FROM contacto_choferes_novara';
                                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                                            // Imprimir los resultados en HTML
                                            $cantidad_choferes_novara=0;

                                            while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {

                                                 $cantidad_choferes_novara=$cantidad_choferes_novara+1;

                                                    /*
                                                    echo '<tr class="odd gradeX">';
                                                    echo "<td>".$line['id_silocedrales']. "</td>";
                                                    echo "<td>".utf8_encode($line['nombres'])."</td>";
                                                    echo "<td>".utf8_encode($line['cargo'])."</td>" ;
                                                     echo "<td> <a href='tel:+".$line['celular'].">'</a>".$line['celular']."</td>";
                                                    echo "<td>".$line['skype']."</td>" ;
                                                    echo "<td>".$line['correo']."</td>" ;
                                                     
                                                    echo "</tr>";*/

                                                 }


                                                  $query = 'SELECT * FROM contacto_nueva_esperanza';
                                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                                            // Imprimir los resultados en HTML
                                            $cantidad_nueva_esperanza=0;

                                            while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {

                                                 $cantidad_nueva_esperanza=$cantidad_nueva_esperanza+1;

                                                    /*
                                                    echo '<tr class="odd gradeX">';
                                                    echo "<td>".$line['id_silocedrales']. "</td>";
                                                    echo "<td>".utf8_encode($line['nombres'])."</td>";
                                                    echo "<td>".utf8_encode($line['cargo'])."</td>" ;
                                                     echo "<td> <a href='tel:+".$line['celular'].">'</a>".$line['celular']."</td>";
                                                    echo "<td>".$line['skype']."</td>" ;
                                                    echo "<td>".$line['correo']."</td>" ;
                                                     
                                                    echo "</tr>";*/

                                                 }


                                            // Realizar una consulta MySQL
                                            $query = 'SELECT * FROM contactos_externo';
                                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                                            // Imprimir los resultados en HTML
                                            $cantidad_contactos_externos=0;

                                            while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {

                                                 $cantidad_contactos_externos=$cantidad_contactos_externos+1;

                                                    /*
                                                    echo '<tr class="odd gradeX">';
                                                    echo "<td>".$line['id_silocedrales']. "</td>";
                                                    echo "<td>".utf8_encode($line['nombres'])."</td>";
                                                    echo "<td>".utf8_encode($line['cargo'])."</td>" ;
                                                     echo "<td> <a href='tel:+".$line['celular'].">'</a>".$line['celular']."</td>";
                                                    echo "<td>".$line['skype']."</td>" ;
                                                    echo "<td>".$line['correo']."</td>" ;
                                                     
                                                    echo "</tr>";*/

                                                 }




                                            // Realizar una consulta MySQL
                                            $query = 'SELECT * FROM contactos_entidades';
                                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                                            // Imprimir los resultados en HTML
                                            $cantidad_contactos_entidades=0;

                                            while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {

                                                 $cantidad_contactos_entidades=$cantidad_contactos_entidades+1;

                                                    /*
                                                    echo '<tr class="odd gradeX">';
                                                    echo "<td>".$line['id_silocedrales']. "</td>";
                                                    echo "<td>".utf8_encode($line['nombres'])."</td>";
                                                    echo "<td>".utf8_encode($line['cargo'])."</td>" ;
                                                     echo "<td> <a href='tel:+".$line['celular'].">'</a>".$line['celular']."</td>";
                                                    echo "<td>".$line['skype']."</td>" ;
                                                    echo "<td>".$line['correo']."</td>" ;
                                                     
                                                    echo "</tr>";*/

                                                 }

                                                     // Realizar una consulta MySQL
                                            $query = 'SELECT * FROM procesos_macro';
                                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                                            // Imprimir los resultados en HTML
                                            $cantidad_procesos_macros=0;

                                            while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {

                                                 $cantidad_procesos_macros=$cantidad_procesos_macros+1;

                                                    /*
                                                    echo '<tr class="odd gradeX">';
                                                    echo "<td>".$line['id_silocedrales']. "</td>";
                                                    echo "<td>".utf8_encode($line['nombres'])."</td>";
                                                    echo "<td>".utf8_encode($line['cargo'])."</td>" ;
                                                     echo "<td> <a href='tel:+".$line['celular'].">'</a>".$line['celular']."</td>";
                                                    echo "<td>".$line['skype']."</td>" ;
                                                    echo "<td>".$line['correo']."</td>" ;
                                                     
                                                    echo "</tr>";*/

                                                 }




                                    ?>
                                   

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Panel v1.0</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-laptop fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?echo $cantidad_administrativo_novara?></div>
                                    <div>Administrativo</div>
                                </div>
                            </div>
                        </div>
                        <a href="contactos_administrativo_novara.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Contactos</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bar-chart-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?echo $cantidad_vendedores_novara?></div>
                                    <div>Vendedores</div>
                                </div>
                            </div>
                        </div>
                        <a href="contactos_vendedores_novara.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Contactos</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-car fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?echo $cantidad_choferes_novara?></div>
                                    <div>Choferes</div>
                                </div>
                            </div>
                        </div>
                        <a href="contactos_choferes_novara.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Contactos</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-database fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?echo $cantidad_silo_cedrales;?></div>
                                    <div>Silo Cedrales</div>
                                </div>
                            </div>
                        </div>
                        <a href="contactos_silo_cedrales.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Contactos</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-home fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?echo $cantidad_nueva_esperanza?></div>
                                    <div>Suc. Nueva Esperanza</div>
                                </div>
                            </div>
                        </div>
                        <a href="contactos_nueva_esperanza.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Contactos</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?echo $cantidad_contactos_externos?></div>
                                    <div>Contactos Externos</div>
                                </div>
                            </div>
                        </div>
                        <a href="contactos_externo.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Contactos</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bank fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?echo $cantidad_contactos_entidades?></div>
                                    <div>Contactos Entidades</div>
                                </div>
                            </div>
                        </div>
                        <a href="contactos_entidades.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Contactos</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                     <div style="display: none;" class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?echo $cantidad_procesos_macros?></div>
                                    <div>Manuales de Procedimientos</div>
                                </div>
                            </div>
                        </div>
                        <a href="procesos_macro.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Manuales</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                 
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                    
                        <!-- /.panel-heading -->
                        
                        <!-- /.panel-body -->
                         
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
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

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
