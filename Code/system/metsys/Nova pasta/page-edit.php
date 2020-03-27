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

$sql = mysql_query ("Select * From system_user where id_system_user='".@$_GET['id']."'"); 
$text = mysql_fetch_assoc($sql);

if(@$_POST['submeter'] == 'Submeter'){

if(count(@$erro) == 0){
$query = "UPDATE system_user set 
system_user_name = '".$_POST['nome']."', 
system_user_code = '".$_POST['system_user_code']."',
system_user_date = '".$_POST['system_user_date']."', 
system_user_phone = '".$_POST['system_user_phone']."' 
where id_system_user = '".$text['id_system_user']."'";

header('location: page-view.php?id='.$text['id_system_user'].'');
}


?>

<!DOCTYPE html>
<html>
<head>
<title>WouSoftware</title>
<meta charset="iso-8859-1">
</head>
<body>

</body>
</html>
