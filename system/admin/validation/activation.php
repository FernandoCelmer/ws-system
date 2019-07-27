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

$sql = mysql_query ("Select * From desktop_validation WHERE id_desktop_validation = '".@$_GET['id']."' "); 
$exibe = mysql_fetch_assoc($sql);

echo $exibe['id_desktop_validation'];

if($exibe['desktop_validation_activation'] == "FALSE"){

echo "<br/>", $exibe['desktop_validation_status'];

$sql = mysql_query("UPDATE desktop_validation SET desktop_validation_activation='TRUE' WHERE id_desktop_validation='".@$_GET['id']."'  ");

}else
{

echo "<br/>", $exibe['desktop_validation_status'];

$sql = mysql_query("UPDATE desktop_validation SET desktop_validation_activation='FALSE' WHERE id_desktop_validation='".@$_GET['id']."'  ");

}

header("Location: profile-form.php?id=".$_GET["id"]."");

?>