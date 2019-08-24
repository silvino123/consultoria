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
                                <h1 class="no-margins">40 886,200</h1>
                                <div class="stat-percent font-bold text-success"> <i class="fas fa-tasks"></i></div>
                                <small>Total de encuestas</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Total</span>
                                <h5>Empleados Encuestados</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">275,800</h1>
                                <div class="stat-percent font-bold text-info"> <i class="fas fa-building"></i></div>
                                <small>Total de empleados encuestados</small>
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
                                <h1 class="no-margins">106,120</h1>
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
                            <?php include 'mapaRiesgos.php'; ?>
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
                              <tr>
                              <td class="text-center"><b>Area 1<b></td>
                              <td class="text-center" style="color:#000000"><b>53<b></td>
                              </tr>
                              <tr>
                              <td class="text-center"><b>Area 2<b></td>
                              <td class="text-center" style="color:#000000"><b>30<b></td>
                              </tr>
                              <tr>
                              <td class="text-center"><b>Area 3<b></td>
                              <td class="text-center" style="color:#000000"><b>15<b></td>
                              </tr>
                              <tr>
                              <td class="text-center"><b>Area 4<b></td>
                              <td class="text-center" style="color:#000000"><b>20<b></td>
                              </tr>
                              <tr>
                              <td class="text-center"  style="background-color:#1c84c6;color:#fff"><b>Total<b></td>
                              <td class="text-center" style="background-color:#18a689;color:#fff"><b>160<b></td>
                              </tr>
                              <tr>
                              
                              </tr>
                              <tr>
                              
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
