<?php

session_start();

include "../../../includes/functions.php";
include "../../../includes/config.php";
session_checker();

if($_SESSION['system_user_level'] == 0){

	header('location: ../systm/user/');
}

if($_SESSION['system_user_level'] == 1){


}

echo $_GET["id"]; 
echo "<br/>"
;

$sql = mysql_query ("Select * From system_user where id_system_user='".@$_GET['id']."'"); 
$exibe = mysql_fetch_assoc($sql);

echo $exibe['system_user_name'] ;
echo "<br/>";

echo $exibe['system_user_email'] ;
echo "<br/>";

echo $exibe['system_user_code'] ;
echo "<br/>";

echo $exibe['system_user_date'] ;
echo "<br/>";

echo $exibe['system_user_phone'] ;
echo "<br/>";

echo $exibe['system_user_ip'] ;
echo "<br/>";

echo $exibe['system_user_date_register'] ;
echo "<br/>";

echo $exibe['system_user_date_login'] ;





?>