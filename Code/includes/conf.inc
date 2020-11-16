<?php
#-------Conexao Com a Base de Dados-------
$mysql_usuario="#"; //Usuario da base de dados
$mysql_password="#";//Senha da base de dados
$mysql_database="#";//Nome da base de dados
$mysql_host="#";//Host de sua base de dados, Ex:Localhost
$conexion = @mysql_connect($mysql_host, $mysql_usuario, $mysql_password);
@mysql_select_db($mysql_database, $conexion);
#----------Funçao Data----------------------------
$s = date("D");
$m = date("n");
$dia = date("d");
$ano = date("Y");
$semana = array("Sun" => "Domingo", "Mon" => "Segunda", "Tue" => "Terça", "Wed" => "Quarta", "Thu" => "Quinta", "Fri" => "Sexta", "Sat" => "Sabado"); /* Dias da Semana. */
$mes = array(1 =>"Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"); /* Meses */
$formatodata="d/m/Y";

ini_set('display_errors', 0 );
error_reporting(0);
?>