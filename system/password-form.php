<!DOCTYPE html>
<html>
<head>
<title>WouSoftware -  Cadastre-se</title>
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
  <a href="login-form.php"    class="w3-bar-item w3-button w3-mobile" style="width:33%">Entrar</a>
  <a href="register-form.php" class="w3-bar-item w3-button w3-mobile" style="width:33%">Cadastrar-se</a>
  <a href="password-form.php" class="w3-bar-item w3-button w3-mobile w3-grey" style="width:33%">Recuperar Senha</a>
</div>

<div class="w3-row">
	<div class="w3-col" style="width:20%"><p></p></div>
	<div class="w3-col" style="width:60%"><p>
	
<div class="w3-container w3-white">
<center><h3>Recuperar Senha</h3></center>
</div>

	 <?php for($n = 0; $n < count(@$mensagem_preencher_campo); $n++)echo '
<div class="w3-panel w3-red">
<center>Você esqueceu de preencher seu email.<br/>Use o mesmo email que utilizou em seu cadastro.</center>
</div>'?>
  
  <?php for($n = 0; $n < count(@$mensagem_database); $n++)echo '
<div class="w3-panel w3-red">
<center>Este email não está cadastrado em nosso sistema.</center>
</div>'?>
  
  <?php for($n = 0; $n < count(@$mensagem_concluido); $n++)echo '
<div class="w3-panel w3-green">
<center>Sua nova senha foi gerada com sucesso!<br/>Por favor verifique seu email!</center>
</div>'?>

<form class="w3-container" name="form1" method="post" action="password.php">
<label class="w3-text-black">Endereço de E-mail:</label>
<input name="system_user_email" type="email" id="system_user_email" class="w3-input w3-border">
<br/>
<input name="recupera" type="hidden" id="recupera" value="recupera" />
<center><button type="submit" name="Submit" value="Submit" class="w3-btn w3-black">Submeter</button></center>
</form>

	</p>
	
	</div>
    <div class="w3-col" style="width:20%"><p></p></div>
</div>


</body>
</html>