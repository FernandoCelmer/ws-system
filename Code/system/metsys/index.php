<?php

include "../../includes/functions.php";
include "../../includes/config.php";


$sql = mysql_query("SELECT * from system_user ORDER BY id_system_user DESC");
$resultado = mysql_num_rows($sql);

?>

<!DOCTYPE html>
<html>
<head>
<title>WouSoftware - Usuários</title>
<link rel="shortcut icon" type="image/x-icon" href="www.wousoftware.com/home/images/favicon.png" />
<meta name="description" content="A WouSoftware é uma Startup de Desenvolvimento de Softwares e Aplicativos. Atuando desde 2014 com uma equipe especializada para melhorar a esperiência dos seus usuários. Contato: wousoftware@gmail.com">
<meta charset="iso-8859-1">
</head>
<body class="">

    
    <table cellspacing="0" summary="Tabela de dados fictícios">
    
      <tbody>
        <tr>
           <?php for($n = 0; $n < $n_res; $n++){$resultado = mysqli_fetch_assoc($res);
		   echo'
       <tr>
          <td><center><b>*</b></center></td>
		  <td><left>'.$resultado['system_user_email'].'</left></td>
<td><center><a href="page-view.php?system_user_email='.$resultado['system_user_email'].'"><img src="img/view.jpg"" width="70" height="25"/></a></center></td>
<td><center><a href="page-edit.php?id_system_user='.$resultado['id_system_user'].'"><img src="img/edit.jpg"" width="70" height="25" /></a> </center>	
        </td>	
        </tr>
        ';}?>
          </td>
        </tr>      
      </tbody>
    </table>

	
	
	  <?php
        $res = mysql_query("select * from system_user"); /* Executa o comando SQL, no caso para pegar todos os dados e retornar o valor da consulta em uma variavel ($res)  */

        echo "<table class='w3-table w3-striped w3-border'>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                </tr>";

        /* Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
        while ($mostrar = mysql_fetch_array($res)) {

            echo "<tr>
                    <td><a href='page-view.php?id=" .$mostrar['id_system_user'] . "' >ID</a></td>
                    <td>" .$mostrar['system_user_email'] . "</td>
                </tr>";
        }
        echo "</table>";


        ?> 
	
	<a href='visualizar.php?id=<?php echo $mostrar['id_system_user']; ?>' >ID</a>
	
</body>
</html>
