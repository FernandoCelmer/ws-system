<?php

session_start();
include "../../../includes/functions.php";
include "../../../includes/config.php";
include "serial.php";
session_checker();

if($_SESSION['system_user_level'] == 0){
header('location: ../system/user/');
}
if($_SESSION['system_user_level'] == 1){
}

$sql = mysql_query ("Select * From desktop_validation WHERE id_desktop_validation = '".@$_GET['id']."' "); 
$exibe = mysql_fetch_assoc($sql);

echo $exibe['id_desktop_validation'];

$serial=randString(4)."-".randString(4)."-".randString(4)."-".randString(4);
//echo $serial;


if($exibe['desktop_validation_status'] == "FALSE"){

echo "<br/>", $exibe['desktop_validation_status'];

$sql = mysql_query("UPDATE desktop_validation SET desktop_validation_status='TRUE', desktop_validation_serial='".$serial."'  WHERE id_desktop_validation='".@$_GET['id']."'  ");

}else
{

echo "<br/>", $exibe['desktop_validation_status'];

$sql = mysql_query("UPDATE desktop_validation SET desktop_validation_status='FALSE', desktop_validation_serial='XXXX-XXXX-XXXX-XXXX'  WHERE id_desktop_validation='".@$_GET['id']."'  ");

}

header("Location: profile-form.php?id=".$_GET["id"]."");

?>