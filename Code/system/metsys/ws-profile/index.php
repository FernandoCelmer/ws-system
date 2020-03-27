<?php

session_start();

include "../../../includes/functions.php";
include "../../../includes/config.php";
session_checker();

if($_SESSION['system_user_level'] == 0){

	header('location: ../system/user/');
}

if($_SESSION['system_user_level'] == 1){


}

$query = "SELECT * from system_user where id_system_user = '".$_SESSION['id_system_user']."'";
$resultado = mysqli_query($db, $query);
$resultado = mysqli_fetch_assoc($resultado);

$query = "SELECT * FROM system_user ORDER BY id_system_user DESC";
$res = mysqli_query($db, $query);
$n_res = mysqli_num_rows($res);
?>

<!DOCTYPE html>
<html>
<head>
<title>WouSoftware - Usuários</title>
<meta charset="iso-8859-1">
</head>
<body>

    <table>
      <thead>
        <tr>
		<center>
          <th>*</th>
          <th>E-mail</th>
		  <th>   </th>
		  <th>   </th>
		  </center>
        </tr>
      </thead>
      <tbody>
        <tr>
           <?php for($n = 0; $n < $n_res; $n++){$resultado = mysqli_fetch_assoc($res);
		   echo'
       <tr>
          <td><center><b>*</b></center></td>
		  <td><left>'.$resultado['system_user_email'].'</left></td>
		  
		  <td>
         <center><a href="/system/admin/ws-profile/page-view.php?system_user_email='.$resultado['system_user_email'].'"><img src="img/view.jpg"" width="70" height="25" /></a>  </center>
		 </td>
		 <td>
		    <center><a href="/system/admin/ws-profile/page-edit.php?id_system_user='.$resultado['id_system_user'].'"><img src="img/edit.jpg"" width="70" height="25" /></a>  </center>	
        </td>	
        </tr>
        ';}?>
          </td>
        </tr>      
      </tbody>
    </table>
   
</body>
</html>
