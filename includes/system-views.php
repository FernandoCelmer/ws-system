<?php
include "conf.inc";
	//Se caso aparecer o erro: Notice: Undefined variable: system_feedback_attribute in ... ...\analytics.php on line 11
    //Tire o comentário abaixo:
	//global $system_feedback_attribute;
	if((!defined($system_feedback_attribute)) && ($system_feedback_attribute=="")){
		//$system_feedback_attribute = "System Feedback";
}
//Define Formato system_feedback_date
$system_feedback_date=date('Y-m-d');
$result = mysql_query("SELECT * FROM system_feedback WHERE system_feedback_attribute='$system_feedback_attribute'",$conexion);
$row = mysql_fetch_row($result);
//Se Nao Existir o Nome da Área Na Base Ele Cria
	if ($row[0] != $system_feedback_attribute) {
		mysql_query("INSERT INTO system_feedback (system_feedback_attribute, system_feedback_date, system_feedback_number) VALUES('$system_feedback_attribute','$system_feedback_date','1')",$conexion);
	}
//Do contrário ele só faz a inclusão do system_feedback	
	else {
		$cont = $row[2];
		$contnew = $cont + 1;
		mysql_query("UPDATE system_feedback SET system_feedback_date = '$system_feedback_date', system_feedback_number = '$contnew' WHERE system_feedback_attribute = '$system_feedback_attribute'",$conexion);
}
?>