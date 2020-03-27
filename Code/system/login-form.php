<!DOCTYPE html>
<html>
<head>
<title>WouSoftware - Entrar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../layout/w3css/4/w3.css">

<style>
img{max-width:100%;height:auto;}
</style>

</head> 
 <body>

<div class="w3-bar w3-white w3-border w3-large">
<a href="../home/"><p align="center"><img src="../layout/images/Logotipo_WouSoftware.png" alt="Logotipo WouSoftware"></p></a>
</div>

<div class="w3-bar w3-border w3-black">
  <a href="login-form.php" class="w3-bar-item w3-button w3-mobile w3-grey" style="width:33%">Entrar</a>
  <a href="register-form.php" class="w3-bar-item w3-button w3-mobile" style="width:33%">Cadastrar-se</a>
  <a href="password-form.php" class="w3-bar-item w3-button w3-mobile" style="width:33%">Recuperar Senha</a>
</div>

<div class="w3-row">
	<div class="w3-col" style="width:20%"><p></p></div>
	<div class="w3-col" style="width:60%"><p>
	
<div class="w3-container w3-white">
<center><h3>Entrar</h3></center>
</div>


	<?php for($n = 0; $n < count(@$mensagem_preencher_campos); $n++)echo '
<div class="w3-panel w3-red">
<center>Por favor, todos campos devem ser preenchidos!</center>
</div>'?>
  
	<?php for($n = 0; $n < count(@$mensagem_campo_errado); $n++)echo '
<div class="w3-panel w3-red">
<center>Este email e/ou senha não são válidos!<br/> Por favor tente novamente!</center>
</div>'?>

	<?php for($n = 0; $n < count(@$mensagem_active_certo); $n++)echo '
<div class="w3-panel w3-green">
<center><strong>Seu conta foi ativada com sucesso!</strong><br/>Você pode fazer o login logo abaixo!</center>
</div>'?>
  
	<?php for($n = 0; $n < count(@$mensagem_active_errado); $n++)echo '
<div class="w3-panel w3-red">
<center><strong>Não foi possível ativar a sua conta!</strong></center>
</div>'?>

<form class="w3-container" action="login.php" method="post" name="" id="">
<label class="w3-text-black"><b>Endereço de E-mail:</b></label>
<input class="w3-input w3-border" name="system_user_email" type="email" class="form-control" id="system_user_email">
<br/>
<label class="w3-text-black"><b>Senha:</b></label>
<input class="w3-input w3-border" name="system_user_password" type="password" class="form-control" id="system_user_password">
<br/>
<center><button class="w3-btn w3-black" name="Submit" type="submit" value="Submit">Submeter</button></center>
</form>
	</p>
	
	</div>
    <div class="w3-col" style="width:20%"><p></p></div>
</div>


</body>
</html>