<?php

session_start();

include "../../../includes/functions.php";
include "../../../includes/config.php";

session_checker();

if($_SESSION['system_user_level'] == 0){


}

if($_SESSION['system_user_level'] == 1){


}

$sql = mysql_query("INSERT INTO support_message (id_support_ticket, id_system_user, support_message, support_message_datetime) 
VALUES(
'" . $_POST["id_support_ticket"] . "',
'" . $_SESSION["id_system_user"] . "',
'" . $_POST["support_message"] . "', now() )") ;

//echo $_SESSION["id_system_user"];

$sql = mysql_query ("Select * From support_ticket A inner join system_user B on A.id_system_user = B.id_system_user where id_support_ticket='". $_POST["id_support_ticket"] ."'"); 
$exibe = mysql_fetch_assoc($sql);

					$headers = "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\n";
					$to = $exibe['system_user_email'];
					$headers .= "From: WouSoftware<wousoftware@wousoftware.com>"; // TEU DOMÌNIO E TEU EMAIL 
					$subject = "WouSoftware - Ticket #" . $exibe["id_support_ticket"] . "";
					$mensagem = "
					
					<br/>
					Prezado <strong>". $exibe["system_user_name"] ."</strong>.
					<br/><br/>
								<br/>
								Nova Mensagem!
								
								Você enviou uma nova mensagem em nosso <a href ='http://www.wousoftware.com/system/'>Painel de Controle</a>.
								Iremos responder o mais rápido possível.								
								<br/><br/>
								<br/> 
								
								Esta é uma mensagem automática, por favor não responda!";

					mail($to, $subject, $mensagem, $headers);
					
	$to = "wousoftware@gmail.com";
	$subject = "WouSoftware - Ticket #" . $exibe["id_support_ticket"] . "";
	$headers .= "From: WouSoftware<wousoftware@wousoftware.com>";
	$mensagem = "Nova Mensagem #" . $exibe["id_support_ticket"] . "";
	mail($to, $subject, $mensagem, $headers);

header("Location: profile.php?id=".$_POST["id_support_ticket"]."");

?>