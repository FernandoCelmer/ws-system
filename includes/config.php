<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

if (eregi("config.php", $_SERVER['SCRIPT_NAME'])){ die ("<script>alert('Sem permição de acesso !')</script>"); }

define('BD_USER', 'db_system');
define('BD_PASS', '5051246Wou@');
define('BD_NAME', 'db_system');

mysql_connect('db-system.mysql.uhserver.com', BD_USER, BD_PASS);
mysql_select_db(BD_NAME);
?>