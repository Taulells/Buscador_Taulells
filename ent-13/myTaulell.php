<?php
session_start(); 

if(empty($_SESSION['f']) || $_SESSION['f'] == ''){
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

<?php

$map = $_SESSION['f'] ; 

			?>

<div id="sidenav-mytaulell" class="sidenav-mytaulell">
<div href="javascript:void(0)" class="small-screen-mytaulell"> <button class="closebtn"onclick="closeNav()">&times; </button> </div> 
    
<div id="photo-sidenav-mytaulell" class="photo-sidenav-mytaulell"> </div> 

 
<div id="container-sidenav-mytaulell" class="container-sidenav-mytaulell">     
  <div class="active"><a href="myTaulell.php">INFO</a></div> 
  <a href="myTaulell-compte.php">Compte</a>
  <a href="myTaulell-IProductes.php">Inserir Productes</a>
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
  <h2>GUIA</h2> <?php  print "<h2>" . $map . "</h2>";  ?>
  <div class="line-mytaulell"> </div> 

  <p>Benvingut al teu espai personal al Buscador Taulells.org, a continuació tens una guia de l'usuari per poder guiar-te i entendre els diferents apartats del teu espai personal. </p>
<div class="fontsize-normal-buscador"> 
  <p>GUIA DE L'USUARI</p>
<ul>
 <li  style="margin-bottom:5px;">  <a href="#secciou" style=" color:darkblue;">Característiques i aspectes generals</a> </li> 
 <li  style="margin-bottom:5px;"> <a href="#secciodos" style=" color:darkblue;">Compte</a> </li>
 <li  style="margin-bottom:5px;"> <a href="#secciotres" style=" color:darkblue;">Insereix Productes</a></li>
 <li  style="margin-bottom:5px;"> <a href="#seccioquatre" style=" color:darkblue;">Productes</a></li>
 <li  style="margin-bottom:5px;"> <a href="#secciocinc" style=" color:darkblue;">Ajuda</a></li>
</ul> 
</div> 

<br> 
<br> 
  <div class="subtitle-info-mytaulell" id="secciou"><p>CARACTERÍSTIQUES I ASPECTES GENERALS</p> </div> 
  <p>Aquest espai ha sigut creat perquè tú puguis gestionar els teus productes al Buscador Taulells.org. Recorda que l'únic punt d'accés al teu compte i al llistat dels teus productes al Buscador Taulells.org és mitjans la pàgina web oficial Taulells.org. </p>
  <p>A l'esquerre està situat l'índex, on pots accedir als diferents apartats mencionats abans. Si estàs utilitzant un dispositiu mòbil,  l'índex estarà minimitzat, si això passa, clica el botó ☰ d'a dalt a l'esquerre per obrir l'índex i a la creu X per poder tancar l'índex i llegir el text. </p>
  <div class="nota-info-mytaulell"><i>Segons quin apartat vulguis veure, hauràs de clicar al botó corresponent. </i> </div> 
  
  <p>Per seguretat, sempre hauràs de tancar la teva sessió a l'acabar la teva estança al teu espai personal al Buscador Taulells.org. Les sessions tenen una durada de 20 minuts, en passar 20 minuts hauràs de tornar a entrar al teu compte.</p>
  <p>La teva seguretat i la de l'aplicació és la nostra prioritat. No comparteixis la teva contrasenya, canvia-la freqüentment i comprova que els emails que reps de Taulells.org són oficials i no una còpia fraudulenta.</p>
<br> 
  <div class="subtitle-info-mytaulell"  id="secciodos"><p>Compte</p> </div> 
  <p>A l'apartat 'Compte' podràs visualitzar totes les teves dades que fan referència al teu compte. </p>
  <p>Aquestes són molt importants, ja que representen al teu comerç local al poble. Aquestes dades són inserides en fer el registre i poden ser editades a l'apartat 'Compte'.</p>
  <p>Algunes dades del teu compte és mostraran conjuntament amb cada producte. Aquestes són; </p>
  <ul> 
  <li> <p>Nom de l'establiment local, horari d'obertura, adreça de l'establiment, petita història de la tenda. </p> </li> 
</ul>
  <p>Les dades privades no és mostraran.  </p>
  <ul>
  <li> <p>Nom, contrasenya, *enllaç a la vostra pàgina web*.  </p> </li>  
</ul> 
  <p><i>*Enllaç a la vostra pàgina web*:</i> A l'haver fet el registre, tu hauràs inserit el nom de la teva pàgina web amb direcció a la teva pàgina principal. Aquesta dada no es mostrarà. L'enllaç de la teva pàgina web que es mostrarà conjuntament amb el teu producte serà aquest que tu afegeixis quant insereixis un nou producte.</p>
  <p>L'enllaç que tu afegeixis redirigirà NO a la teva pàgina principal sinó a la pàgina que conté el producte determinat. Per més informació sobre els enllaços llegeix l'apartat 'Inserir Producte ' a continuació.  </p>
  
  <i>Nota: L'enllaç ha de ser segur, enllaç que no tingui HTTPS no tindrà validesa. </i>
  <br> 
  <br> 
  <div class="subtitle-info-mytaulell"  id="secciotres"><p>Inserir Productes</p></div> 
  <p>A l'apartat 'Inserir Productes' podràs afegir i editar els teus productes que es mostraran al Buscador Taulells.org. Com més productes afegeixis, més visualització digital tindràs. Més clients et podran conèixer.</p>
  <p>Afegir un producte és senzill. Això si, has de respectar aquests termes mencionats avall; </p>
  
 <p>Crea un producte per tot el lot. No més d'un.<i> <div class="nota-info-mytaulell"> EXEMPLE: Tens 4 pots de mel artesana, crea un producte que es digui, Mel Artesana..., no quatre productes de Mel Artesana... </div>  </i></p> 
<i>Nota: Productes duplicats del mateix establiment seran eliminats</i>
 <p>Pots afegir descomptes, aquests hauran de contenir l'etiqueta 'oferta' i pots mencionar quin descompte té al petit text dedicat al producte. No recomanem aquesta pràctica. Un abús d'aquesta estratègia pot desenvolupar una eliminació d'aquests productes. </p> 
 <p>Mai afegeixis el preu del producte al text dedicat aquest. Pensa a tindre una pàgina web i afegir l'enllaç. Enllaç que redirigirà al producte a la teva pàgina web. Per què? Amb aquesta acció rebràs més tràfic a la teva pàgina web i podràs mostrar als usuaris més productes que tu vens. </p> 
  <p>L'enllaç haurà de redirigir a l'apartat de la teva pàgina web on mostres el mateix producte. <i> <div class="nota-info-mytaulell"> EXEMPLE: Usuari clica l'enllaç del producte Mel Artesana de l'establiment <i> Tenda de la Mel</i>  a ------, l'usuari serà redirigit a la pàgina web de la <i> Tenda de la Mel </i>  i se li mostrarà el mateix producte Mel Artesana. De cap manera se li pot mostrar la teva pàgina principal, ja que l'usuari perdrà el temps i marxarà de la vostra pàgina. </div> </i>  </p>     
  <div class="nota-info-mytaulell"> <i>Nota: Recomanem que llegiu l'article sobre Pàgines Web al Taulell d'Articles o visiteu a l'apartat Ajuda per saber com és una bona Pàgina Web per atraure els teus clients. -------- aportarà més tràfic a la vostra pàgina web, per aquesta raó petits canvis a la vostra pàgina com un ús no abusiu de cookies, un petit espai de recomanacions o un bon temps de càrrega són elements claus que faran de l'estància de l'usuari un bon moment i mai dubtaran en tornar, a la vostra pàgina web. </i> </div> 
   <p>Utilitzeu les etiquetes!! Aquestes han sigut creades per atraure clients, seleccioneu les etiquetes que descriguin millor el vostre producte, i atraieu més clients amb aquestes etiquetes acolorides .</p> 
    <p>El text sobre el producte és molt important, un bon text pot atraure a molts usuaris interessats en el vostre producte. Un text els fa destacar. El mateix passa amb el text sobre la vostra història com a comerç, qui sou? Com heu arribat aquí? La vostra història és important i un aspecte que els clients usuaris tenen en compte! </p> 

    <div class="nota-info-mytaulell"> <p>Què és un producte per vostè? Per nosaltres pot ser un pot de mel artesana, productes de neteja o serveis, com per exemple un servei de manicura, agència de viatges, etc. Aprofiti aquesta eina municipal i faci del vostre negoci un de més gran i actualitzat al món digital.</p> </div> 
<br> 

  <div class="subtitle-info-mytaulell"  id="seccioquatre"><p>Productes</p> </div> 
  <p>A l'apartat 'Productes' podràs trobar el llistat de tots els productes que mostres a -------. </p>

  <br> 
  <div class="subtitle-info-mytaulell" id="secciocinc"><p>Ajuda</p> </div> 
  <p>A l'apartat 'Ajuda' podràs trobar petits tutorials sobre el teu Taulell Personal. Tutorials com; </p>
 <ul> 
  <li> <p>Afegir un producte i les millors pràctiques</p> </li> 
  <li> <p>Editar les dades del vostre compte</p> </li> 
  <li> <p>Gestionar els productes</p> </li> 
  <li>  <p>Entre d'altres</p> </li> 
</ul>  



</div> 



</body>
<foot>
</foot>
</html>  

