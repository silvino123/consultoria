<?php 
require('conec.php');
    session_start();
//  if (!isset( $_SESSION["nombre"])){
    
//     header("location:login.html");
  
//   }
$mesActual= date("m");

$consulta = "SELECT * FROM sucursales";
$consultaUs = "SELECT * FROM usuarios";
$consultacues = "SELECT * FROM cuestionario where  MONTH(fecha)='$mesActual'";
$resultado = mysqli_query($con,$consulta);
$resultadoUs = mysqli_query($con,$consultaUs);
$resultadocues = mysqli_query($con,$consultacues);
// Obtenemos el número de filas
$totalsuc = mysqli_num_rows($resultado);
$totalus = mysqli_num_rows($resultadoUs);
$totalcues = mysqli_num_rows($resultadocues);
 mysqli_close($con);
 


?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Promiss-admin</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/473290e8a6.js"></script>
</head>

<body>
<div id="wrapper">
<?php include 'MenuAdmin.html'; ?>  
<div id="page-wrapper" class="gray-bg">  
<?php include 'Nav.html'; ?>  
<div class="wrapper wrapper-content">
<div class="row">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Mes</span>
                                <h5>Encuestas Realizadas</h5>
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
                                <h5>Sucursales Registradas</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $totalsuc; ?></h1>
                                <div class="stat-percent font-bold text-info"> <i class="fas fa-building"></i></div>
                                <small>Total de Sucursales</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Total</span>
                                <h5>Usuarios</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $totalus; ?></h1>
                                <div class="stat-percent font-bold text-navy"> <i class="fas fa-user"></i></div>
                                <small>Total de usuaraios</small>
                            </div>
                        </div>
                    </div>
                   
        </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Seguimiento de empresas encuestadas</h5>
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <!-- <button type="button" class="btn btn-xs btn-white active">Today</button>
                                        <button type="button" class="btn btn-xs btn-white">Monthly</button>
                                        <button type="button" class="btn btn-xs btn-white">Annual</button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                <div class="col-lg-12">
                                <table class="table table-hover no-margins">
                                            <thead>
                                            <tr style="background-color:#1c84c6;color:#fff">
                                                <th>Estatus</th>
                                                <th>Empresa</th>
                                                
                                                <th>Encuestas Aplicadas</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                        require('ContAdmin.php');
                                             ?>
                                            <!-- <tr>
                                                <td><span class="label label-warning">En proceso</span></td>
                                                <td>tornillos y mangueras</td>
                                                
                                                <td class="text-navy"> <i class="fas fa-level-up-alt"></i> 24 </td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-primary">Finalizado</span> </td>
                                                <td>sycsoft</td>
                                            
                                                <td class="text-navy"> <i class="fas fa-level-up-alt"></i> 66 </td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-warning">En proceso</span> </td>
                                                <td>luces de hermosillo</td>
                                               
                                                <td class="text-navy"> <i class="fas fa-level-up-alt"></i> 54 </td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-warning">En proceso</span></td>
                                                <td>plasticos del norte</td>
                                               
                                                <td class="text-navy"> <i class="fas fa-level-up-alt"></i> 12 </td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-primary">Finalizado</span> </td>
                                                <td>conduent</td>
                                               
                                                <td class="text-navy"> <i class="fas fa-level-up-alt"></i> 22</td>
                                            </tr> -->
                                           
                                            </tbody>
                                        </table>
                                </div>
                               
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
  <?php include 'footer.html'; ?>      
</div>

</div>
</div>
     

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
