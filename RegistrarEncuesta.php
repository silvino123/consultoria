<?php 

require('conec.php');
//Datos del trabajador
$Sexo=trim($_POST['sexo']);
$Edad=trim($_POST['edad']);
$Status=trim($_POST['status']);
$Estudios=trim($_POST['estudios']);
$Puesto=trim($_POST['puesto']);
$Area=trim($_POST['area']);
$Contrato=trim($_POST['contrato']);
$Personal=trim($_POST['personal']);
$Jornada=trim($_POST['jornada']);
$Experiencia=trim($_POST['experiencia']);
$Dependientes=trim($_POST['dependientes']);
$General=trim($_POST['general']);
//ET
$q1=$_POST['Q1'];
$q2=$_POST['Q2'];
$q3=$_POST['Q3'];
$q4=$_POST['Q4'];
$q5=$_POST['Q5'];
$q6=$_POST['Q6'];
$q7=$_POST['Q7'];
$q8=$_POST['Q8'];
$q9=$_POST['Q9'];
$q10=$_POST['Q10'];
$q11=$_POST['Q11'];
$q12=$_POST['Q12'];
$q13=$_POST['Q13'];
$q14=$_POST['Q14'];
$q15=$_POST['Q15'];
$q16=$_POST['Q16'];
$q17=$_POST['Q17'];
$q18=$_POST['Q18'];
$q19=$_POST['Q19'];
$q20=$_POST['Q20'];
//GRII Y GRIII
$gq1=$_POST['GQ1'];
$gq2=$_POST['GQ2'];
$gq3=$_POST['GQ3'];
$gq4=$_POST['GQ4'];
$gq5=$_POST['GQ5'];
$gq6=$_POST['GQ6'];
$gq7=$_POST['GQ7'];
$gq8=$_POST['GQ8'];
$gq9=$_POST['GQ9'];
$gq10=$_POST['GQ10'];
$gq11=$_POST['GQ11'];
$gq12=$_POST['GQ12'];
$gq13=$_POST['GQ13'];
$gq14=$_POST['GQ14'];
$gq15=$_POST['GQ15'];
$gq16=$_POST['GQ16'];
$gq17=$_POST['GQ17'];
$gq18=$_POST['GQ18'];
$gq19=$_POST['GQ19'];
$gq20=$_POST['GQ20'];
$gq21=$_POST['GQ21'];
$gq22=$_POST['GQ22'];
$gq23=$_POST['GQ23'];
$gq24=$_POST['GQ24'];
$gq25=$_POST['GQ25'];
$gq26=$_POST['GQ26'];
$gq27=$_POST['GQ27'];
$gq28=$_POST['GQ28'];
$gq29=$_POST['GQ29'];
$gq30=$_POST['GQ30'];
$gq31=$_POST['GQ31'];
$gq32=$_POST['GQ32'];
$gq33=$_POST['GQ33'];
$gq34=$_POST['GQ34'];
$gq35=$_POST['GQ35'];
$gq36=$_POST['GQ36'];
$gq37=$_POST['GQ37'];
$gq38=$_POST['GQ38'];
$gq39=$_POST['GQ39'];
$gq40=$_POST['GQ40'];
$gqif1=$_POST['GQIF1'];
$gq41=$_POST['GQ41'];
$gq42=$_POST['GQ42'];
$gq43=$_POST['GQ43'];
$gqif2=$_POST['GQIF2'];
$gq44=$_POST['GQ44'];
$gq45=$_POST['GQ45'];
$gq46=$_POST['GQ46'];
$gq47=$_POST['GQ47'];
$gq48=$_POST['GQ48'];
$gq49=$_POST['GQ49'];
$gq50=$_POST['GQ50'];
$gq51=$_POST['GQ51'];
$gq52=$_POST['GQ52'];
$gq53=$_POST['GQ53'];
$gq54=$_POST['GQ54'];
$gq55=$_POST['GQ55'];
$gq56=$_POST['GQ56'];
$gq57=$_POST['GQ57'];
$gq58=$_POST['GQ58'];
$gq59=$_POST['GQ59'];
$gq60=$_POST['GQ60'];
$gq61=$_POST['GQ61'];
$gq62=$_POST['GQ62'];
$gq63=$_POST['GQ63'];
$gq64=$_POST['GQ64'];
$gq65=$_POST['GQ65'];
$gq66=$_POST['GQ66'];
$gq67=$_POST['GQ67'];
$gq68=$_POST['GQ68'];
$gq69=$_POST['GQ69'];
$gq70=$_POST['GQ70'];
$gq71=$_POST['GQ71'];
$gq72=$_POST['GQ72'];
$fecha= date("Y-m-d");
$id_usuario=2;
$id_Empresa=1;
$id_sucursal=4;
$tipo="GRIII";

	$insert= "INSERT INTO cuestionario (id_cuestionario,sexo,edad,estado,estudios,puesto,area,contrato,personal,jornada,experiencia,dependientes,general,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,gq1,gq2,gq3,gq4,gq5,gq6,gq7,gq8,gq9,gq10,gq11,gq12,gq13,gq14,gq15,gq16,gq17,gq18,gq19,gq20,gq21,gq22,gq23,gq24,gq25,gq26,gq27,gq28,gq29,gq30,gq31,gq32,gq33,gq34,gq35,gq36,gq37,gq38,gq39,gq40,gqif1,gq41,gq42,gq43,gqif2,gq44,gq45,gq46,gq47,gq48,gq49,gq50,gq51,gq52,gq53,gq54,gq55,gq56,gq57,gq58,gq59,gq60,gq61,gq62,gq63,gq64,gq65,gq66,gq67,gq68,gq69,gq70,gq71,gq72,id_consultor,id_empresa,fecha,id_sucursal,tipo) 
				  values ('','$Sexo','$Edad','$Status','$Estudios','$Puesto','$Area','$Contrato','$Personal','$Jornada','$Experiencia','$Dependientes','$General','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$gq1','$gq2','$gq3','$gq4','$gq5','$gq6','$gq7','$gq8','$gq9','$gq10','$gq11','$gq12','$gq13','$gq14','$gq15','$gq16','$gq17','$gq18','$gq19','$gq20','$gq21','$gq22','$gq23','$gq24','$gq25','$gq26','$gq27','$gq28','$gq29','$gq30','$gq31','$gq32','$gq33','$gq34','$gq35','$gq36','$gq37','$gq38','$gq39','$gq40','$gqif1','$gq41','$gq42','$gq43','$gqif2','$gq44','$gq45','$gq46','$gq47','$gq48','$gq49', '$gq50', '$gq51','$gq52','$gq53','$gq54','$gq55','$gq56','$gq57','$gq58','$gq59','$gq60','$gq61','$gq62','$gq63','$gq64','$gq65','$gq66','$gq67','$gq68','$gq69','$gq70','$gq71','$gq72','$id_usuario','$id_Empresa','$fecha','$id_sucursal','$tipo')";

$ejecuta_q= mysqli_query($con,$insert) or die("Error al insertar el cuestionario");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="consultor.php";
    </script>';

 ?>