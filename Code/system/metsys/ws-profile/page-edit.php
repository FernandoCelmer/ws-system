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

$id_system_user = $_GET['id_system_user'];
$query = "SELECT * from system_user where id_system_user=$id_system_user";
$resultado = mysqli_query($db, $query);
$n_res = mysqli_num_rows($resultado);
if($n_res > 0){
$resultado = mysqli_fetch_assoc($resultado);

if(@$_POST['mudar1'] == '  Alterar Dados  '){

if(count(@$erro) == 0){
$query = "UPDATE system_user set 
system_user_name = '".$_POST['nome']."', 
system_user_code = '".$_POST['system_user_code']."',
system_user_date = '".$_POST['system_user_date']."', 
system_user_phone = '".$_POST['system_user_phone']."' 
where id_system_user = '".$resultado['id_system_user']."'";

mysqli_query($db, $query);
echo '<script language="JavaScript">alert("Dados alterados com sucesso!")</script>';}
header('location: /system/admin/ws-profile/page-view.php?system_user_email='.$resultado['system_user_email'].'');
}

if(@$_POST['mudar2'] == '  Alterar Dados  '){

if(count(@$erro) == 0){
$query = "UPDATE system_user set 
system_user_email = '".$_POST['system_user_email']."',
system_user_password = '".$_POST['system_user_password']."', 
system_user_status = '".$_POST['system_user_status']."' 
where id_system_user = '".$resultado['id_system_user']."'";

mysqli_query($db, $query);
echo '<script language="JavaScript">alert("Dados alterados com sucesso!")</script>';}
header('location: /system/admin/ws-profile/page-view.php?system_user_email='.$resultado['system_user_email'].'');
}

$query = "SELECT * from system_user where id_system_user= '".$resultado['id_system_user']."'";
$resultado = mysqli_query($db, $query);
$resultado = mysqli_fetch_assoc($resultado);

}
?>

<!DOCTYPE html>
<html>
<head>
<title>WouSoftware - Usuários</title>
<meta charset="iso-8859-1">
</head>
<body>


 <form id="alterar_dados" name="alterar_dados" method="post" action="page-edit.php?id_system_user=<?php echo $id_system_user ?>">
 <table>
          <thead>
            <tr>
              <th colspan="2">Informações de Registro</th>
            </tr>
          </thead>
          <tbody>
            <tr class="light">
              <td>Nome</td>
              <td><input name="nome" type="text" id="nome" value="<?php echo @$resultado['system_user_name']; ?>" maxlength="50" /></td>
            </tr>
            <tr class="dark">
              <td>CPF</td>
              <td><input name="system_user_code" type="text" id="system_user_code" value="<?php echo @$resultado['system_user_code']; ?>" maxlength="50"  /></td>
            </tr>
            <tr class="light">
              <td>Data</td>
              <td><input name="system_user_date" type="text" id="system_user_date" value="<?php echo @$resultado['system_user_date']; ?>" maxlength="50"  /></td>
              </tr>
			<tr class="dark">
              <td>Telefone</td>
              <td><input name="system_user_phone" type="text" id="system_user_phone" value="<?php echo @$resultado['system_user_phone']; ?>" maxlength="50" /></td>
              </tr>
			<tr class="light">
              <td>Localização</td>
              <td><input name="system_user_ip" type="text" id="system_user_ip" value="<?php echo @$resultado['system_user_ip']; ?>" maxlength="50" readonly="true" /></td>
              </tr>
			<tr class="dark">
              <td colspan="2"><p align="center"><input type="submit" name="mudar1" id="mudar1" value="  Alterar Dados  " style="font-size: 11pt" /></td>
              </tr>
          </tbody>
        </table>
        </form>


      <br/>
	  
         <form id="alterar_dados" name="alterar_dados" method="post" action="page-edit.php?id_system_user=<?php echo $id_system_user ?>">
 <table>
          <thead>
            <tr>
              <th colspan="2">Informações de Login</th>
            </tr>
          </thead>
          <tbody>
            <tr class="light">
              <td>E-mail:</td>
              <td>
				<input name="system_user_email" type="text" id="system_user_email" value="<?php echo @$resultado['system_user_email']; ?>" maxlength="50"  size="20" /></td>
            </tr>
            <tr class="dark">
              <td>Senha:</td>
              <td>
				<input name="system_user_password" type="password" id="system_user_password" value="<?php echo @$resultado['system_user_password']; ?>" maxlength="50"  size="20" /></td>
              </tr>
			<tr class="light">
              <td>Status:</td>
              <td>
				<input name="system_user_status" type="text" id="system_user_status" value="<?php echo @$resultado['system_user_status']; ?>" maxlength="50"  size="20" /></td>
              </tr>
			  <tr class="dark">
			
              <td>Log:</td>
              <td>
				<input name="system_user_date_login" type="text" id="system_user_date_login" value="<?php echo @$resultado['system_user_date_login']; ?>" maxlength="20" readonly="true" size="20" /></td>
              </tr>
			<tr class="light">
              <td>&nbsp;</td>
              <td>
				<input name="campo" type="text" id="bd2" maxlength="20" readonly="true" size="20" /></td>
              </tr>
			<tr class="dark">
              <td colspan="2"><p align="center">
				<input type="submit" name="mudar2" id="mudar1" value="  Alterar Dados  " style="font-size: 11pt" /></td>
              </tr>          </tbody>
        </table>
        </form>
</body>
</html>
