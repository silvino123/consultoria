<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cuestionario</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/473290e8a6.js"></script>
</head>

<body>
<div id="wrapper">
<?php include 'Slide-Menu.html'; ?>  
<div id="page-wrapper" class="gray-bg">  
<?php include 'Nav.html'; ?>  
<div class="wrapper wrapper-content">
<div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h2>Cuestionario</h2>
                            <div class="ibox-tools">
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                     
                            <form id="form" action="#" class="wizard-big">
                                <h1>Datos del Trabajador</h1>
                                <fieldset>
                                    <h2>Informacion del Trabajador</h2>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                        <div class="row">
                        <div class="col-md-4">
                            <div class="ibox-content text-center">
                                <h1>Sexo</h1>
                               

                                <div class="text-left">
                                <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Masulino </label></div>
                                 <div class="i-checks"><label> <input type="radio"  value="option2" name="a"> <i></i> Femenino </label></div>
                                </div>
                            
                            <br>
                            </div>
                    
                        </div>
                        <div class="col-md-8">
                            <div class="ibox-content">
                            <h1 class="text-center">Edad</h1>
                           
                              <div class="row">
                              <div class="col-md-3">
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> 15 a 19 </label></div>
                                <div class="i-checks"><label> <input type="radio"  value="option2" name="a"> <i></i>20 a 24 </label></div>
                                
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> 25 a 29 </label></div>
                             </div>
                             <div class="col-md-3">
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> 30 a 34 </label></div>
                                <div class="i-checks"><label> <input type="radio"  value="option2" name="a"> <i></i>35 a 39 </label></div>
                                
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> 40 a 44 </label></div>
                             </div>
                             <div class="col-md-3">
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> 45 a 49 </label></div>
                                <div class="i-checks"><label> <input type="radio"  value="option2" name="a"> <i></i>50 a 54 </label></div>
                                
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> 55 a 59 </label></div>
                             </div>
                             <div class="col-md-3">
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> 60 a 64 </label></div>
                                <div class="i-checks"><label> <input type="radio"  value="option2" name="a"> <i></i>65 a 69 </label></div>
                                
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> 70 a 75 </label></div>
                             </div>
                            </div>
                           </div>
                           
                        </div>
                        
                    </div> 
                    <div class="row">
                        <div class="col-md-4">
                            <div class="ibox-content text-center">
                                <h1>Estado Civil</h1>
                                <div class="row">
                              <div class="col-md-6">
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Casado </label></div>
                                <div class="i-checks"><label> <input type="radio"  value="option2" name="a"> <i></i>Soltero </label></div>
                                
                               
                             </div>
                             
                             <div class="col-md-6">
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Union Libre </label></div>
                                <div class="i-checks"><label> <input type="radio"  value="option2" name="a"> <i></i>Divorciado </label></div>
                                
                               
                             </div>
                             
                            </div>
                            <div class="row">
                            
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Union Libre </label></div>
                               
                             
                            </div>
                          
                            </div>
                    
                        </div>
                        <div class="col-md-8">
                            <div class="ibox-content">
                            <h1 class="text-center">Nivel Maximo de Estudios</h1>
                           
                              <div class="row">
                              <div class="col-md-3">
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Primaria </label></div>
                                <div class="i-checks"><label> <input type="radio"  value="option2" name="a"> <i></i>Secundaria </label></div>
                                
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Preparatoria </label></div>
                             </div>
                             <div class="col-md-4">
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Preparatoria Trunca </label></div>
                                <div class="i-checks"><label> <input type="radio"  value="option2" name="a"> <i></i>Tecnico Superior </label></div>
                                
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i>Licenciatura Trunca </label></div>
                             </div>
                             <div class="col-md-4">
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Licenciatura </label></div>
                                <div class="i-checks"><label> <input type="radio"  value="option2" name="a"> <i></i>Maestría </label></div>
                                
                               <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Doctorado </label></div>
                             </div>
                            
                            </div>
                           </div>
                           <!-- aqui sigue           -->
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Profile</h1>
                                <fieldset>
                                    <h2>Profile Information</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>First name *</label>
                                                <input id="name" name="name" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Last name *</label>
                                                <input id="surname" name="surname" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input id="email" name="email" type="text" class="form-control required email">
                                            </div>
                                            <div class="form-group">
                                                <label>Address *</label>
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <h1>Warning</h1>
                                <fieldset>
                                    <div class="text-center" style="margin-top: 120px">
                                        <h2>You did it Man :-)</h2>
                                    </div>
                                </fieldset>

                                <h1>Finish</h1>
                                <fieldset>
                                    <h2>Terms and Conditions</h2>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
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

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Steps -->
    <script src="js/plugins/steps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>


    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>
 <!-- iCheck -->
 <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
   
</body>


</html>
