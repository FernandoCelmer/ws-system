<?php
include "conf.inc";
	//Se caso aparecer o erro: Notice: Undefined variable: system_download_attribute in ... ...\analytics.php on line 11
    //Tire o comentário abaixo:
	//global $system_download_attribute;
	if((!defined($system_download_attribute)) && ($system_download_attribute=="")){
		$system_download_attribute = "System_Download";
}
//Define Formato system_download_date
$system_download_date=date('Y-m-d');
$result = mysql_query("SELECT * FROM system_download WHERE system_download_attribute='$system_download_attribute'",$conexion);
$row = mysql_fetch_row($result);
//Se Nao Existir o Nome da Área Na Base Ele Cria
	if ($row[0] != $system_download_attribute) {
		mysql_query("INSERT INTO system_download (system_download_attribute, system_download_date, system_feedback_date) VALUES('$system_download_attribute','$system_download_date','1')",$conexion);
	}
//Do contrário ele só faz a inclusão do system_download	
	else {
		$cont = $row[2];
		$contnew = $cont + 1;
		mysql_query("UPDATE system_download SET system_download_date = '$system_download_date', system_feedback_date = '$contnew' WHERE system_download_attribute = '$system_download_attribute'",$conexion);
}
?>