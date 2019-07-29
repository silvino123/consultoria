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
    
    <style>
        .blanco{
            background-color: inherit;
            border: 2px solid #e7eaec;
            display: block; padding: 10px 15px;
             position: relative  
        }
        .gris{
            background-color: #e7eaec;
            border: 2px solid #e7eaec;
            display: block; padding: 10px 15px; 
            position: relative
        }
      
    </style>
   
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
                             <div class="row"> 
                             <div class="col-xs-12 col-md-3"><h2><b>Encuesta</b></h2></div>
                                <div class="col-xs-6 col-md-6"> <h2 class="text-navy"><b>(Nombre de la Empresa)</b></h2></div>                                                                                                                                                                                                                                                                                                                                                                  
                           
                              </div>                                                                                                                                                                                                                                                                                                                                                               
                            <div class="ibox-tools">                                                                                                                                                                                                                                                                                                                                                                    
                            
                             
                            </div>                                                                                                                                                                                                                                                                                                                                                                
                        </div>                                                                                                                                                                                                                                                                                                                                                                  
                        <div class="ibox-content">                                                                                                                                                                                                                                                                                                                                                                  

                            <form id="form" action="#" class="wizard-big">                                                                                                                                                                                                                                                                                                                                                                  
                                <h1>Datos del Trabajador</h1>                                                                                                                                                                                                                                                                                                                                                                   
                                <fieldset>                                                                                                                                                                                                                                                                                                                                                                  
                                    <h2><b>Información del Trabajador</b></h2>                                                                                                                                                                                                                                                                                                                                                                 
                                    <div class="row">                                                                                                                                                                                                                                                                                                                                                                   
                                        <div class="col-lg-12">                                                                                                                                                                                                                                                                                                                                                                 

                                        <div class="row">                                                                                                                                                                                                                                                                                                                                                                   
                        <div class="col-md-4">                                                                                                                                                                                                                                                                                                                                                                  
                            <div class="ibox-content text-center">                                                                                                                                                                                                                                                                                                                                                                  
                                <h2 class="text-navy"><b>Sexo</b></h2>                                                                                                                                                                                                                                                                                                                                                                   


                                <div class="text-left" >                                                                                                                                                                                                                                                                                                                                                                 
                                <div class="i-checks" ><label> <input type="checkbox" value="option1"  id="masculino" name="masculino" onclick="Sexo()" > <i></i> Masculino </label></div>                                                                                                                                                                                                                                                                                                                                                                  
                                 <div class="i-checks" ><label> <input type="checkbox"  value="option2"id="femenino" name="femenino" onclick="Sexo()" > <i></i> Femenino </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                </div>                                                                                                                                                                                                                                                                                                                                                                  

                            <br>                                                                                                                                                                                                                                                                                                                                                                    
                            </div>                                                                                                                                                                                                                                                                                                                                                                  

                        </div>                                                                                                                                                                                                                                                                                                                                                                  
                        <div class="col-md-8">                                                                                                                                                                                                                                                                                                                                                                  
                            <div class="ibox-content">                                                                                                                                                                                                                                                                                                                                                                  
                            <h2 class="text-center text-navy"><b>Edad</b></h2>                                                                                                                                                                                                                                                                                                                                                                   

                              <div class="row">                                                                                                                                                                                                                                                                                                                                                                 
                              <div class="col-md-3">                                                                                                                                                                                                                                                                                                                                                                    
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> 15 a 19 </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>20 a 24 </label></div>                                                                                                                                                                                                                                                                                                                                                                   

                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> 25 a 29 </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                             <div class="col-md-3">                                                                                                                                                                                                                                                                                                                                                                 
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> 30 a 34 </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>35 a 39 </label></div>                                                                                                                                                                                                                                                                                                                                                                   

                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> 40 a 44 </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                             <div class="col-md-3">                                                                                                                                                                                                                                                                                                                                                                 
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> 45 a 49 </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>50 a 54 </label></div>                                                                                                                                                                                                                                                                                                                                                                   

                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> 55 a 59 </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                             <div class="col-md-3">                                                                                                                                                                                                                                                                                                                                                                 
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> 60 a 64 </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>65 a 69 </label></div>                                                                                                                                                                                                                                                                                                                                                                   

                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> 70 a 75 </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                            </div>                                                                                                                                                                                                                                                                                                                                                                  
                           </div>                                                                                                                                                                                                                                                                                                                                                                   

                        </div>                                                                                                                                                                                                                                                                                                                                                                  

                    </div>                                                                                                                                                                                                                                                                                                                                                                  
                    <div class="row">                                                                                                                                                                                                                                                                                                                                                                   
                        <div class="col-md-4">                                                                                                                                                                                                                                                                                                                                                                  
                            <div class="ibox-content ">                                                                                                                                                                                                                                                                                                                                                                  
                                <h2 class="text-navy text-center"><b>Estado Civil</b></h2>                                                                                                                                                                                                                                                                                                                                                                   
                                <div class="row">                                                                                                                                                                                                                                                                                                                                                                   
                              <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                    
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Casado </label></div>                                                                                                                                                                                                                                                                                                                                                                 
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>Soltero </label></div>                                                                                                                                                                                                                                                                                                                                                                   


                             </div>                                                                                                                                                                                                                                                                                                                                                                 

                             <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                 
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Union Libre </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>Divorciado </label></div>                                                                                                                                                                                                                                                                                                                                                                    


                             </div>                                                                                                                                                                                                                                                                                                                                                                 

                            </div>                                                                                                                                                                                                                                                                                                                                                                  
                            <div class="row">                                                                                                                                                                                                                                                                                                                                                                   
                            <div class="col-md-6"> 
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i>Viudo </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                            </div>

                            </div>                                                                                                                                                                                                                                                                                                                                                                  

                            </div>                                                                                                                                                                                                                                                                                                                                                                  

                        </div>                                                                                                                                                                                                                                                                                                                                                                  
                        <div class="col-md-8">                                                                                                                                                                                                                                                                                                                                                                  
                            <div class="ibox-content">                                                                                                                                                                                                                                                                                                                                                                  
                            <h2 class="text-center text-navy"><b>Nivel maximo de estudios</b></h2>                                                                                                                                                                                                                                                                                                                                                                   

                              <div class="row">                                                                                                                                                                                                                                                                                                                                                                 
                              <div class="col-md-3">                                                                                                                                                                                                                                                                                                                                                                    
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Primaria </label></div>                                                                                                                                                                                                                                                                                                                                                                   
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>Secundaria </label></div>                                                                                                                                                                                                                                                                                                                                                                    

                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Preparatoria </label></div>                                                                                                                                                                                                                                                                                                                                                                   
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                             <div class="col-md-4">                                                                                                                                                                                                                                                                                                                                                                 
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Preparatoria Trunca </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>Tecnico Superior </label></div>                                                                                                                                                                                                                                                                                                                                                                  

                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i>Licenciatura Trunca </label></div>                                                                                                                                                                                                                                                                                                                                                                 
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                             <div class="col-md-4">                                                                                                                                                                                                                                                                                                                                                                 
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Licenciatura </label></div>                                                                                                                                                                                                                                                                                                                                                                   
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>Maestría </label></div>                                                                                                                                                                                                                                                                                                                                                                  

                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Doctorado </label></div>                                                                                                                                                                                                                                                                                                                                                                  
                             </div>                                                                                                                                                                                                                                                                                                                                                                 

                            </div>                                                                                                                                                                                                                                                                                                                                                                  

                           </div>                                                                                                                                                                                                                                                                                                                                                                   
                           <!-- aqui sigue           -->                                                                                                                                                                                                                                                                                                                                                                    

                            </div>                                                                                                                                                                                                                                                                                                                                                                  
                           </div>                                                                                                                                                                                                                                                                                                                                                                   
                           <br>                                                                                                                                                                                                                                                                                                                                                                 
                   <div class="row">                                                                                                                                                                                                                                                                                                                                                                    
                   <div class="col-md-4">                                                                                                                                                                                                                                                                                                                                                                   
                            <div class="ibox-content">                                                                                                                                                                                                                                                                                                                                                                  

                                <div class="row">                                                                                                                                                                                                                                                                                                                                                                   
                              <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                    
                              <label class="col-md-6 control-label">Puesto</label>                                                                                                                                                                                                                                                                                                                                                                  
                              </div>                                                                                                                                                                                                                                                                                                                                                                    

                            </div>                                                                                                                                                                                                                                                                                                                                                                  

                              <div class="row">                                                                                                                                                                                                                                                                                                                                                                 
                              <div class="col-md-10">                                                                                                                                                                                                                                                                                                                                                                   
                              <input type="text"  class="form-control required">                                                                                                                                                                                                                                                                                                                                                                 
                              </div>                                                                                                                                                                                                                                                                                                                                                                    

                            </div>                                                                                                                                                                                                                                                                                                                                                                      

                            <div class="row">                                                                                                                                                                                                                                                                                                                                                                   
                            <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                  
                              <label class="col-md-6 control-label">Depto/Area</label>                                                                                                                                                                                                                                                                                                                                                                  
                              </div>                                                                                                                                                                                                                                                                                                                                                                    

                            </div>                                                                                                                                                                                                                                                                                                                                                                  
                            <div class="row">                                                                                                                                                                                                                                                                                                                                                                   
                              <div class="col-md-10">                                                                                                                                                                                                                                                                                                                                                                   
                              <input type="text"  class="form-control required">                                                                                                                                                                                                                                                                                                                                                                 
                              </div>                                                                                                                                                                                                                                                                                                                                                                    

                            </div>                                                                                                                                                                                                                                                                                                                                                                  

                            </div>                                                                                                                                                                                                                                                                                                                                                                  

                        </div>                                                                                                                                                                                                                                                                                                                                                                  
                        <div class="col-md-5">                                                                                                                                                                                                                                                                                                                                                                  
                            <div class="ibox-content">                                                                                                                                                                                                                                                                                                                                                                  

                            <h2 class="text-center text-navy"><b>Contrato</b></h2>                                                                                                                                                                                                                                                                                                                                                                   
                              <div class="row">                                                                                                                                                                                                                                                                                                                                                                 
                              <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                    
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Tiempo Completo </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>Por Proyecto </label></div>                                                                                                                                                                                                                                                                                                                                                                  

                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Honorarios  </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                             <div class="col-md-4">                                                                                                                                                                                                                                                                                                                                                                 
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Temporal </label></div>                                                                                                                                                                                                                                                                                                                                                                   

                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                           </div> 
                           </div>  
                           <div class="col-md-3">                                                                                                                                                                                                                                                                                                                                                                  
                            <div class="ibox-content">                                                                                                                                                                                                                                                                                                                                                                  

                            <h3 class="text-center text-navy"><b>Tipo de personal</b></h3>                                                                                                                                                                                                                                                                                                                                                                   
                              <div class="row">                                                                                                                                                                                                                                                                                                                                                                 
                              <div class="col-md-9">                                                                                                                                                                                                                                                                                                                                                                    
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Sindicalizado</label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>Confianza </label></div>                                                                                                                                                                                                                                                                                                                                                                  

                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Ninguno </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                                                                                                                                                                                                                                                                                                                                                                                              
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                           </div> 
                           </div>                                                                                                                                                                                                                                                                                                                                                               
                           </div>                                                                                                                                                                                                                                                                                                                                                                 
                           <div class="row">                                                                                                                                                                                                                                                                                                                                                                    
                   <div class="col-md-4">                                                                                                                                                                                                                                                                                                                                                                   
                            <div class="ibox-content">                                                                                                                                                                                                                                                                                                                                                                  
                            <h2 class="text-center text-navy"><b>Jornada</b></h2>
                                <div class="row">                                                                                                                                                                                                                                                                                                                                                                   
                              <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                    
                              <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Nocturno</label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>Vespertino  </label></div>                                                                                                                                                                                                                                                                                                                                                                  

                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Mixto  </label></div>                                                                                                                                                                                                                                                                                                                                                                  
                              </div>                                                                                                                                                                                                                                                                                                                                                                    

                            </div>                                                                                                                                                                                                                                                                                                                                                                  
                                                                                                                                                                                                                                                                                                                                                                                              

                            </div>                                                                                                                                                                                                                                                                                                                                                                  

                        </div>                                                                                                                                                                                                                                                                                                                                                                  
                        <div class="col-md-5">                                                                                                                                                                                                                                                                                                                                                                  
                            <div class="ibox-content">                                                                                                                                                                                                                                                                                                                                                                  

                            <h3 class="text-center text-navy"><b>Experiencia en el puesto actual</b></h3>                                                                                                                                                                                                                                                                                                                                                                   
                              <div class="row">                                                                                                                                                                                                                                                                                                                                                                 
                              <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                    
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Menos de 6 meses </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>6 meses a 1 año </label></div>                                                                                                                                                                                                                                                                                                                                                                  

                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Entre 1 y 4 años </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Entre 5 y 9 años </label></div>                                                                                                                                                                                                                                                                                                                                                                
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                             <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                 
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Entre 10 y 14 años </label></div>                                                                                                                                                                                                                                                                                                                                                                   
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Entre 14 y 19 años </label></div>
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Entre 20 y 24 años </label></div>                                                                                                                                                                                                                                                                                                                                                                   
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> 25 años o más </label></div>
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                           </div> 
                           </div>  
                           <div class="col-md-3">                                                                                                                                                                                                                                                                                                                                                                  
                            <div class="ibox-content">                                                                                                                                                                                                                                                                                                                                                                  

                            <h3 class="text-center text-navy"><b>Dependientes</b></h3>                                                                                                                                                                                                                                                                                                                                                                   
                              <div class="row">                                                                                                                                                                                                                                                                                                                                                                 
                              <div class="col-md-4">                                                                                                                                                                                                                                                                                                                                                                    
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> 1</label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>2 </label></div>                                                                                                                                                                                                                                                                                                                                                                  

                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> 3 </label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                                                                                                                     

                            </div>                                                                                                                                                                                                                                                                                                                                                                 
                            <div class="col-md-8">                                                                                                                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                                                                                                                                                  
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> 4</label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>más de 4 </label></div>                                                                                                                                                                                                                                                                                                                                                                  
                              
                            </div>                                                                                                                                                                                                                                                                                                                                                                
                             </div>                                                                                                                                                                                                                                                                                                                                                                 
                           </div> 
                           </div>                                                                                                                                                                                                                                                                                                                                                               
                           </div>  
                            <div class="row" >
                            <div class="col-md-12">                                                                                                                                                                                                                                                                                                                                                                   
                            <div class="ibox-content">                                                                                                                                                                                                                                                                                                                                                                  
                            <h2 class="text-center text-navy"><b>Experiencia laboral (general)</b></h2>
                                <div class="row">                                                                                                                                                                                                                                                                                                                                                                   
                              <div class="col-md-3">                                                                                                                                                                                                                                                                                                                                                                    
                              <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Menos de 6 meses</label></div>                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="i-checks"><label> <input type="checkbox"  value="option2" name="a"> <i></i>6 meses a 1 año </label></div>                                                                                                                                                                                                                                                                                                                                                                  

                              </div>                                                                                                                                                                                                                                                                                                                                                                    
                              <div class="col-md-3">                                                                                                                                                                                                                                                                                                                                                                    
                              <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i>Entre 1 y 4 años </label></div>                                                                                                                                                                                                                                                                                                                                                                  
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i>Entre 5 y 9 años </label></div>                                                                                                                                                                                                                                                                                                                                                                  
                              </div> 
                              <div class="col-md-3">                                                                                                                                                                                                                                                                                                                                                                    
                              <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i>Entre 10 y 14 años </label></div>                                                                                                                                                                                                                                                                                                                                                                  
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i>Entre 14 y 19 años </label></div>                                                                                                                                                                                                                                                                                                                                                                  
                              </div> 
                              <div class="col-md-3">                                                                                                                                                                                                                                                                                                                                                                    
                              <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i>Entre 20 y 24 años </label></div>                                                                                                                                                                                                                                                                                                                                                                  
                               <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i>25 años o más </label></div>                                                                                                                                                                                                                                                                                                                                                                  
                              </div>
                            </div>                                                                                                                                                                                                                                                                                                                                                                  
                                                                                                                                                                                                                                                                                                                                                                                              

                            </div>                                                                                                                                                                                                                                                                                                                                                                  

                        </div>    
                            </div>
                                </fieldset>                                                                                                                                                                                                                                                                                                                                                                 
                                <h1>ET</h1>                                                                                                                                                                                                                                                                                                                                                                 
                                <fieldset>                                                                                                                                                                                                                                                                                                                                                                  
                                    <h2><b>Marque la respuesta que se le indica</b></h2>                                                                                                                                                                                                                                                                                                                                                                    
                                    <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">

                            <div class="row show-grid">
                                <div class="col-xs-12 col-md-9"><h3><b>Sección/Pregunta</b></h3></div>
                                <div class="col-xs-6 col-md-3"><h3><b>Repuestas: Si, No</b></h3></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-md-8"><h3 class="text-navy"><b>I.- Acontecimiento traumático severo.</b></h3></div>
                                <div class="col-xs-6 col-md-4"></div>
                               
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-10" style="background-color:#fff;border-color:#fff"><h3><b>¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como los siguientes:</b></h3></div>
                                <div class="col-xs-2" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                   <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris" >
                                <div class="col-xs-10" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>¿Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o una lesión grave?</b><h3></div>
                                <div class="col-xs-2" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-10" style="background-color:#fff;border-color:#fff"><h3><b>¿Asaltos?</b></h3></div>
                                <div class="col-xs-2" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                            <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                    <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris" >
                                <div class="col-xs-10" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>¿Actos violentos que derivaron en lesiones graves?</b><h3></div>
                                <div class="col-xs-2" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                               <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                   <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>

                            <div class="row show-grid blanco">
                                <div class="col-xs-10" style="background-color:#fff;border-color:#fff"><h3><b>¿Secuestro?</b><h3></div>
                                <div class="col-xs-2" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                    <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris" >
                                <div class="col-xs-10" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>¿Amenazas? o ¿Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas?</b><h3></div>
                                <div class="col-xs-2" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- final row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</b></h3></div>
                                <div class="col-xs-6 col-md-2"></div>
                               
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-10" style="background-color:#fff;border-color:#fff"><h3><b>¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?</b></h3></div>
                                <div class="col-xs-2" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                   <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris" >
                                <div class="col-xs-10" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen malestar?</b><h3></div>
                                <div class="col-xs-2" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                   <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>

            </div>
            <!-- final row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</b></h3></div>
                                <div class="col-xs-6 col-md-2"></div>
                               
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-10" style="background-color:#fff;border-color:#fff"><h3><b>¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones que le puedan recordar el acontecimiento?</b></h3></div>
                                <div class="col-xs-2"  style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                    <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris" >
                                <div class="col-xs-10"  style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que motivan recuerdos del acontecimiento?</b></h3></div>
                                <div class="col-xs-2"  style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                    <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-10" style="background-color:#fff;border-color:#fff"><h3><b>¿Ha tenido dificultad para recordar alguna parte importante del evento?</b></h3></div>
                                <div class="col-xs-2"  style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                   <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris" >
                                <div class="col-xs-10" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>¿Ha disminuido su interés en sus actividades cotidianas?</b></h3></div>
                                <div class="col-xs-2"  style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                   <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco"  >
                                <div class="col-xs-10" style="background-color:#fff;border-color:#fff"><h3><b>¿Se ha sentido usted alejado o distante de los demás?</b><h3></div>
                                <div class="col-xs-2"  style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                   <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris" >
                                <div class="col-xs-10" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>¿Ha notado que tiene dificultad para expresar sus sentimientos?</b></h3></div>
                                <div class="col-xs-2"  style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                 <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>

                            <div class="row show-grid blanco" >
                                <div class="col-xs-10" style="background-color:#fff;border-color:#fff"><h3><b>¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otras personas o que tiene un futuro limitado?</b></h3></div>
                                <div class="col-xs-2"  style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                    <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <!-- final row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-xs-6 col-md-8"><h3 class="text-navy"><b>IV.- Afectación (durante el último mes):</b></h3></div>
                                <div class="col-xs-6 col-md-4"></div>
                               
                            </div>
                            <div class="row show-grid blanco"  >
                                <div class="col-xs-10" style="background-color:#fff;border-color:#fff"><h3><b>¿Ha tenido usted dificultades para dormir?</b></h3></div>
                                <div class="col-xs-2" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                    <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris">
                                <div class="col-xs-10" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>¿Ha estado particularmente irritable o le han dado arranques de coraje?</b></h3></div>
                                <div class="col-xs-2" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                   <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-10"  style="background-color:#fff;border-color:#fff"><h3><b>¿Ha tenido dificultad para concentrarse?</b></h3></div>
                                <div class="col-xs-2" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                    <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris" >
                                <div class="col-xs-10"  style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>¿Ha estado nervioso o constantemente en alerta?</b></h3></div>
                                <div class="col-xs-2" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                   <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-10"  style="background-color:#fff;border-color:#fff"><h3><b>¿Se ha sobresaltado fácilmente por cualquier cosa?</b></h3></div>
                                <div class="col-xs-2" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Si </label> 
                                    <label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> No </label>
                                    </div>
                                         
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
            <!-- final row -->
                                </fieldset>                                                                                                                                                                                                                                                                                                                                                                 

                                <h1>GR II</h1>                                                                                                                                                                                                                                                                                                                                                                  
                                <fieldset>                                                                                                                                                                                                                                                                                                                                                                  
                                <h2><b>Marque la respuesta que se le indica</b></h2>                                                                                                                                                                                                                                                                                                                                                                    
                  
                    <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">

                            <div class="row show-grid">
                                <div class="col-xs-12 col-md-7"><b>Sección/Pregunta</b></div>
                                <div class="col-xs-6 col-md-5"><b>Repuestas: Siempre, Casi siempre, Algunas veces, Casi nunca, Nunca</b></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Para responder las preguntas siguientes considere las condiciones de su centro de trabajo, así como la cantidad y ritmo de trabajo.</b></h3></div>
                                <div class="col-xs-6 col-md-2"></div>
                               
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>1.Mi trabajo me exige hacer mucho esfuerzo físico.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp;<label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                           
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>2.Me preocupa sufrir un accidente en mi trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>3.Considero que las actividades que realizo son peligrosas.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>

                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>4.Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>5.Por la cantidad de trabajo que tengo debo trabajar sin parar.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>6.Considero que es necesario mantener un ritmo de trabajo acelerado.</b><h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp;<label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>7.Mi trabajo exige que esté muy concentrado.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>8.Mi trabajo requiere que memorice mucha información.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>9.Mi trabajo exige que atienda varios asuntos al mismo tiempo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp;<label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- final row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</b></h3></div>
                                <div class="col-xs-6 col-md-2"></div>
                               
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>10.En mi trabajo soy responsable de cosas de mucho valor.</b><h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp;<label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                           
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>11.Respondo ante mi jefe por los resultados de toda mi área de trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>12.En mi trabajo me dan órdenes contradictorias.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>13.Considero que en mi trabajo me piden hacer cosas innecesarias.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- final row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con el tiempo destinado a su trabajo y sus responsabilidades familiares.</b></h3></div>
                              
                               
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>14.Trabajo horas extras más de tres veces a la semana.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp;<label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                           
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>15.Mi trabajo me exige laborar en días de descanso, festivos o fines de semana.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>16.Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>17.Pienso en las actividades familiares o personales cuando estoy en mi trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- final row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.</b></h3></div>
                               
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>18.Mi trabajo permite que desarrolle nuevas habilidades.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp;<label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                           
                            <div class="row show-grid gris">
                                <div class="col-xs-7"  style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>19.En mi trabajo puedo aspirar a un mejor puesto.</b></h3></div>
                                <div class="col-xs-5"  style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>20.Durante mi jornada de trabajo puedo tomar pausas cuando las necesito.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris">
                                <div class="col-xs-7"  style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>21.Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo.</b></h3></div>
                                <div class="col-xs-5"  style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>22.Puedo cambiar el orden de las actividades que realizo en mi trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- final row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con la capacitación e información que recibe sobre su trabajo..</b></h3></div>
                             
                               
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>23.Me informan con claridad cuáles son mis funciones.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp;<label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                           
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>24.Me explican claramente los resultados que debo obtener en mi trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>25.Me informan con quién puedo resolver problemas o asuntos de trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>26.Me permiten asistir a capacitaciones relacionadas con mi trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>27.Recibo capacitación útil para hacer mi trabajo.</b><h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                          
                           

                        </div>
                    </div>
                </div>

            </div>
            <!-- final row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes se refieren a las relaciones con sus compañeros de trabajo y su jefe.</b></h3></div>
                             
                               
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>28.Mi jefe tiene en cuenta mis puntos de vista y opiniones.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp;<label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                           
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>29.Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>30.Puedo confiar en mis compañeros de trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>31.Cuando tenemos que realizar trabajo de equipo los compañeros colaboran.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>32.Mis compañeros de trabajo me ayudan cuando tengo dificultades.</b><h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                          
                            <div class="row show-grid gris" >
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>33.En mi trabajo puedo expresarme libremente sin interrupciones.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                               
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>34.Recibo críticas constantes a mi persona y/o trabajo.</b><h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris" >
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>35.Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                               
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>36.Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones.</b><h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris" >
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>37.Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                               
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>38.Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores.</b><h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid gris" >
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>39.Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                               
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>40.He presenciado actos de violencia en mi centro de trabajo.</b><h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- final row -->
            
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">
                        
                            <div class="row">
                                <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</b></h3></div>
                             
                               
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-10" style="background-color:#fff;border-color:#fff"><h3><b>En mi trabajo debo brindar servicio a clientes o usuarios:</b></h3></div>
                                <div class="col-xs-2" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Si </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">No </label>
                                        
                                  
                                         </div>
                                         
                                </div>
                            </div>

                            <div id="content1" style="display:none">
                            <div class="row show-grid blanco" >
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>41.Atiendo clientes o usuarios muy enojados.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp;<label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                           
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>42.Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>43.Para hacer mi trabajo debo demostrar sentimientos distintos a los míos.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp;<label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>

                           </div>
                           
                        </div>
                    </div>
                </div>

            </div>
            <!-- final row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">
                        
                            <div class="row">
                                <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las siguientes preguntas están relacionadas con las actitudes de los trabajadores que supervisa.</b></h3></div>
                             
                               
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-10" style="background-color:#fff;border-color:#fff"><h3><b>Soy jefe de otros trabajadores:</b></h3></div>
                                <div class="col-xs-2" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label > <input class="i-checks" type="checkbox" value="si" name="check" id="check" >Si </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">No </label>
                                        
                                  
                                         </div>
                                         
                                </div>
                            </div>
                            <div id="content2" style="display:none;" >
                            <div class="row show-grid blanco" >
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>44.Comunican tarde los asuntos de trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp;<label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                           
                            <div class="row show-grid gris">
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><b>45.Dificultan el logro de los resultados del trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#e7eaec;border-color:#e7eaec">
                                <div class="row">
                                <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp; &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp; <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            <div class="row show-grid blanco" >
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><b>46.Ignoran las sugerencias para mejorar su trabajo.</b></h3></div>
                                <div class="col-xs-5" style="background-color:#fff;border-color:#fff">
                                <div class="row">
                                 <label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1"> Siempre </label> 
                                    &nbsp; &nbsp;&nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2">Casi siempre </label>
                                        &nbsp;<label class="i-checks"> <input type="checkbox" value="option1" id="inlineCheckbox1">Algunas veces </label> 
                                  
                                         </div>
                                         <div class="row">
                                         <label class="i-checks"> <input type="checkbox" value="option2" id="inlineCheckbox2"> Casi nunca </label>
                                        &nbsp;<label class="i-checks">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Nunca </label>
                                         </div>
                                         
                                </div>
                            </div>
                            </div>

                           
                        </div>
                    </div>
                </div>

            </div>
              
                                </fieldset>                                                                                                                                                                                                                                                                                                                                                                 
                                <h1>GR III</h1>                                                                                                                                                                                                                                                                                                                                                                 
                                <fieldset>                                                                                                                                                                                                                                                                                                                                                                  
                                    <div class="text-center" style="margin-top: 120px">                                                                                                                                                                                                                                                                                                                                                                 
                                        <h2> :-)</h2>                                                                                                                                                                                                                                                                                                                                                                 
                                    </div>                                                                                                                                                                                                                                                                                                                                                                  
                                </fieldset>                                                                                                                                                                                                                                                                                                                                                                 
                                <h1>Finalizar</h1>                                                                                                                                                                                                                                                                                                                                                                  
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
<script>
    $(document).ready(function() {
    $("check").click(function(event){
        var valor = $(event.target).val();
        if(valor =="si"){
            $("#content").show();
            // $("#div2").hide();
        } 
        // else if (valor == "Ventanilla") {
        //     $("#div1").hide();
        //     $("#div2").show();
        // } else { 
        //     // Otra cosa
        // }
    });
});
</script>

</body>                                                                                                                                                                                                                                                                                                                                                                 


</html>                                                                                                                                                                                                                                                                                                                                                                 
