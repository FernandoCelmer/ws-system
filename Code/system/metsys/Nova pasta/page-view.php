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

?>

<!DOCTYPE html>
<html>
<head>
<title>WouSoftware</title>
<meta charset="iso-8859-1">
</head>
<body>
<?php echo @$text['system_user_email']; ?>
</body>
</html>
