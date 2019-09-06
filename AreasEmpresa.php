<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Promiss-Areas</title>

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
                    <div class="col-lg-10" >
                        <div class="ibox float-e-margins" >
                            <div class="ibox-title text-center" >
                             <h3 class="text-navy">Reporte por Areas</h3>
                               
                            </div>
                            <div class="ibox-content" >
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover ">
                              <thead>
                              <tr>
                              <th colspan="3" class="text-center" style="background-color:#1c84c6;color:#fff" >Reporte de resultados por areas</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                              <td colspan="2" class="text-center" style="background-color:#d2d2d2;color:#000000"><b>Area<b></td>
                              <td colspan="1" class="text-center" style="background-color:#d2d2d2;color:#000000"><b>Resultados<b></td>
                              
                              </tr>
                              <?php include 'ResultadosAreas.php'; ?>
                             
                              
                              </tbody>
                            </table>
                            <div>
                           
                           
                            </div>
                           

                                  
                            </div>
                        </div>
                    </div>
                  <!-- final row informe -->
                   


      
</div>
<?php include 'footer.html'; ?>
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
