<?php

include "../includes/config.php";

$recupera = $_POST['recupera'];
$system_user_email = $_POST['system_user_email'];

switch($recupera){

	case "recupera":
		recupera_senha($system_user_email);
		break;

	default:
		include "password-form.php";
		break;
}

function recupera_senha($system_user_email){

	if(!isset($system_user_email)){

        //echo "Voc� esqueceu de preencher seu email.<br />
			//<strong>Use o mesmo email que utilizou em seu cadastro.</strong><br /><br />"; 
		
		$mensagem_preencher_campo[] = "";
		include "password-form.php";

		exit();

	}

	// Checando se o email informado est� cadastrado
		
	$sql_check = mysql_query("SELECT * FROM system_user WHERE system_user_email='{$system_user_email}'");
	$sql_check_num = mysql_num_rows($sql_check);

	if($sql_check_num == 0){

		//echo "Este email n�o est� cadastrado em nosso banco de dados.<br /><br />";
		$mensagem_database[] = "";
		include "password-form.php";
		exit();

	}
	
	// Se tudo OK vamos gerar uma nova senha e enviar para o email do usu�rio!

	function makeRandomPassword(){

		$salt = "abchefghjkmnpqrstuvwxyz0123456789";
		srand((double)microtime()*1000000);

		$i = 0;

		while ($i <= 7){

			$num = rand() % 33;
			$tmp = substr($salt, $num, 1);
			$pass = $pass . $tmp;
			$i++;

		}

		return $pass;

	}

	$senha_randomica = makeRandomPassword();

	$system_user_password = md5($senha_randomica);

	$sql = mysql_query("UPDATE system_user SET system_user_password='{$system_user_password}' WHERE system_user_email ='{$system_user_email}'");

	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers .= "From: WouSoftware<wousoftware@wousoftware.com>"; //COLOQUE TEU EMAIL
	$subject = "Recupera��o de Senha";
	$message = "Ol�, redefinimos sua senha.<br /><br />

	<strong>Nova Senha</strong>: {$senha_randomica}<br /><br />

	<a href='http://www.system.wousoftware.com'>http://www.system.wousoftware.com/</a><br /><br />

	Obrigado!<br /><br />

	WouSoftware<br /><br /><br />


	Esta � uma mensagem autom�tica, por favor n�o responda!";

	mail($system_user_email, $subject, $message, $headers);
	
	$mensagem_concluido[] = "";
	//echo "Sua nova senha foi gerada com sucesso e enviada para o seu email!<br />Por favor verifique seu email!<br /><br />";
	include "password-form.php";

}

?>