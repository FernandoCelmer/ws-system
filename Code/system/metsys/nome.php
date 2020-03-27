<?php

include "../../includes/functions.php";
include "../../includes/config.php";

$sql = "SELECT * FROM system_user WHERE id_system_user=$id";
$query = mysql_query($sql);
while($sql = mysql_fetch_array($query)){
$nome = $sql["nome"];
echo "Resultados para o ID $idNome:$nome";
}

?>