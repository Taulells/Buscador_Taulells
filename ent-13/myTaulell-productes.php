<?php
session_start(); 
if(empty($_SESSION['todaysdate']) || $_SESSION['todaysdate'] == ''){
  header("Location: login.html");
  die();
}
?>
 <!DOCTYPE html>
<html>

<head>     
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- STYLESHEETS  -->
<link rel="stylesheet" href="ent-13.css">

<!-- END STYLESHEETS  -->
</head>

<body>


<div id="sidenav-mytaulell" class="sidenav-mytaulell">
<div href="javascript:void(0)" class="small-screen-mytaulell"> <button class="closebtn"onclick="closeNav()">&times; </button> </div>    
<div id="photo-sidenav-mytaulell" class="photo-sidenav-mytaulell"> </div> 

 
<div id="container-sidenav-mytaulell" class="container-sidenav-mytaulell">     
  <a href="myTaulell.php">INFO</a>
  <a href="myTaulell-compte.php">Compte</a>
  <a href="myTaulell-IProductes.php">Inserir Productes</a>
  <div class="active"><a href="myTaulell-productes.php">Productes</a></div> 
  
  <a href="myTaulell-ajuda.php">Ajuda</a>
  <a href="out-ent-13.php">Log-out</a> 
</div> 
</div>

<button class="openbtn" onclick="openNav()">☰</button>  
<script>
function openNav() {
  document.getElementById("sidenav-mytaulell").style.display = "block";
  document.getElementById("photo-sidenav-mytaulell").style.display = "block";
  document.getElementById("container-sidenav-mytaulell").style.display = "block";
   }


function closeNav() {
  
  document.getElementById("sidenav-mytaulell").style.display = "none";
  document.getElementById("photo-sidenav-mytaulell").style.display = "none";
  document.getElementById("photo-sidenav-mytaulell").style.display = "none";
  
}
</script>

<div class="contingut-mytaulell">
  <h2>Els Meus Productes</h2>
  <div class="line-mytaulell"> </div> 
  <p style="text-align:left;">Aquest és un llistat dels teus productes al Buscador Taulells.org</p>
  
  <p>0 productes</p> 
  
  
</div>



</body>
<foot>
</foot> 