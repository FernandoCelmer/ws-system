<?php

session_start();

include "../../../includes/functions.php";
include "../../../includes/config.php";
session_checker();

if($_SESSION['system_user_level'] == 0){

	header('location: ../system/user/');
}

if($_SESSION['system_user_level'] == 1){


}

//selecionando dados da tabela
$sql = mysql_query("SELECT * from system_user ORDER BY id_system_user");
$resultado = mysql_num_rows($sql);

//selecionando dados da tabela
$sql = "SELECT * FROM system_user";
$resultado = mysql_query($sql);

while($sql = mysql_fetch_array($resultado)){
$id = $sql["id_system_user"];
$email = $sql["system_user_email"];


echo "<a href=profile.php?id=$id>$email</a><br/>";

}


?>