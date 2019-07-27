<!DOCTYPE html>
<html>
<head>
<title>WouSoftware - Cadastre-se</title>
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
  <a href="login-form.php" class="w3-bar-item w3-button w3-mobile" style="width:33%">Entrar</a>
  <a href="register-form.php" class="w3-bar-item w3-button w3-mobile w3-grey" style="width:33%">Cadastrar-se</a>
  <a href="password-form.php" class="w3-bar-item w3-button w3-mobile" style="width:33%">Recuperar Senha</a>
</div>

<div class="w3-row">
	<div class="w3-col" style="width:20%"><p></p></div>
	<div class="w3-col" style="width:60%"><p>
	
<div class="w3-container w3-white">
<center><h3>Cadastre-se</h3></center>
</div>

	<?php for($n = 0; $n < count(@$mensagem_campo_name); $n++)echo '
<div class="w3-panel w3-red">
<center>Campo <b>Nome</b> é requerido para cadastro!</center>
</div>'?>

   <?php for($n = 0; $n < count(@$mensagem_campo_code); $n++)echo '
<div class="w3-panel w3-red">
<center> <b>CPF/CNPJ</b> é requerido para cadastro!</center>
</div>'?>

   <?php for($n = 0; $n < count(@$mensagem_campo_email); $n++)echo '
<div class="w3-panel w3-red">
<center>Campo <b>E-mail</b> é requerido para cadastro!</center>
</div>'?>
 
   <?php for($n = 0; $n < count(@$mensagem_campo_phone); $n++)echo '
<div class="w3-panel w3-red">
<center>Campo <b>Telefone</b> é requerido para cadastro!</center>
</div>'?>

   <?php for($n = 0; $n < count(@$mensagem_campo_date); $n++)echo '
<div class="w3-panel w3-red">
<center>Campo <b>Data de Nascimento</b> é requerido para cadastro!</center>
</div>'?>

<form class="w3-container" name="cadastro" method="post" action="register.php">
<label class="w3-text-black"><b>Nome Completo:</b></label>
<input class="w3-input w3-border" style="text-transform:uppercase" class="form-control" name="system_user_name" type="text" id="system_user_name" value="<?php echo $_POST['system_user_name']; ?>">
<br/>
<div class="w3-row">
  <div class="w3-half">
  <label class="w3-text-black"><b>CPF/CNPJ:</b></label>
    <input class="w3-input w3-border" name="system_user_code" type="text" id="system_user_code" value="<?php echo $_POST['system_user_code']; ?>">
  </div>
  <div class="w3-half">
  <label class="w3-text-black"><b>Data de Nascimento:</b></label>
    <input class="w3-input w3-border" name="system_user_date" type="date" id="system_user_date" value="<?php echo $_POST['system_user_date']; ?>">
  </div>
</div>
<br/>
<label class="w3-text-black"><b>Endereço de E-mail:</b></label>
<input class="w3-input w3-border" name="system_user_email" type="email" id="system_user_email" value="<?php echo $_POST['system_user_email']; ?>">
<br/>
<label class="w3-text-black"><b>Telefone:</b></label>
<input class="w3-input w3-border" name="system_user_phone" type="phone" id="system_user_phone" value="<?php echo $_POST['system_user_phone']; ?>">
<br/>
<center><button class="w3-btn w3-black" name="Submit" type="submit" value="Submit">Submeter</button></center>




</form>
	</p>
	
	</div>
    <div class="w3-col" style="width:20%"><p></p></div>
</div>


</body>
</html>