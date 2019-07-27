<?php

include "../includes/config.php";

$id_system_user = $_REQUEST['id'];
$system_user_password = $_REQUEST['code'];

$sql = mysql_query("UPDATE system_user SET system_user_status='1' WHERE id_system_user='{$id_system_user}' AND system_user_password='{$system_user_password}'");

$sql_doublecheck = mysql_query("SELECT * FROM system_user WHERE id_system_user='{$id_system_user}' AND system_user_password='{$system_user_password}' AND system_user_status='1'");
$doublecheck = mysql_num_rows($sql_doublecheck);

if($doublecheck == 0){

	//echo "<strong>Sua conta n&atide;o pode ser ativada!</strong>";
		$mensagem_active_errado[] = "";
}
elseif($doublecheck > 0){

	//echo "<strong>Seu cadastro foi ativado com sucesso!</strong><br />Voc&ecirc; pode fazer o login logo abaixo!<br /><br />";
		$mensagem_active_certo[] = "";	
	include "../system/login-form.php";

}

?>