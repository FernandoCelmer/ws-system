<?php

session_start();

include "../../../includes/functions.php";
include "../../../includes/config.php";

session_checker();

if($_SESSION['system_user_level'] == 0){

	header('location: ../system/user/');
}

if($_SESSION['system_user_level'] == 1){


}

$sql = mysql_query("INSERT INTO support_ticket (id_system_user, id_support_category, support_ticket_subject, support_ticket_status, support_ticket_datetime_open) 
VALUES(
'" . $_SESSION["id_system_user"] . "',
'" . $_POST["id_support_category"] . "',
'" . $_POST["support_ticket_subject"] . "',
'ABERTO',
now() )") ;
$id_res = mysql_insert_id();

$sql = mysql_query ("Select * From support_ticket A inner join support_category B on A.id_support_category = B.id_support_category where id_system_user='" . $_SESSION["id_system_user"] . "'"); 
$ticket = mysql_fetch_assoc($sql);

$sql = mysql_query ("Select * From system_user where id_system_user='" . $_SESSION["id_system_user"] . "'"); 
$user = mysql_fetch_assoc($sql);

					$headers = "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\n";
					$to = $user['system_user_email'];
					$headers .= "From: WouSoftware<wousoftware@wousoftware.com>"; // TEU DOMÌNIO E TEU EMAIL 
					$subject = "WouSoftware - Ticket #$id_res";
					$mensagem = "
					
					<center>
					<a href='http://www.wousoftware.com'>
                    <img border='0' src='http://www.wousoftware.com/layout/images/Logotipo_WouSoftware.png' width='500' height='68'></a>
					</center>
					<br/>
					Prezado <strong>". $exibe["system_user_name"] ."</strong>.
					<br/><br/>
								<br/>
								Obrigado por entrar em contato conosco!
								
								Seu ticket foi aberto com sucesso em nosso <a href ='http://www.wousoftware.com/system/'>Painel de Controle</a>.
								Iremos responder o mais rápido possível.								
								<br/><br/>

								<strong>Categoria:</strong>: " . $exibe["support_category_attribute"] . "
								<br/><br/>
								<strong>Assunto:</strong>: " . $_POST["support_ticket_subject"] . "
								<br/><br/> 
								<br/> 
								Esta é uma mensagem automática, por favor não responda!";

					mail($to, $subject, $mensagem, $headers);	


header("Location: profile.php?id=$id_res");

?>