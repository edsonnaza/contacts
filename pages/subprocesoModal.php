
<?php 
      $idproceso=$_GET['idproceso'];
      $idsub_proceso=$_GET['idsub_proceso'];


 ?>




                                    <select id="idsub_procesoModal" name="idsub_procesoModal" class="form-control" required="true"  >
                                        <?php 

                                        

                                            // Conectando, seleccionando la base de datos
                                            $link = mysql_connect('localhost', 'root', '1nf0m3d')
                                                or die('No se pudo conectar: ' . mysql_error());
                                            //echo 'Connected successfully';
                                            mysql_select_db('novara') or die('No se pudo seleccionar la base de datos');

                                            // Realizar una consulta MySQL
                                            $query = 'SELECT * FROM sub_procesos WHERE id_proceso='.$idproceso.' and activo="SI" ';
                                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                                            // Imprimir los resultados en HTML

                                            while ($line1 = mysql_fetch_array($result, MYSQL_ASSOC)) {
                                                 ?>

                                            <option class="form-control" <?php if($line1['id']==$idsub_proceso) echo 'selected'; ?>  value="<?php echo $line1['id'] ?>"> <?php echo utf8_encode($line1['subproc_nombre']); ?> </option>;
                                                                                   
                                            <?php } ?>

                                        
                                        </select>