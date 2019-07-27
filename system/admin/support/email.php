<?php					
					$headers = "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\n";
					$to = "wousoftware@gmail.com";
					$headers .= "From: WouSoftware<wousoftware@wousoftware.com>"; // TEU DOMÌNIO E TEU EMAIL 
					$subject = "WouSoftware - Ticket #$id_res";
					$mensagem = "
					
					<br/>
					<br/><br/>
					<br/>
					
					Nova Mensagem								
					
					<br/><br/>
					<br/>";

					mail($to, $subject, $mensagem, $headers);
					
?>