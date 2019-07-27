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

$sql = mysql_query ("Select * From system_user where id_system_user='".@$_GET['id']."'"); 
$exibe = mysql_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html>
<head>
<title>WouSoftware - Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../../layout/w3css/4/w3.css">
<link rel="stylesheet" href="../../../layout/lib/w3-theme-black.css">
<link rel="stylesheet" href="../../../layout/css/font-awesome.min.css">

<style>
img{max-width:100%;height:auto;}
</style>

</head> 
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
     <a href="../../admin/" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Painel de Controle </a>
	 <a href="../../logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i></a>
   
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:43px;" id="mySidebar">
   <div class="w3-card-4" style="width:100%">
    <header class="w3-container w3-light-grey">     
	   <center><i class="glyphicon glyphicon-user"></i><h6><?php echo $_SESSION['system_user_name']; ?> </h6></center>	
<center><img src="../../../layout/images/WouSoftware.png" alt="Avatar" style="width:100px"></center>	   
    </header>
	<br/>	
  </div>
  
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
<h5><a class="w3-bar-item w3-button w3-hover-black" href="../user/"><i class="fa fa-user"></i>  User</a>
	<a class="w3-bar-item w3-button w3-hover-black" href="../support/"><i class="fa fa-comment"></i>  Support</a>
	<a class="w3-bar-item w3-button w3-hover-black" href="../software/"><i class="fa fa-window-maximize"></i>  Software</a>
	<a class="w3-bar-item w3-button w3-hover-black" href="../validation/"><i class="fa fa-key"></i>  Validation</a></h5>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row">
    
	<header class="w3-container" style="padding-top:45px">
	<h5><i class="fa fa-users"></i>  User - Profile</h5>
	</header>

  <div class="w3-row-padding w3-margin-bottom">
 
<form class="w3-container">
 <div class="w3-row w3-border">
 
<div class="w3-third w3-container w3-white">
<br/>


<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
<div class="w3-rest">
      <input class="w3-input w3-border" type="text" value="<?php echo @$exibe['system_user_name']; ?>" placeholder="Name" readonly="true"><p/>
</div>  

<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-vcard"></i></div>
<div class="w3-rest">
      <input class="w3-input w3-border" type="text" value="<?php echo @$exibe['system_user_code']; ?>" placeholder="Code" readonly="true"><p/>
</div>  

<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar"></i></div>
<div class="w3-rest">
      <input class="w3-input w3-border" type="text" value="<?php echo @$exibe['system_user_date']; ?>" placeholder="Date" readonly="true"><p/>
</div>  

<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
<div class="w3-rest">
      <input class="w3-input w3-border" type="text" value="<?php echo @$exibe['system_user_phone']; ?>" placeholder="Phone" readonly="true"><p/>
</div>  
</div>
  
<div class="w3-third w3-container">
<br/>
<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope"></i></div>
<div class="w3-rest">
      <input class="w3-input w3-border" type="email" value="<?php echo @$exibe['system_user_email']; ?>" placeholder="Email" readonly="true"><p/>
</div>  

<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
<div class="w3-rest">
      <input class="w3-input w3-border" type="password" value="<?php echo @$exibe['system_user_password']; ?>" placeholder="Password" readonly="true"><p/>
</div>  

<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-level-up"></i></div>
<div class="w3-rest">
      <input class="w3-input w3-border" type="text" value="<?php echo @$exibe['system_user_level']; ?>" placeholder="Level" readonly="true"><p/>
</div>  

<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-check"></i></div>
<div class="w3-rest">
      <input class="w3-input w3-border" type="text" value="<?php echo @$exibe['system_user_status']; ?>" placeholder="Status" readonly="true"><p/>
</div>  
</div>
  
<div class="w3-third w3-container">
<br/>

<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-map-marker "></i></div>
<div class="w3-rest">
      <input class="w3-input w3-border" type="text" value="<?php echo @$exibe['system_user_ip']; ?>" placeholder="IP" readonly="true"><p/>
</div>  

<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar-plus-o "></i></div>
<div class="w3-rest">
      <input class="w3-input w3-border" type="text" value="<?php echo @$exibe['system_user_date_register']; ?>" placeholder="Date Register" readonly="true"><p/>
</div>  

<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar-check-o "></i></div>
<div class="w3-rest">
      <input class="w3-input w3-border" type="text" value="<?php echo @$exibe['system_user_date_login']; ?>" placeholder="Date Login" readonly="true"><p/>
</div> 
 
<br/>

</div>
</div> 

<br/>

<button class="w3-btn w3-black w3-center">Editar</button><p/>
</form> 
  
<br/>

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