<?php

session_start();

include "../includes/functions.php";

session_checker();

if($_SESSION['system_user_level'] == 0){

	echo "User";
	header('location: ../system/user/');
	
}

if($_SESSION['system_user_level'] == 1){

	echo "Admin";
	header('location: ../system/admin/');
}
 
echo "<a href=\"logout.php\">Sair</a>";

?>