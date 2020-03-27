<?php

include "../../includes/config.php";



	//Busca no banco de dados para contagem
	$sql_res=mysql_query("SELECT * FROM system_user"); //consulta no banco
	$contador=mysql_num_rows($sql_res); //Pegando Quantidade de itens
	//Verificando se já selecionada alguma página
	if(empty($_GET['pag'])){
		$pag=1;
	}else{
		$pag = "$_GET[pag]";} //Pegando página selecionada na URL
	if($pag >= '1'){
 		$pag = $pag;
	}else{
		$pag = '1';
	}
	$maximo=10; //Quantidade Máxima de posts por página
	$inicio = ($pag * $maximo) - $maximo; //Variável para LIMIT da sql
	$paginas=ceil($contador/$maximo);	//Quantidade de páginas	
?>


<!DOCTYPE html>
<html>
<head>
<title>WouSoftware - Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../layout/w3css/4/w3.css">
<link rel="stylesheet" href="../../layout/lib/w3-theme-black.css">
<link rel="stylesheet" href="../../layout/css/font-awesome.min.css">

<style>
img{max-width:100%;height:auto;}
</style>

</head> 
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
     <a href="index.php"     class="w3-bar-item w3-button"><i class="fa fa-home"></i> Painel de Controle </a>
	 <a href="../logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i></a>
   
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:43px;" id="mySidebar">
   <div class="w3-card-4" style="width:100%">
    <header class="w3-container w3-light-grey">     
	   <center><i class="glyphicon glyphicon-user"></i><h4><?php echo $_SESSION['system_user_name']; ?> </h4></center>	
<center><img src="../../layout/images/WouSoftware.png" alt="Avatar" style="width:100px"></center>	   
    </header>
	<br/>	
  </div>
  
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="user-list.php">Usuários</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="software-list.php">Softwares</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="validation-list.php">Licenças</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="views.php">Visitas</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="downloads.php">Downloads</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="support-list.php">Suporte</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  

 

  <div class="w3-row w3-padding-64">
    
	  <header class="w3-container" style="padding-top:0px">
    <h5><i class="fa fa-users"></i>  Usuários</h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-first">
      <div class="w3-container w3-white w3-padding-16">

        
<div class="w3-responsive">


		<?php 
			echo "Página ".$pag." de ".$paginas; //Informando qual é a página atual
		?>
		<table class="w3-table-all w3-small">
			<tr>
				<td>ID</td>
				<td>Nome</td>
			</tr>
			<?php
				$sql="SELECT * FROM system_user ORDER BY id_system_user LIMIT $inicio, $maximo"; //consulta no BD
				$resultados = mysql_query($sql) //Executando consulta
				or die (mysql_error()); //Se ocorrer erro mostre-o
				if (@mysql_num_rows($resultados) == 0) //Se não retornar nada
				echo("Nenhum cadastro encontrado");
				while ($res=mysql_fetch_array($resultados)) { //laço para listagem de itens
				$id = $res[id_system_user];
				$nome = $res[system_user_name];
			?>
			<tr>
				<td><?php echo $id ?></td>
				<td><?php echo $nome ?></td>
			</tr>
			<?php } ?>
		</table>
		<br />
		<table>
			<tr>
			<?php
				if($pag!=1){
					echo "<td><a class='w3-bar-item w3-button' href='page.php?pag=".($pag-1)."'>&#10094; Previous</a></td>"; 
				}
				if($contador<=$maximo){
					echo "<td>Existe apenas uma única página</td>";
				}
				else{
					for($i=1;$i<=$paginas;$i++){
						if($pag==$i){
							echo "<td  class='w3-bar-item w3-button w3-grey'><a href='page.php?pag=".$i."'> ".$i."</a></td>";
						}else{
							echo "<td><a href='page.php?pag=".$i."'> ".$i."</a></td>";
						}
					}
				}
				if($pag!=$paginas){
					echo "<td><a class='w3-bar-item w3-button' href='page.php?pag=".($pag+1)."'>Next &#10095;</a></td>";
				}
			?>
		</tr>
		</table>

      
      </div>
 </div>
	  
    </div>
  </div>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
	
	
  </div>

  <!-- Pagination -->


<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-youtube w3-hover-opacity"></i>
  </div>
  <p>Copyright © 2014-2017 / All Rights Reserved <a href="WouSoftware" title="W3.CSS" target="_blank" class="w3-hover-text-green">WouSoftware.com</a></p>
</footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
