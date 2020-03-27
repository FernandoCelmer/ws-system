<?php

session_start();

include "../../../../includes/functions.php";
include "../../../../includes/config.php";

session_checker();

if($_SESSION['system_user_level'] == 0){}
if($_SESSION['system_user_level'] == 1){}

$sql = mysql_query ("Select * From desktop_validation WHERE id_desktop_validation = '".@$_GET['id']."' "); 
$exibe = mysql_fetch_assoc($sql);


    //Definindo as credenciais
    $email = "fernandocelmer@gmail.com";
    $token = "30F909014E3A4A6FBAD7FB8890AF29B7";
    
    //URL da chamada para o PagSeguro
    $url = "https://ws.pagseguro.uol.com.br/v2/checkout/?email=" .$email ."&token=".$token;
    
    //Dados da compra
    $dadosCompra['currency'] = "BRL";
    $dadosCompra['itemId1'] = $exibe['id_desktop_validation'];
    $dadosCompra['itemDescription1'] = "Licenca Premium WControl";
    $dadosCompra['itemAmount1'] = "00.01";
    $dadosCompra['itemQuantity1'] = "1";
    $dadosCompra['itemWeight1'] = "0";
	$dadosCompra['senderEmail'] = $_SESSION['system_user_email'];
	
	
    
    //Transformando os dados da compra no formato da URL
    $dadosCompra = http_build_query($dadosCompra);
    
    //Realizando a chamada
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $dadosCompra);
    $respostaPagSeguro = curl_exec($curl);
    $http = curl_getinfo($curl);

    $respostaPagSeguro= simplexml_load_string($respostaPagSeguro);

	header('location: https://pagseguro.uol.com.br/v2/checkout/payment.html?code='.$respostaPagSeguro->code.'');	
	
	//echo '<a href="https://pagseguro.uol.com.br/v2/checkout/payment.html?code='.$respostaPagSeguro->code.'">Ir para o Checkout</a>';
?>