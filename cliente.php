<?php 
require('conec.php');
    session_start();
//  if (!isset( $_SESSION["nombre"])){
    
//     header("location:login.html");
  
//   }
 $idsuc= $_SESSION["id_sucursal"];
 $rs = mysqli_query($con, "SELECT Suc.nempleados FROM sucursales Suc  where id_sucursal ='$idsuc'");
 $row = mysqli_fetch_array($rs);
 $empleados=$row['nempleados'];
 $consultacues = "SELECT * FROM cuestionario where  id_sucursal='$idsuc'";
 $resultadocues = mysqli_query($con,$consultacues);
 $totalcues = mysqli_num_rows($resultadocues);
 $totalFaltantes=$empleados-$totalcues;
 mysqli_close($con);
 


?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Promiss-Empresa</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/473290e8a6.js"></script>
</head>

<body>
<div id="wrapper">
<?php include 'MenuEmpresa.html'; ?>  
<div id="page-wrapper" class="gray-bg">  
<?php include 'Nav.html'; ?>  
<div class="wrapper wrapper-content">
<div class="row">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Total</span>
                                <h5>Encuestas Aplicadas</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $totalcues; ?></h1>
                                <div class="stat-percent font-bold text-success"> <i class="fas fa-tasks"></i></div>
                                <small>Total de encuestas</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Total</span>
                                <h5>Empleados</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $empleados; ?></h1>
                                <div class="stat-percent font-bold text-info"> <i class="fas fa-building"></i></div>
                                <small>Total de empleados</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">Total</span>
                                <h5>Empleados Faltantes</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $totalFaltantes; ?></h1>
                                <div class="stat-percent font-bold text-danger"> <i class="fas fa-user"></i></div>
                                <small>Total de empleados faltantes</small>
                            </div>
                        </div>
                    </div>
                   
        </div>
        <div class="row">
                    <div class="col-lg-12" >
                        <div class="ibox float-e-margins" >
                            <div class="ibox-title text-center" >
                             <h3 class="text-navy">Informe General</h3>
                               
                            </div>
                            <div class="ibox-content" >
              
                            <?php include 'informeGeneral.php'; ?>  
                            
                            </div>

                                  
                            </div>
                        </div>
                    </div>
                  <!-- final row informe -->
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title text-center">
                             <h3>Mapa de Riesgos General</h3>
                                
                            </div>
                            <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead  >
                                    <tr >
                                        <th colspan="2" class="text-center" style="background-color:#1c84c6;color:#fff" >Areas</th>
                                        
                                        <?php include 'mapaRiesgos.php'; ?>
                                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                 
                                     <tr>
                                     <td colspan="2" class="text-center" style="background-color:#d2d2d2;color:#000000"><b>Calificacion Final</b></td>
                                     
                                     </tr>
                                     <tr>
                                     <td colspan="2" class="text-center" style="background-color:#d2d2d2;color:#000000"><b>Categoria</b></td>
                                     
                                     </tr>
                                     <tr>
                                     <td colspan="2" class="text-center" style="background-color:#1c84c6;color:#fff"><b>Ambiente de trabajo</b></td>
                                     
                                     </tr>
                                     <tr>
                                     <td colspan="2" class="text-center" style="background-color:#1c84c6;color:#fff"><b>Factores propios de la actividad</b></td>
                                    
                                     </tr>
                                     <tr>
                                     <td colspan="2" class="text-center" style="background-color:#1c84c6;color:#fff"><b>Organización del tiempo de trabajo</b></td>
                                    
                                     </tr>
                                     <tr>
                                     <td colspan="2" class="text-center" style="background-color:#1c84c6;color:#fff"><b>Liderazgo y relaciones en el trabajo</b></td>
                                    
                                     </tr>
                                     <tr>
                                     <td colspan="2" class="text-center" style="background-color:#1c84c6;color:#fff"><b>Entorno organizacional</b></td>
                                    
                                     </tr>
                                     <tr>
                                     <td colspan="1" class="text-center" style="background-color:#d2d2d2;color:#000000"><b>Categoria</b></td>
                                     <td colspan="1" class="text-center" style="background-color:#d2d2d2;color:#000000"><b>Dominio</b></td>
                                     
                                     </tr>
                                     <tr>
                                     <td colspan="1" class="text-center" style="background-color:#64b5f6;color:#000000"><b>Ambiente de trabajo</b></td>
                                     <td colspan="1"   style="background-color:#90caf9;color:#000000"><small><b>Condiciones en el ambiente de trabajo</b></small></td>
                                     
                                     </tr>
                                     <tr>
                                     <td colspan="1" rowspan="2" class="text-center" style="background-color:#ef9a9a;color:#000000;vertical-align : middle;text-align:center"><b>Factores propios de la actividad</b></td>
                                     <td colspan="1"   style="background-color:#ffcdd2;color:#000000"><small><b>Cargas de trabajo </b></small></td>
                                     
                                     </tr>
                                     <tr>
                                     
                                     <td colspan="1"   style="background-color:#ffebee;color:#000000"><small><b>Falta de control sobre su trabajo  </b></small></td>
                                     
                                     </tr>
                                     <tr>
                                     <td colspan="1" rowspan="2" class="text-center" style="background-color:#8bc34a;color:#000000;vertical-align : middle;text-align:center"><b>Organización del tiempo de trabajo</b></td>
                                     <td colspan="1"   style="background-color:#c5e1a5;color:#000000"><small><b>Jornada de trabajo</b></small></td>
                                    
                                     </tr>
                                     <tr>
                                     
                                     <td colspan="1"   style="background-color:#dcedc8;color:#000000"><small><b>Interferencia en la relacion trabajo familia </b></small></td>
                                     
                                     </tr>
                                     <!-- final row -->

                                     <tr>
                                     <td colspan="1" rowspan="3" class="text-center" style="background-color:#ff9800;color:#000000;vertical-align : middle;text-align:center"><b>Liderazgo y relaciones en el trabajo</b></td>
                                     <td colspan="1"   style="background-color:#ffa726;color:#000000"><small><b>Liderazgo</b></small></td>
                                     
                                     </tr>
                                     <tr>
                                     
                                     <td colspan="1"   style="background-color:#ffcc80;color:#000000"><small><b>Relaciones de trabajo  </b></small></td>
                                   
                                     </tr>
                                     <tr>
                                     
                                     <td colspan="1"   style="background-color:#ffe0b2;color:#000000"><small><b>Violencia </b></small></td>
                                    
                                     </tr>
                                     <!-- final row -->
                                     <tr>
                                     <td colspan="1" rowspan="2" class="text-center" style="background-color:#9575cd;color:#000000;vertical-align : middle;text-align:center"><b>Entorno organizacional</b></td>
                                     <td colspan="1"   style="background-color:#b39ddb;color:#000000"><small><b>Reconocimiento del desempeño</b></small></td>
                                     
                                     </tr>
                                     <tr>
                                     
                                     <td colspan="1"   style="background-color:#d1c4e9;color:#000000"><small><b>Insuficiente sentido de pertenencia e inestabilidad </b></small></td>
                                     
                                     </tr>
                                     <!-- final row -->
                
                
                                    </tbody>
                                </table>
                            </div>
                            
                            <br>
                            <div class="row">
                            <div class="col-lg-6">
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                              <thead>
                              <tr>
                              <th colspan="2" class="text-center" style="background-color:#1c84c6;color:#fff" >Reporte general de pruebas aplicadas</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                              <td class="text-center" style="background-color:#d2d2d2;color:#000000"><b>Area<b></td>
                              <td class="text-center" style="background-color:#d2d2d2;color:#000000"><b>Total<b></td>
                              
                              </tr>
                               <?php include 'pruebasAreas.php'; ?>
                              <!-- <tr>
                              <td class="text-center"><b><b></td>
                              <td class="text-center" style="color:#000000"><b><b></td>
                              </tr> -->
                              <tr>
                              <td class="text-center"  style="background-color:#1c84c6;color:#fff"><b>Total<b></td>
                              <td class="text-center" style="background-color:#18a689;color:#fff"><b><b></td>
                              </tr>
                             
                              </tbody>
                            </table>
                            <div>
                           
                            </div>
                            </div>
                            <!-- final row div -->
                             </div>

                            </div>
                        </div>
                    </div>
                    <!-- final row mapa de riesgos -->


      
</div>

</div>
</div>
  <?php include 'footer.html'; ?>     

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

   
</body>


</html>
