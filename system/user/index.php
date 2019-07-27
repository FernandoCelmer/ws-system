<?php

session_start();

include "../../includes/functions.php";
include "../../includes/config.php";

session_checker();

if($_SESSION['system_user_level'] == 0){


}

if($_SESSION['system_user_level'] == 1){


}

//SUPPORT
$sql = mysql_query("select * from support_ticket where id_system_user= '".$_SESSION['id_system_user']."'");
$all_support = mysql_num_rows($sql);

//SOFTWARE
$sql = mysql_query("select * from desktop_validation where id_system_user= '".$_SESSION['id_system_user']."'");
$all_software = mysql_num_rows($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>WouSoftware - User</title>
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
     <a href="../user/" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Painel de Controle </a>
	 <a href="../logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i></a>
   
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:43px;" id="mySidebar">
   <div class="w3-card-4" style="width:100%">
    <header class="w3-container w3-light-grey">     
	   <center><i class="glyphicon glyphicon-user"></i><h6><?php echo $_SESSION['system_user_name']; ?> </h6></center>	
<center><img src="../../layout/images/WouSoftware.png" alt="Avatar" style="width:100px"></center>	   
    </header>
	<br/>	
  </div>
  
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
<h5><!--<a class="w3-bar-item w3-button w3-hover-black" href="../user/"> <i class="fa fa-user"></i>  Usuário</a>
	<a class="w3-bar-item w3-button w3-hover-black" href="../software/"><i class="fa fa-window-maximize"></i>  Licença</a> -->
	<a class="w3-bar-item w3-button w3-hover-black" href="../user/support/"><i class="fa fa-comment"></i>  Suporte</a></h5>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row">
    
	  <header class="w3-container" style="padding-top:45px">
    <h5><i class="fa fa-dashboard"></i>  Minhas Informações</h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $all_support; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Tickets</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-key w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $all_software; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Licenças</h4>
      </div>
    </div>
  </div>
	
	
  </div>

<!--<footer class="w3-container w3-padding-5 w3-light-grey w3-center">
  <div class="w3-xlarge w3-section ">
    <h6><a href="https://www.facebook.com/wousoftware/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="http://www.twitter.com/wousoftware"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.youtube.com/channel/UCTvjF-nToNWtsZNJIaIu5ow"><i class="fa fa-youtube w3-hover-opacity"></i></a>
	<i>Copyright © 2014-2017 / All Rights Reserved <a href="WouSoftware" title="WouSoftware" target="_blank" class="w3-hover-text-black">WouSoftware.com</a><h6/></i>
  </div>
</footer> -->

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