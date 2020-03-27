<?php

function session_checker(){

	if(!isset($_SESSION['id_system_user'])){

		header ("Location:login-form.php");

		exit(); 
	}
}

function verifica_email($EMAIL){

    list($User, $Domain) = explode("@", $EMAIL);
    $result = @checkdnsrr($Domain, 'MX');

    return($result);

}

$ip = getenv("REMOTE_ADDR");
?>