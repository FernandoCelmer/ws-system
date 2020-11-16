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
  <a href="login-form.php" class="w3-bar-item w3-button w3-mobile" style="width:33%">Entrar</a>
  <a href="register-form.php" class="w3-bar-item w3-button w3-mobile w3-grey" style="width:33%">Cadastrar-se</a>
  <a href="password-form.php" class="w3-bar-item w3-button w3-mobile" style="width:33%">Recuperar Senha</a>
</div>

<div class="w3-row">
	<div class="w3-col" style="width:20%"><p></p></div>
	<div class="w3-col" style="width:60%"><p>
	
<div class="w3-container w3-white">
<center><h3>Concluído!</h3></center>
</div>

  
	  <?php for($n = 0; $n < count(@$mensagem_email); $n++)echo '
<div class="w3-panel w3-red">
<center>Este <b>E-MAIL</b> já está cadastrado!<br/>Por favor utilize outro nome de email.</center>
</div>'?>

   <?php for($n = 0; $n < count(@$mensagem_conta_criada); $n++)echo '
<div class="w3-panel w3-green">
<center>Conta criada com Sucesso!</center>
</div>'?>
  
   <?php for($n = 0; $n < count(@$mensagem_confirmar_email); $n++)echo '
<div class="w3-panel w3-green">
<center>Verifique seu e-mail para confirmação do cadastro.</center>
</div>'?>


	</p>
	
	</div>
    <div class="w3-col" style="width:20%"><p></p></div>
</div>


</body>
</html>