<?php
############################
#....Script Criado Por:....#
#......Neander Araújo......#
#..neander@eumesmo.com.br..#
#http://www.eumesmo.com.br/#
############################
#-------Altere de Sua Conexao Com a Base de Dados-------
$mysql_usuario="db_system"; //Usuario da base de dados
$mysql_password="5051246Wou@";//Senha da base de dados
$mysql_database="db_system";//Nome da base de dados
$mysql_host="db-system.mysql.uhserver.com";//Host de sua base de dados, Ex:Localhost
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