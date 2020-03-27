<?php							
					
$sql = mysql_query ("Select * From support_ticket A where id_support_ticket='". $_POST["id_support_ticket"] ."'"); 
$exibe = mysql_fetch_assoc($sql);

					$headers = "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\n";
					$to = $exibe['system_user_email'];
					$headers .= "From: WouSoftware<wousoftware@wousoftware.com>"; // TEU DOMÌNIO E TEU EMAIL 
					$subject = "WouSoftware - Ticket #$id_res";
					$mensagem = "
					
					<br/>
					Prezado <strong>". $exibe["system_user_name"] ."</strong>.
					<br/><br/>
								<br/>
								Nova Mensagem!
								
								Seu ticket foi respondido em nosso <a href ='http://www.wousoftware.com/system/'>Painel de Controle</a>.								
								<br/><br/>
								<br/> 
								
								Esta é uma mensagem automática, por favor não responda!";

					mail($to, $subject, $mensagem, $headers);
					

/*--------------------------------------------------------------------------------------------------------------------------------*/
					
$sql = mysql_query ("Select * From support_ticket where id_support_ticket='". $_POST["id_support_ticket"] ."'"); 
$exibe = mysql_fetch_assoc($sql);

					$headers = "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\n";
					$to = $exibe['system_user_email'];
					$headers .= "From: WouSoftware<wousoftware@wousoftware.com>"; // TEU DOMÌNIO E TEU EMAIL 
					$subject = "WouSoftware - Ticket #$id_res";
					$mensagem = "
					
					<br/><br/>
					Nova Mensagem!									
					<br/><br/>
					
					
					
					<br/>";

					mail($to, $subject, $mensagem, $headers);
					
?>