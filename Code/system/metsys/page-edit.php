<?php

include "../../includes/functions.php";
include "../../includes/config.php";
}

$w_id = $_GET['w_id'];
$query = "SELECT * from mysql_wousoftware where w_id=$w_id";
$resultado = mysqli_query($db, $query);
$n_res = mysqli_num_rows($resultado);
if($n_res > 0){
$resultado = mysqli_fetch_assoc($resultado);

if(@$_POST['mudar1'] == '  Alterar Dados  '){

if(count(@$erro) == 0){
$query = "UPDATE mysql_wousoftware set 
w_nome = '".$_POST['nome']."', 
w_cpf = '".$_POST['w_cpf']."',
w_data = '".$_POST['w_data']."', 
w_telefone = '".$_POST['w_telefone']."' 
where w_id = '".$resultado['w_id']."'";

mysqli_query($db, $query);
echo '<script language="JavaScript">alert("Dados alterados com sucesso!")</script>';}
header('location: /ws-admin/ws-profile/page-view.php?w_email='.$resultado['w_email'].'');
}

if(@$_POST['mudar2'] == '  Alterar Dados  '){

if(count(@$erro) == 0){
$query = "UPDATE mysql_wousoftware set 
w_email = '".$_POST['w_email']."',
w_senha = '".$_POST['w_senha']."', 
w_status = '".$_POST['w_status']."' 
where w_id = '".$resultado['w_id']."'";

mysqli_query($db, $query);
echo '<script language="JavaScript">alert("Dados alterados com sucesso!")</script>';}
header('location: /ws-admin/ws-profile/page-view.php?w_email='.$resultado['w_email'].'');
}

$query = "SELECT * from mysql_wousoftware where w_id= '".$resultado['w_id']."'";
$resultado = mysqli_query($db, $query);
$resultado = mysqli_fetch_assoc($resultado);

}
?>

<!DOCTYPE html>
<html>
<head>
<title>WouSoftware - Usuários</title>
<link rel="shortcut icon" type="image/x-icon" href="www.wousoftware.com/home/images/favicon.png" />
<meta name="description" content="A WouSoftware é uma Startup de Desenvolvimento de Softwares e Aplicativos. Atuando desde 2014 com uma equipe especializada para melhorar a esperiência dos seus usuários. Contato: wousoftware@gmail.com">
<meta charset="iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../../layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
<link href="../../layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">

<link href="../../layout/scripts/responsiveslides.js-v1.53/responsiveslides.css" rel="stylesheet" type="text/css" media="all">
</head>
<body class="">
<div class="wrapper row1">
  <header id="header" class="full_width clear">
    <div id="hgroup">
     <a href="http://www.wousoftware.com">
     <img border="0" src="../../img/wousoftware.png" width="500" height="68"></a>
    </div>
    <div id="header-contact">
      <ul class="list none">
        <li><span class="icon-facebook-sign icon-3x "></span><a href=""></a></li>
		<a href="http://www.facebook.com/wousoftware">Facebook</a>
        <li><span class="icon-twitter icon-3x "></span><a href=""></a></li>
		<a href="http://www.twitter.com/wousoftware">Twitter</a>
        <li><span class="icon-google-plus icon-3x "></span><a href=""></a></li>
		<a href="http://www.plus.google.com/+WousoftwareOficial">Google+</a>
      </ul>
    </div>
  </header>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row2">
<nav id="topnav">
    <ul class="clear">
      <li class="active"><a href="/ws-user/" title="">Painel de Controle</a></li>
      <li class="last-child"><a href="../../ws-logout.php" title="">Sair</a></li>
    </ul>
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- content -->
<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="sidebar_1" class="sidebar one_quarter first">
      <aside>
        <!-- ########################################################################################## -->
 <h2>Menu Principal</h2>
        <nav>
          <ul>
		    <li><a href="/ws-admin/">Painel de Controle</a></li>
			<li><a href="/ws-admin/ws-profile/">Usuários</a></li>
			 <ul>
                <li><a href="/ws-admin/ws-profile/page-view.php?w_email=<?php echo @$resultado['w_email']; ?>">View</a></li>
                <li><b><a href="/ws-admin/ws-profile/page-edit.php?w_id=<?php echo @$resultado['w_id']; ?>">Edit</a></b></li>
              </ul>
            </li>
			<li><a href="/ws-admin/ws-active/">Active</a></li>
			<li><a href="/ws-admin/ws-analytics/">Analytics</a></li>
			<li><a href="/ws-admin/ws-downloads/">Downloads</a></li>    			
		
			  </ul>
            </li>
          
			<li><a href="../../ws-logout.php">Sair</li></a>
          </ul>
        </nav>

        <nav>
          <ul>
          </ul>
        </nav>
		
        <!-- /nav -->
		  <h2>Informações</h2>
		<address>
		  <b>E-mail:</b>  <?php echo $resultado['w_email']; ?>
		  <br>
          </address>
          <section>
		
		  <br>
          <h2>Contato</h2>
          <address>
          <b>Skype:</b> wousoftware</address>
		<address>
          <b>Email:</b> <a href="#">wousoftware@gmail.com</a>
		  <br>
          </address>
          </section>
    
        <!-- ########################################################################################## -->
      </aside>
    </div>
    <!-- ################################################################################################ -->
    <div class="three_quarter">
      <section class="clear">
       <div class="tab-wrapper clear">
        <ul class="tab-nav clear">
           <li><a href="#tab-7">Profile / Edit</a></li>
        </ul>
        <div class="tab-container">
          <!-- Tab Content -->
          <div id="tab-7" class="tab-content clear">
           <ul class="nospace push50 clear">
          <li class="one_third first">
            <article>
      <table>
                                <thead>
            <tr>
              <th colspan="2">Usuário</th>
			</tr>
          </thead>
		  </table>
	  <p align="center"> 
	 <p align="center"><b></b><img src="<?php echo "../../../arquivos/$resultado[w_imagem]";?>" width="150" height="150" align="left" /></p>
       
       </article>
          </li>
		  
          <li class="one_third">
            <article>
 <form id="alterar_dados" name="alterar_dados" method="post" action="page-edit.php?w_id=<?php echo $w_id ?>">
 <table>
          <thead>
            <tr>
              <th colspan="2">Informações de Registro</th>
            </tr>
          </thead>
          <tbody>
            <tr class="light">
              <td>Nome</td>
              <td><input name="nome" type="text" id="nome" value="<?php echo @$resultado['w_nome']; ?>" maxlength="50" /></td>
            </tr>
            <tr class="dark">
              <td>CPF</td>
              <td><input name="w_cpf" type="text" id="w_cpf" value="<?php echo @$resultado['w_cpf']; ?>" maxlength="50"  /></td>
            </tr>
            <tr class="light">
              <td>Data</td>
              <td><input name="w_data" type="text" id="w_data" value="<?php echo @$resultado['w_data']; ?>" maxlength="50"  /></td>
              </tr>
			<tr class="dark">
              <td>Telefone</td>
              <td><input name="w_telefone" type="text" id="w_telefone" value="<?php echo @$resultado['w_telefone']; ?>" maxlength="50" /></td>
              </tr>
			<tr class="light">
              <td>Localização</td>
              <td><input name="w_ip" type="text" id="w_ip" value="<?php echo @$resultado['w_ip']; ?>" maxlength="50" readonly="true" /></td>
              </tr>
			<tr class="dark">
              <td colspan="2"><p align="center"><input type="submit" name="mudar1" id="mudar1" value="  Alterar Dados  " style="font-size: 11pt" /></td>
              </tr>
          </tbody>
        </table>
        </form>


            </article>
          </li>
		  
          <li class="one_third">
            <article>
         <form id="alterar_dados" name="alterar_dados" method="post" action="page-edit.php?w_id=<?php echo $w_id ?>">
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
				<input name="w_email" type="text" id="w_email" value="<?php echo @$resultado['w_email']; ?>" maxlength="50"  size="20" /></td>
            </tr>
            <tr class="dark">
              <td>Senha:</td>
              <td>
				<input name="w_senha" type="password" id="w_senha" value="<?php echo @$resultado['w_senha']; ?>" maxlength="50"  size="20" /></td>
              </tr>
			<tr class="light">
              <td>Status:</td>
              <td>
				<input name="w_status" type="text" id="w_status" value="<?php echo @$resultado['w_status']; ?>" maxlength="50"  size="20" /></td>
              </tr>
			  <tr class="dark">
			
              <td>Log:</td>
              <td>
				<input name="w_data_ultimo_login0" type="text" id="w_data_ultimo_login0" value="<?php echo @$resultado['w_data_ultimo_login']; ?>" maxlength="20" readonly="true" size="20" /></td>
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

            </article>
          </li>
        </ul>
          </div>
          <!-- ## TAB 2 ## -->
         
          <!-- / Tab Content -->
        </div>
      </div>
	  </section>
      <section>
      </section>
     
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- Footer -->
<div class="wrapper row4">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright © 2014 / All Rights Reserved WouSoftware - wousoftware@gmail.com</p>
  </div>
</div>
<!-- Scripts -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
<script>window.jQuery || document.write('<script src="layout/scripts/jquery-latest.min.js"><\/script>\
<script src="layout/scripts/jquery-ui.min.js"><\/script>')</script>
<script>jQuery(document).ready(function($){ $('img').removeAttr('width height'); });</script>
<script src="/layout/scripts/responsiveslides.js-v1.53/responsiveslides.min.js"></script>
<script src="/layout/scripts/jquery-mobilemenu.min.js"></script>
<script src="/layout/scripts/custom.js"></script>
</body>
</html>
