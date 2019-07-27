<?php

session_start();  // Inicia a session

include "../includes/functions.php";

$system_user_email = $_POST['system_user_email'];
$system_user_password = $_POST['system_user_password'];

if((!$system_user_email) || (!$system_user_password)){

	//echo "Por favor, todos campos devem ser preenchidos! <br /><br />";
	$mensagem_preencher_campos[] = "";
	include "../system/login-form.php";

}
else{

	$system_user_password = md5($system_user_password);

	$sql = mysql_query("SELECT * FROM system_user WHERE system_user_email='{$system_user_email}' AND system_user_password='{$system_user_password}' AND system_user_status='1'");
	$login_check = mysql_num_rows($sql);

	if($login_check > 0){

		while($row = mysql_fetch_array($sql)){

			foreach( $row AS $key => $val ){

				$$key = stripslashes( $val );

			}

			$_SESSION['id_system_user'] = $id_system_user;
			$_SESSION['system_user_name'] = $system_user_name;
			$_SESSION['system_user_email'] = $system_user_email;
			$_SESSION['system_user_level'] = $system_user_level;
		
			mysql_query("UPDATE system_user SET system_user_date_login = now() WHERE id_system_user ='{$id_system_user}'");

			header("Location: ../system/index.php");

		}

	}
	else{

		//echo "Voc&ecirc; n&atilde;o pode logar-se! Este usu&aacute;rio e/ou senha n&atilde;o s&atilde;o v&aacute;lidos!<br />
			//Por favor tente novamente!<br />";
		$mensagem_campo_errado[] = "";
		include "../system/login-form.php";

	}
}

?>