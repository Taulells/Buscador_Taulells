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
  <div class="active"> <a href="myTaulell-compte.php">Compte</a> </div> 
  <a href="myTaulell-IProductes.php">Insereix Productes</a>
  <a href="myTaulell-productes.php">Productes</a>
 
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
<h2>El Meu Compte</h2>
  <div class="line-mytaulell"> </div> 

<div class="contingut-ul-compte-mytaulell"> 
 <div class="fontsize-normal-buscador">
<p style="color:green;">Index</p>
 
<ul>
 <li style="margin-bottom:5px;">  <a href="#seciou" style=" color:darkblue;" >Nom</a> </li> 
 <li style="margin-bottom:5px;"> <a href="#seciodos" style=" color:darkblue;">E-mail</a> </li>
 <li style="margin-bottom:5px;"> <a href="#seciotres" style=" color:darkblue;">Contrasenya</a></li>
 <li style="margin-bottom:5px;"> <a href="#secioquatre" style=" color:darkblue;">Nom de l'Establiment Local</a></li>
 <li style="margin-bottom:5px;"> <a href="#seciocinc" style=" color:darkblue;">Pàgina Web de l'Establiment Local</a></li>
 <li style="margin-bottom:5px;"> <a href="#seciosis" style=" color:darkblue;">L'adreça de l'Establiment Local</a></li>
 <li style="margin-bottom:5px;"> <a href="#secioset" style=" color:darkblue;">Horari d'Obertura</a></li>
 <li style="margin-bottom:5px;"> <a href="#seciovuit" style=" color:darkblue;">La teva història (text) </a></li>
</ul> 
</div>
</div> 
 
 
  <div class="subtitle-info-mytaulell" id="seciou"> <p>Nom </p> </div> 
  <div class="subtitle-compte-mytaulell"> <p>Nota: Aquest nom t'identifica, utilitza el teu nom personal o seudònim. Contactarem amb tu amb aquest nom. </p> </div> 

  <p> El teu Nom: *ADMIN* </p> 



<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 


<div class="space-info-mytaulell"> </div> 

  <div class="subtitle-info-mytaulell" id="seciodos"><p>E-mail</p> </div> 
  <div class="subtitle-compte-mytaulell">  <p>Nota: El teu compte al Buscador Taulells.org està enllaçat aquest E-mail. </p> </div> 
 
  <p> El teu E-mail: *admin@example.com*  </p> 


<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 


  <div class="space-info-mytaulell"> </div> 

  <div class="subtitle-info-mytaulell" id="seciotres"><p>Contrasenya</p> </div> 
  <div class="subtitle-compte-mytaulell">  <p>Nota: Per seguretat, per canviar la contrasenya t'enviarem un e-mail a la teva safata del teu correu. Segueix les instruccions del correu per canviar la contrasenya del teu compte. </p></div> 

    <p> --------- </p> 




<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 


<div class="space-info-mytaulell"> </div> 

  <div class="subtitle-info-mytaulell" id="secioquatre"><p>Nom de l'Establiment Local</p> </div> 
  <div class="subtitle-compte-mytaulell">  <p>Nota: Aquest es el nom del teu comerç, escriu-lo bé perquè els usuaris et puguin identificar. </p> </div> 
  
 

  
<div class="textactual-compte-mytaulell">  
<div class="title-editcompte-mytaulell"> <p> Nom de l'Establiment Actual  </p> </div> 

<div class="textactual-sub-compte-mytaulell"> 
  <p>  Lore LoreIpsum  </p> 
</div> <!--close textactual-sub-compte-mytaulell -->
<div class="edit-line-compte-mytaulell"></div> 

<div class="title-editcompte-mytaulell"><p>Edita el Nom de l'Establiment </p> </div> 
<div class="subtitle-edit-compte-mytaulell">
 
<p><i style="color:darkblue; ">Pas 1;</i> Fes un click al botó Confirmar per confirmar la teva edició.  </p> 
</div> 

<div class="textareadiv">
<form  method="post" action="upd-ent-13.php"> 
<input  class="textarea-two"  name="uupdt" ></input>
<br>
<br>
<input class="buttonsee" type="submit" name="submit" value="Confirmar">
</form>
</div>

          
</div> <!--close textactual-compte-mytaulell -->
<div class="edit-line-compte-mytaulell"></div> 




  <!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 

<div class="space-info-mytaulell"> </div> 

  <div class="subtitle-info-mytaulell" id="seciocinc"> <p>Pàgina Web de l'Establiment Local</p> </div> 
  <div class="subtitle-compte-mytaulell">  <p>Nota: Aquesta URL no es mostrarà, però es imprescindible pel funcionament del teu compte. Es necessari que sigui la URL a la teva pàgina Web principal. </p> </div> 
  <div class="subtitle-compte-mytaulell"> <p>Per poder canviar la contrasenya ens tindràs que contactar. Envia'ns un correu a ----- per poder canviar aquesta URL, adjunta també la raó d'aquest canvi. </p> </div> 

  <p> La URL principal a la teva Pàgina Web: *example.com* </p> 


  <!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 

<div class="space-info-mytaulell" id="seciosis"> </div> 

  <div class="subtitle-info-mytaulell"> <p>L'adreça de l'Establiment Local</p> </div> 
  <div class="subtitle-compte-mytaulell">  <p>Nota: És molt important que l'adreça estigui bé escrita, ----- dona l'opció a l'usuari de fer un copy/paste ràpid a qualsevol aplicació mapa per poder buscar les direccions al teu local. </p> </div> 


  
<div class="textactual-compte-mytaulell">  
<div class="title-editcompte-mytaulell"> <p> Adreça Actual  </p> </div> 

<div class="textactual-sub-compte-mytaulell"> 
  <p> Carrer Lore LoreIpsum, Molins de Rei  </p> 
</div> <!--close textactual-sub-compte-mytaulell -->
<div class="edit-line-compte-mytaulell"></div> 

<div class="title-editcompte-mytaulell"><p>Edita l'Adreça </p> </div> 
<div class="subtitle-edit-compte-mytaulell">

<p><i style="color:darkblue; ">Pas 1;</i> Fes un click al botó Confirmar per confirmar la teva edició.  </p> 
</div> 

<div class="textareadiv">
<form  method="post" action="upd-ent-13.php"> 
<input  class="textarea-two"  name="dupdt" ></input>
<br>
<br>
<input class="buttonsee" type="submit" name="submit" value="Confirmar">
</form>
</div>

<div class="edit-line-compte-mytaulell"></div> 




<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 



<div class="space-info-mytaulell"> </div>   

  <div class="subtitle-info-mytaulell" id="secioset"> <p>Horari d'Obertura</p> </div> 
  <div class="subtitle-compte-mytaulell">  <p>Nota: És necessari que especifiquis bé el temps que el teu comerç és obert. Què ningún client és trobi la porta tancada a l'anar a comprar al teu establiment.</p> </div> 

  
 
<div class="textactual-compte-mytaulell">  
<div class="title-editcompte-mytaulell"> <p> Horari Actual  </p> </div> 

<div class="textactual-sub-compte-mytaulell"> 
  <p> Dilluns a divendres 9:30 a 4:30
      Dissabtes 10:30 a 2:30  </p> 
</div> <!--close textactual-sub-compte-mytaulell -->
<div class="edit-line-compte-mytaulell"></div> 

<div class="title-editcompte-mytaulell"><p> Edita l'Horari </p> </div> 
<div class="subtitle-edit-compte-mytaulell">

<p><i style="color:darkblue; ">Pas 2;</i> Fes un click al botó Confirmar per confirmar la teva edició.  </p> 
</div> 

<div class="textareadiv">
<form  method="post" action="upd-ent-php"> 
<input  class="textarea"  name="tupdt" ></input>
<br>
<br>
<input class="buttonsee" type="submit" name="submit" value="Confirmar">
</form>
</div>

<div class="edit-line-compte-mytaulell"></div> 


  
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 
<!--//////////////////////////////////////////////////////////////////////////////////// --> 


  <div class="space-info-mytaulell"> </div>  

<div class="subtitle-info-mytaulell" id="seciovuit"> <p>La teva història (text) </p> </div> 
  <div class="subtitle-compte-mytaulell">  <p>Nota: Aquesta és la part que més es dona importància, recorda que un bon text pot fer canviar l'opinió de molts. És aquest text el que obre la porta als nous usuaris que no conèixen el teu establiment local.</p> </div> 
 

 
<div class="textactual-compte-mytaulell">  
<div class="title-editcompte-mytaulell"> <p> Text Actual  </p> </div> 

<div class="textactual-sub-compte-mytaulell"> 
  <p> Lore Ipsum LoreIpsum Lore Lore LoreIpsum Lore Ipsum LoreIpsum Lore Lore LoreIpsum Lore Ipsum LoreIpsum Lore Lore LoreIpsum Lore Ipsum LoreIpsum Lore Lore LoreIpsum Lore Ipsum LoreIpsum Lore Lore LoreIpsum Lore Ipsum LoreIpsum Lore Lore LoreIpsum Lore Ipsum LoreIpsum Lore Lore LoreIpsum Lore Ipsum LoreIpsum Lore Lore LoreIpsum Lore Ipsum LoreIpsum Lore Lore LoreIpsum Lore Ipsum LoreIpsum Lore Lore LoreIpsum Lore Ipsum LoreIpsum Lore Lore LoreIpsum Lore Ipsum LoreIpsum Lore Lore LoreIpsum  </p> 
</div> <!--close textactual-sub-compte-mytaulell -->
<div class="edit-line-compte-mytaulell"></div> 

<div class="title-editcompte-mytaulell"><p>Edita el Text </p> </div> 
<div class="subtitle-edit-compte-mytaulell">

<p><i style="color:darkblue; ">Pas 2;</i> Fes un click al botó Confirmar per confirmar la teva edició.  </p> 
</div> 

<div class="textareadiv">
<form  method="post" action="upd-ent-13.php"> 
<input  class="textarea"  name="qupdt" ></input>
<br>
<br>
<input class="buttonsee" type="submit" name="submit" value="Confirmar">
</form>
</div>

<div class="edit-line-compte-mytaulell"></div> 



</div>



</body>
<foot>
</foot> 
</html> 