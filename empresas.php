<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Encuestas</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/select2/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
    <script src="https://kit.fontawesome.com/473290e8a6.js"></script>
</head>

<body>
<div id="wrapper">
<?php include 'MenuAdmin.html'; ?>  
<div id="page-wrapper" class="gray-bg">  
<?php include 'Nav.html'; ?>  
<div class="wrapper wrapper-content">
<div class="row">

     <div class="col-md-3">
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">Agregar Empresa</button>
</div>
     </div>

<br>
<br>
<div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h3>Empresas Registradas</h3>

                            
                        </div>
                        <div class="ibox-content">
                        <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Buscar...">

                            <table class="footable table table-stripped responsive" data-page-size="15" data-filter=#filter>
                                <thead>
                                <tr  style="background-color:#1c84c6;color:#fff">
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    
                                    
                                    <th data-hide="phone,tablet">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 

                                require('ContEmpresa.php');
                                 ?>
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->

            <div class="modal fade" id="Empresas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
       <br>
          <br>
         
    <div class="modal-content">
      <div class="modal-header">
         
        <h4 class="modal-title" id="exampleModalLabel">Editar Sucursal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post" action="EditarEmpresas.php">
                <div class="fetched-data"></div> 
       
      
      <div class="modal-footer">
     
        <button type="submit" class="btn btn-secondary">Editar</button>
      </div>
       </form>
       </div>
    </div>
  </div>
</div>
     
            <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fas fa-building modal-icon"></i>
                                            <h4 class="modal-title">Registrar nueva empresa</h4>
                                           
                                        </div>
                                        <div class="modal-body">
                                        
                            <!-- <form class="form-horizontal"> -->
                            <div class="row">
                            <div class="col-sm-6 b-r">
                                <form  method="POST" action="RegistrarEmpresa.php">
                                    <div class="form-group"><label>Nombre</label> <input type="text" placeholder="Nombre" class="form-control" id="Nombre" name="Nombre" required></div>
                                    
                               
                            </div>
                            
                        </div>
                          
                       
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                        </div>
                                        <!-- </form> -->
                                          </form>
                                    </div>
                                </div>
                            </div>
  <?php include 'footer.html'; ?>      
</div>

</div>
</div>
<script src="js/active.js"></script>
<script src="js/alertifyjs/alertify.js"></script>
    <script src="js/alertifyjs/alertify.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>

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
    <script src="js/plugins/select2/select2.full.min.js"></script>
    <!-- EayPIE -->
    <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>
 <!-- FooTable -->
 <script src="js/plugins/footable/footable.all.min.js"></script>
 <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();
           
        });
  
            
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('#Empresas').on('show.bs.modal', function (e) {

        var rowid = $(e.relatedTarget).data('id');
        
        $.ajax({
            type : 'post',
            url : 'CargarModalEmp.php', 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
              
              $('.fetched-data').html(data);

          
            }
        });
     });
});
</script>
</body>


</html>
