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

                            <div class="row show-grid blanco">
                                <div class="col-xs-12 col-md-7" style="background-color:#fff;border-color:#fff"><h3><b>Sección/Pregunta</b></h3></div>
                                <div class="col-xs-6 col-md-5"><b>Repuestas: Siempre, Casi siempre, Algunas veces, Casi nunca, Nunca</b></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Para responder las preguntas siguientes considere las condiciones de su centro de trabajo, así como la cantidad y ritmo de trabajo.</b></h3></div>
                                <div class="col-xs-6 col-md-2"></div>
                               
                            </div>
                            <div class="row show-grid blanco">
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">1</span> <b>Mi trabajo me exige hacer mucho esfuerzo físico.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">2</span> <b>Me preocupa sufrir un accidente en mi trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">3</span> <b>Considero que las actividades que realizo son peligrosas.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">4</span> <b>Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">5</span> <b>Por la cantidad de trabajo que tengo debo trabajar sin parar.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">6</span> <b>Considero que es necesario mantener un ritmo de trabajo acelerado.</b><h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">7</span> <b>Mi trabajo exige que esté muy concentrado.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">8</span> <b>Mi trabajo requiere que memorice mucha información.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">9</span> <b>Mi trabajo exige que atienda varios asuntos al mismo tiempo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">10</span> <b>En mi trabajo soy responsable de cosas de mucho valor.</b><h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">11</span> <b>Respondo ante mi jefe por los resultados de toda mi área de trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">12</span> <b>En mi trabajo me dan órdenes contradictorias.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">13</span> <b>Considero que en mi trabajo me piden hacer cosas innecesarias.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">14</span> <b>Trabajo horas extras más de tres veces a la semana.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">15</span> <b>Mi trabajo me exige laborar en días de descanso, festivos o fines de semana.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">16</span> <b>Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">17</span> <b>Pienso en las actividades familiares o personales cuando estoy en mi trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">18</span> <b>Mi trabajo permite que desarrolle nuevas habilidades.</b></h3></div>
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
                                <div class="col-xs-7"  style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">19</span> <b>En mi trabajo puedo aspirar a un mejor puesto.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">20</span> <b>Durante mi jornada de trabajo puedo tomar pausas cuando las necesito.</b></h3></div>
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
                                <div class="col-xs-7"  style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">21</span> <b>Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">22</span> <b>Puedo cambiar el orden de las actividades que realizo en mi trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">23</span> <b>Me informan con claridad cuáles son mis funciones.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">24</span> <b>Me explican claramente los resultados que debo obtener en mi trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">25</span> <b>Me informan con quién puedo resolver problemas o asuntos de trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">26</span> <b>Me permiten asistir a capacitaciones relacionadas con mi trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">27</span> <b>Recibo capacitación útil para hacer mi trabajo.</b><h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">28</span> <b>Mi jefe tiene en cuenta mis puntos de vista y opiniones.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">29</span> <b>Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">30</span> <b>Puedo confiar en mis compañeros de trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">31</span> <b>Cuando tenemos que realizar trabajo de equipo los compañeros colaboran.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">32</span> <b>Mis compañeros de trabajo me ayudan cuando tengo dificultades.</b><h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">33</span> <b>En mi trabajo puedo expresarme libremente sin interrupciones.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">34</span> <b>Recibo críticas constantes a mi persona y/o trabajo.</b><h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">35</span> <b>Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">36</span> <b>Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones.</b><h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">37</span> <b>Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">38</span> <b>Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores.</b><h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">39</span> <b>Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">40</span> <b>He presenciado actos de violencia en mi centro de trabajo.</b><h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">41</span> <b>Atiendo clientes o usuarios muy enojados.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">42</span> <b>Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">43</span> <b>Para hacer mi trabajo debo demostrar sentimientos distintos a los míos.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">44</span> <b>Comunican tarde los asuntos de trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">45</span> <b>Dificultan el logro de los resultados del trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">46</span> <b>Ignoran las sugerencias para mejorar su trabajo.</b></h3></div>
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
                                <h2><b>Marque la respuesta que se le indica</b></h2>                                                                                                                                                                                                                                                                                                                                                                    
                  
                  <div class="row">
              <div class="col-lg-12">
                  <div class="ibox float-e-margins">
                     
                      <div class="ibox-content">

                          <div class="row show-grid blanco">
                              <div class="col-xs-12 col-md-7" style="background-color:#fff;border-color:#fff"><h3><b>Sección/Pregunta</b></h3></div>
                              <div class="col-xs-6 col-md-5"><b>Repuestas: Siempre, Casi siempre, Algunas veces, Casi nunca, Nunca</b></div>
                          </div>
                          <div class="row">
                              <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Para responder las preguntas siguientes considere las condiciones ambientales de su centro de trabajo.</b></h3></div>
                              <div class="col-xs-6 col-md-2"></div>
                             
                          </div>
                          <div class="row show-grid blanco">
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">1</span>  <b>El espacio donde trabajo me permite realizar mis actividades de manera segura e higiénica.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">2</span> <b>Mi trabajo me exige hacer mucho esfuerzo físico.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">3</span> <b>Me preocupa sufrir un accidente en mi trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">4</span> <b>Considero que en mi trabajo se aplican las normas de seguridad y salud en el trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">5</span> <b>Considero que las actividades que realizo son peligrosas.</b></h3></div>
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
                              <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.</b></h3></div>
                              <div class="col-xs-6 col-md-2"></div>
                             
                          </div>
                          <div class="row show-grid blanco">
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">6</span> <b>Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">7</span> <b>Por la cantidad de trabajo que tengo debo trabajar sin parar.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">8</span> <b>Considero que es necesario mantener un ritmo de trabajo acelerado.</b></h3></div>
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
                              <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con el esfuerzo mental que le exige su trabajo.</b></h3></div>
                              <div class="col-xs-6 col-md-2"></div>
                             
                          </div>
                          <div class="row show-grid blanco">
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">9</span> <b>Mi trabajo exige que esté muy concentrado.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">10</span> <b>Mi trabajo requiere que memorice mucha información.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">11</span> <b>En mi trabajo tengo que tomar decisiones difíciles muy rápido.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">12</span> <b>Mi trabajo exige que atienda varios asuntos al mismo tiempo.</b></h3></div>
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
                    <!-- final row -->
                    <div class="row">
              <div class="col-lg-12">
                  <div class="ibox float-e-margins">
                     
                      <div class="ibox-content">

                          <div class="row">
                              <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</b></h3></div>
                              <div class="col-xs-6 col-md-2"></div>
                             
                          </div>
                          <div class="row show-grid blanco">
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">13</span> <b>En mi trabajo soy responsable de cosas de mucho valor.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">14</span> <b>Respondo ante mi jefe por los resultados de toda mi área de trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">15</span> <b>En el trabajo me dan órdenes contradictorias.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">16</span> <b>Considero que en mi trabajo me piden hacer cosas innecesarias.</b></h3></div>
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
                              <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con su jornada de trabajo.</b></h3></div>
                              <div class="col-xs-6 col-md-2"></div>
                             
                          </div>
                          <div class="row show-grid blanco">
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">17</span> <b>Trabajo horas extras más de tres veces a la semana.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">18</span> <b>Mi trabajo me exige laborar en días de descanso, festivos o fines de semana.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">19</span> <b>Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">20</span> <b>Debo atender asuntos de trabajo cuando estoy en casa.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">21</span> <b>Pienso en las actividades familiares o personales cuando estoy en mi trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">22</span> <b>Pienso que mis responsabilidades familiares afectan mi trabajo.</b></h3></div>
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
                              <div class="col-xs-6 col-md-2"></div>
                             
                          </div>
                          <div class="row show-grid blanco">
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">23</span> <b>Mi trabajo permite que desarrolle nuevas habilidades.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">24</span> <b>En mi trabajo puedo aspirar a un mejor puesto.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">25</span> <b>Durante mi jornada de trabajo puedo tomar pausas cuando las necesito.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">26</span> <b>Puedo decidir cuánto trabajo realizo durante la jornada laboral.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">27</span> <b>Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">28</span> <b>Puedo cambiar el orden de las actividades que realizo en mi trabajo.</b></h3></div>
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
                              <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con cualquier tipo de cambio que ocurra en su trabajo (considere los últimos cambios realizados).</b></h3></div>
                              <div class="col-xs-6 col-md-2"></div>
                             
                          </div>
                          <div class="row show-grid blanco">
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">29</span> <b>Los cambios que se presentan en mi trabajo dificultan mi labor.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">30</span> <b>Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas o aportaciones.</b></h3></div>
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
                              <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con la capacitación e información que se le proporciona sobre su trabajo.</b></h3></div>
                              <div class="col-xs-6 col-md-2"></div>
                             
                          </div>
                          <div class="row show-grid blanco">
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">31</span> <b>Me informan con claridad cuáles son mis funciones.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">32</span> <b>Me explican claramente los resultados que debo obtener en mi trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">33</span> <b>Me explican claramente los objetivos de mi trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">34</span> <b>Me informan con quién puedo resolver problemas o asuntos de trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">35</span> <b>Me permiten asistir a capacitaciones relacionadas con mi trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">36</span> <b>Recibo capacitación útil para hacer mi trabajo.</b></h3></div>
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
                              <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto.</b></h3></div>
                              <div class="col-xs-6 col-md-2"></div>
                             
                          </div>
                          <div class="row show-grid blanco">
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">37</span> <b>Mi jefe ayuda a organizar mejor el trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">38</span> <b>Mi jefe tiene en cuenta mis puntos de vista y opiniones.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">39</span> <b>Mi jefe me comunica a tiempo la información relacionada con el trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">40</span> <b>La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">41</span> <b>Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo.</b></h3></div>
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
                              <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes se refieren a las relaciones con sus compañeros.</b></h3></div>
                              <div class="col-xs-6 col-md-2"></div>
                             
                          </div>
                          <div class="row show-grid blanco">
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">42</span> <b>Puedo confiar en mis compañeros de trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">43</span> <b>Entre compañeros solucionamos los problemas de trabajo de forma respetuosa.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">44</span> <b>En mi trabajo me hacen sentir parte del grupo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">45</span> <b>Cuando tenemos que realizar trabajo de equipo los compañeros colaboran.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">46</span> <b>Mis compañeros de trabajo me ayudan cuando tengo dificultades.</b></h3></div>
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
                              <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con la información que recibe sobre su rendimiento en el trabajo, el reconocimiento, el sentido de pertenencia y la estabilidad que le ofrece su trabajo.</b></h3></div>
                              <div class="col-xs-6 col-md-2"></div>
                             
                          </div>
                          <div class="row show-grid blanco">
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">47</span> <b>Me informan sobre lo que hago bien en mi trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">48</span> <b>La forma como evalúan mi trabajo en mi centro de trabajo me ayuda a mejorar mi desempeño.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">49</span> <b>En mi centro de trabajo me pagan a tiempo mi salario.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">50</span> <b>El pago que recibo es el que merezco por el trabajo que realizo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">51</span> <b>Si obtengo los resultados esperados en mi trabajo me recompensan o reconocen</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">52</span> <b>Las personas que hacen bien el trabajo pueden crecer laboralmente.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">53</span> <b>Considero que mi trabajo es estable.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">54</span> <b>En mi trabajo existe continua rotación de personal.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">55</span> <b>Siento orgullo de laborar en este centro de trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">56</span> <b>Me siento comprometido con mi trabajo.</b></h3></div>
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
                              <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con actos de violencia laboral (malos tratos, acoso, hostigamiento, acoso psicológico).</b></h3></div>
                              <div class="col-xs-6 col-md-2"></div>
                             
                          </div>
                          <div class="row show-grid blanco">
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">57</span> <b>En mi trabajo puedo expresarme libremente sin interrupciones.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">58</span> <b>Recibo críticas constantes a mi persona y/o trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">59</span> <b>Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">60</span> <b>Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">61</span> <b>Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">62</span> <b>Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">63</span> <b>Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo.</b></h3></div>
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
                              <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">64</span> <b>He presenciado actos de violencia en mi centro de trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">65</span> <b>Atiendo clientes o usuarios muy enojados.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">66</span> <b>Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">67</span> <b>Para hacer mi trabajo debo demostrar sentimientos distintos a los míos.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">68</span> <b>Mi trabajo me exige atender situaciones de violencia.</b></h3></div>
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

            </div>
            <!-- final row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">
                        
                            <div class="row">
                                <div class="col-xs-6 col-md-10"><h3 class="text-navy"><b>Las preguntas siguientes están relacionadas con las actitudes de las personas que supervisa.</b></h3></div>
                             
                               
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">69</span> <b>Comunican tarde los asuntos de trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">70</span> <b>Dificultan el logro de los resultados del trabajo.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#fff;border-color:#fff"><h3><span class="badge badge-primary">71</span> <b>Cooperan poco cuando se necesita.</b></h3></div>
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
                                <div class="col-xs-7" style="background-color:#e7eaec;border-color:#e7eaec"><h3><span class="badge badge-primary">72</span> <b>Ignoran las sugerencias para mejorar su trabajo.</b></h3></div>
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

            </div>
            <!-- final row -->

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
