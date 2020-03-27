<?php

include "../../includes/functions.php";
include "../../includes/config.php";

//selecionando dados da tabela
$sql = mysql_query("SELECT * from system_user ORDER BY id_system_user");
$resultado = mysql_num_rows($sql);

//selecionando dados da tabela
$sql = "SELECT * FROM system_user";
$resultado = mysql_query($sql);

while($sql = mysql_fetch_array($resultado)){
$id = $sql["id_system_user"];
$nome = $sql["system_user_email"];

echo "<a href=nome.php?id=$id>$nome</a><br/>";
}


?>