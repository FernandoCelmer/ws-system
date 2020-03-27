<?php					
					$headers = "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\n";
					$to = $exibe['system_user_email'];
					$headers .= "From: WouSoftware<wousoftware@wousoftware.com>"; // TEU DOMÌNIO E TEU EMAIL 
					$subject = "WouSoftware - Ticket #$id_res";
					$mensagem = "
					
					<center>
					<a href='http://www.wousoftware.com'>
                    <img border='0' src='http://www.wousoftware.com/layout/images/Logotipo_WouSoftware.png' width='500' height='68'></a>
					</center>
					<br/>
					Prezado <strong>'". $exibe["system_user_name"] ."'</strong>.
								<br/>
								Obrigado por entrar em contato conosco!
								
								Seu ticket foi aberto com sucesso em nosso <a href ='http:// www.wousoftware.com'>Portal de Controle</a>.
								Iremos responder o mais rápido possível.								
								<br/><br/>

								<strong>E-Número do Ticket</strong>: '". $_POST["id_support_ticket"] ."'
								<br/> 
								<strong>Assunto:</strong>: '" . $_POST["support_ticket_subject"] . "'
								<br /><br/> 
								<br/> 
								Esta é uma mensagem automática, por favor não responda!";

					mail($to, $subject, $mensagem, $headers);
					
?>