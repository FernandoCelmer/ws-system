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

$sql = mysql_query("INSERT INTO desktop_validation (id_desktop_software, id_system_user, desktop_validation_serial, desktop_validation_status, desktop_validation_activation, desktop_validation_datetime) 
VALUES(
'" . $_POST["id_desktop_software"] . "',
'" . $_SESSION["id_system_user"] . "',
'" . $_POST["desktop_validation_serial"] . "'
,'FALSE','FALSE',now())") ;
$id_res = mysql_insert_id();	

//echo $id_res;
//header("Location: profile.php?id=$id_res");
header("Location: index.php");

?>