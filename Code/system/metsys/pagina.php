<?php

include "../../includes/functions.php";
include "../../includes/config.php";

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
$dbc = @mysqli_connect('db-system.mysql.uhserver.com','db_system','5051246Wou@','db_system') or die('Ocorreu um erro ao tentar se conectar com o banco de dados MySQL!');
$paginaAtual = mysqli_real_escape_string($dbc,isset($_GET['cpg']) ? $_GET['cpg'] : 1);
$resultadosPorPagina = 10;
$proximaPagina = ($paginaAtual * $resultadosPorPagina) - $resultadosPorPagina;

mysqli_set_charset($dbc, 'utf8');
$query = "SELECT * FROM system_user ORDER by id_system_user DESC LIMIT $proximaPagina, $resultadosPorPagina";
$result = mysqli_query($dbc, $query);
while($row = mysqli_fetch_array($result)){
echo '<div class="comentarioBloco">';
echo '<div class="nome">' . $row['system_user_name'] . '</div>';
echo '</div>';
}

$query = "SELECT * FROM system_user";
$result = mysqli_query($dbc, $query);
$total = mysqli_num_rows($result);
$quantidadeDeLinks = ceil($total / $resultadosPorPagina);

for($i = $paginaAtual - 3, $limiteDeLinks = $i + 6; $i <= $limiteDeLinks; $i++){
if($i < 1){
$i = 1;
$limiteDeLinks = 7;
}
if($limiteDeLinks > $quantidadeDeLinks){
$limiteDeLinks = $quantidadeDeLinks;
$i = $limiteDeLinks - 6;
}
if($i < 1){
$i = 1;
$limiteDeLinks = $quantidadeDeLinks;
}

if($i == $paginaAtual)
echo $i . ' ';
else
echo '<a href="?cpg='.$i.'">'.$i.' </a>';
}
?>





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