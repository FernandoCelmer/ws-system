<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

if (eregi("config.php", $_SERVER['SCRIPT_NAME'])){ die ("<script>alert('Sem permição de acesso !')</script>"); }

define('BD_USER', '#');
define('BD_PASS', '#');
define('BD_NAME', '#');

mysql_connect('#', BD_USER, BD_PASS);
mysql_select_db(BD_NAME);
?>