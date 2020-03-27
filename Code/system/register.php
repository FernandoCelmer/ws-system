<?php

include "../includes/config.php";
include "../includes/functions.php";

$system_user_name = trim($_POST['system_user_name']);
$system_user_code = trim($_POST['system_user_code']);
$system_user_date = trim($_POST['system_user_date']);
$system_user_email = trim($_POST['system_user_email']);
$system_user_phone = trim($_POST['system_user_phone']);
$system_user_ip = trim($_POST['system_user_ip']);




/* Vamos checar algum erro nos campos, mas tenha em mente que existem formas bem mais eficientes de tratar os dados que são enviados ou n&atilde;o pelos campos do formulário */

if ((!$system_user_name) || (!$system_user_code) || (!$system_user_email)|| (!$system_user_phone) || (!$system_user_date)){

	//echo "ERRO: Voc&ecirc; n&atilde;o enviou as seguintes informaç&otilde;es requeridas para o cadastro! <br /> <br />";
	if (!$system_user_name){
		$mensagem_campo_name[] = "";
	}

	if (!$system_user_code){
		$mensagem_campo_code[] = "";
	}
	
	if (!$system_user_email){
		$mensagem_campo_email[] = "";
	}
	
	if (!$system_user_phone){
		$mensagem_campo_phone[] = "";
	}	

	if (!$system_user_date){
		$mensagem_campo_date[] = "";
	}	
	
	//echo "<br />Preencha os campos necess&aacute;rios abaixo: <br /><br />";
	include "register-form.php"; 

}
else{

	/* Vamos checar se o nome de Usuário escolhido e/ou Email já existem no banco de dados */
	$sql_email_check = mysql_query("SELECT COUNT(id_system_user) FROM system_user WHERE system_user_email='{$system_user_email}'");
	$eReg = mysql_fetch_array($sql_email_check);
	$email_check = $eReg[0];	
	
	if (($email_check > 0)){
		//echo "<strong>ERRO </strong>- Por favor corrija os seguintes erros abaixo: <br /> <br />";

		if ($email_check > 0){
		    //echo "Este email ( <strong>".$system_user_email."</strong> ) j&aacute; est&aacute; sendo utilizado.<br />Por favor utilize outra conta de email! <br />";
		    $mensagem_email[] = "";
			unset($system_user_email);
		}

		//echo "<br />";
		include "../system/register-form.php";
	}
	else
	{

		$system_user_email = strtolower(trim($_POST['system_user_email']));
		$char = "@";
		$pos = strpos($system_user_email, $char);

        if ($pos === false){

			echo "<strong>ERRO:</strong><br />";
			echo "O endere&ccedil;o de email [ <strong><em>".$system_user_email."</em></strong> ] que est&aacute; tentando utilizar n&atilde;o &eacute; v&aacute;lido.<br />";
			echo "Por favor, utilize um email v&aacute;lido.<br /><br />";
			include "formulario_cadastro.php"; 

        }else{

            $v_mail = verifica_email($system_user_email);

            if ($v_mail){
                /* Se passarmos por esta verificação ilesos é hora de finalmente cadastrar
	    	    os dados Vamos utilizar uma função para gerar uma senha randômica */ 
				
				function makeRandomPassword(){
					$salt = "abchefghjkmnpqrstuvwxyz0123456789";
					srand((double)microtime()*1000000); 
					$i = 0;
					while($i <= 7){

						$num = rand() % 33;
						$tmp = substr($salt, $num, 1);
						$pass = $pass . $tmp;
						$i++;
					}
					return $pass;
				}

				$senha_randomica = makeRandomPassword();

				$system_user_password = md5($senha_randomica);

				// Inserindo os dados no banco de dados

				
				$str = $system_user_name;
				$str = strtoupper($str);
				
				$sql = mysql_query("INSERT INTO system_user (system_user_name,    system_user_code,      system_user_email,      system_user_phone, system_user_date,     system_user_password,  system_user_ip, system_user_date_register) 
												    VALUES('{$str}','{$system_user_code}','{$system_user_email}', '{$system_user_phone}', '{$system_user_date}', '{$system_user_password}', '{$ip}', now())") 
									or die( mysql_error() );

				if (!$sql){

					echo "Ocorreu algum erro ao criar sua conta, por favor entre em contato com o Administrador do Sistema.";

				}
				else {

					$id_system_user = mysql_insert_id();

					// Enviar um email ao usu&aacute;rio para confirmação e ativar o cadastro!
					$headers = "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\n";
					$headers .= "From: WouSoftware<wousoftware@wousoftware.com>"; // TEU DOMÌNIO E TEU EMAIL 
					$subject = "Confirmação de Cadastro";
					$mensagem = "
					
					<center>
					<a href='http://www.wousoftware.com'>
                    <img border='0' src='http://system.wousoftware.com/img/wousoftware.png' width='500' height='68'></a>
					</center>
					<br/>
					Prezado <strong>$w_nome</strong>,
								<br/>
								Obrigado pelo seu cadastro em nosso site!
								<a href ='http:// www.wousoftware.com'>www.wousoftware.com</a>
								
								<br/><br/>
								Para confirmar seu cadastro e ativar sua conta, podendo assim acessar áreas exclusivas, 
								por favor clique no link abaixo ou copie e cole o link na barra de endereço do seu navegador.
								<br /><br /> 

							<a href ='http://www.wousoftware.com/system/activate.php?id=$id_system_user&code=$system_user_password'>
						              http://www.wousoftware.com/system/activate.php?id=$id_system_user&code=$system_user_password

								</a>
								<br/> <br/>
								
								Após a ativação de sua conta, você poderá ter acesso ao conteúdo exclusivo, 
								efetuando o login com os dados abaixo:
								<br/> <br/> 

								<strong>E-mail</strong>: {$system_user_email}
								<br/> 
								<strong>Senha</strong>: {$senha_randomica}
								<br /><br/> 
								<br/> 
								Esta é uma mensagem automática, por favor não responda!";

					mail($system_user_email, $subject, $mensagem, $headers);

					$mensagem_conta_criada[] = "";
					$mensagem_confirmar_email[] = "";
					include "register-confirm.php";
					
					//echo "Foi enviado para seu email - ( ".$system_user_email." ) um pedido de confirma&ccedil;&atilde;o de cadastro, 
							//por favor verifique e sigas as instru&ccedil;&otilde;es!";
				}
            }else{

                echo "<strong>ERRO:</strong><br />";
                echo "O endere&ccedil;o de email [ <strong><em>".$system_user_email."</em></strong> ] que est&aacute; tentando utilizar n&atilde;o &eacute; v&aacute;lido.<br />";
                echo "Por favor, utilize um email v&aacute;lido.<br /><br />";
				include "../system/register-confirm.php"; 
            }
        }
    }
}

?>
