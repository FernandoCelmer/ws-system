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

$query = "SELECT * FROM system_user where system_user_email = '".@$_GET['system_user_email']."'";
$resultado = mysqli_query($db, $query);
$n_res = mysqli_num_rows($resultado);
if($n_res == 0){
$erro[] = "Usuario nao encontrado";
echo '<script language="JavaScript">alert("Perfil nao encontrado!")</script>';
exit();}
else
$resultado = mysqli_fetch_assoc($resultado);



?>

<!DOCTYPE html>
<html>
<head>
<title>WouSoftware - Usuários</title>
<meta charset="iso-8859-1">
</head>
<body>
<?php echo @$resultado['system_user_email']; ?>
</body>
</html>
