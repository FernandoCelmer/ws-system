<?php

session_start();

if(!isset($_REQUEST['logmeout'])){
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<div class='w3-container'>
  <div class='w3-panel w3-green'>
    <center><p>Você realmente deseja sair do Painel de Controle?</p>

	<div class='w3-center'>
<div class='w3-bar'>
  <a class='w3-button w3-White' href=\"logout.php?logmeout\">Sim</a>
  <a class='w3-button w3-red' href=\"javascript:history.go(-1)\">Não</a>
</div>
</div>

<br/>
</center>
  </div>

</div>";


}
else{

	session_destroy();
	include "../system/login-form.php";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>WouSoftware - Entrar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../layout/w3css/4/w3.css">
</head>
<body>



</body>
</html>
