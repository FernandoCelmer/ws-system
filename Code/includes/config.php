<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

if (eregi("config.php", $_SERVER['SCRIPT_NAME'])){ die ("<script>alert('Sem permi��o de acesso !')</script>"); }

define('BD_USER', 'user');
define('BD_PASS', 'password');
define('BD_NAME', 'name');

mysql_connect('host', BD_USER, BD_PASS);
mysql_select_db(BD_NAME);
?>