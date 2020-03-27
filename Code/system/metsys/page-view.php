<?php

include "../../includes/functions.php";
include "../../includes/config.php";

$sql = "SELECT * FROM system_user where id_system_user = '".@$_GET['id_system_user']."'";
$resultado = mysql_query($sql);

echo $resultado['id_system_user'];
?>
