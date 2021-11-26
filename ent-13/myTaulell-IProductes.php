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
  <div class="active"> <a href="myTaulell-IProductes.php">Inserir Productes</a> </div> 
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
  <h2 style="text-align:left;">Insereix Nous Productes</h2>
  <div class="line-mytaulell"> </div> 


  <p> Insereix els productes que es mostraran a -------. No hi ha límit de productes, nosaltres estem aquí per ajudarte a tu i al teu petit comerç en aquest món tant digitalment gran. </p>
  <p>Això si, hi han unes regles que tens que respectar.</p>
<div class="fontsize-normal-buscador">
  <ul> 
  <li style="margin-bottom:5px; color:green; "> <p style="color:black; "> Un producte per lot</p> </li>
  <li style="margin-bottom:5px; color:green;"> <p style="color:black;" >Escriu els textos que et demanem, la teva història és un punt molt fort que grans companyies no tenen, hem de aprofitar-lo.</p> </li>
  <li style="margin-bottom:5px; color:green;"> <p style="color:black;" >No insereixis el preu del producte, la teva pàgina Web fa això ja per nosaltres</p> </li>
  <li style="margin-bottom:5px; color:green;"> <p style="color:black;" >Insereix la teva URL redirigint a la part de la teva pàgina web on mostres el mateix producte (Per què? Més tràfic a la teva pàgina web, sempre millor!)</p> </li>
  <li style="margin-bottom:5px; color:green;"> <p style="color:black;">Utiliza les etiquetes, aquestes funcionen!</p> </li>
  </ul> 
</div> 
 
<div class="nota-info-mytaulell"> <p>Per qualsevol dubte, dona un cop d'ull a la GUIA/INFO o a l'AJUDA per més informació. </p> </div>
  
<div class="father-div-container-iprod-myt"> 
  <div class="div-fcontainer-iprod-myt">


  <form method="post" action="actr-ent-13.php" method="POST" enctype="multipart/form-data">



  <div class="container-iproductes-mytaulell"> 				
  <div class="semi-container-iproductes-mytaulell">
    <div class="cos-labelcontainer-registro">  
    <label for="name" style="text-align:left;" >Nom: </label>
    </div> 
				<input style="border: 2px solid green;" class="cos-input-registro" name="pio" placeholder="Nom del Producte">
       
      </div>
  
  <div class="semi-container-iproductes-mytaulell">
  <div class="cos-labelcontainer-registro"> 
  <label style="text-align:left;" >URL: </label>
  </div> 
				<input  style=" border: 2px solid green;" class="cos-input-registro" name="pitw" placeholder="URL">
        <div class="nota-info-mytaulell"> 	<p> Nota: Insereix la URL redirigint a la part de la teva Web on mostres el mateix producte. Aquest és un pas clau, si no saps com fer-ho, t'ajudem a INFO/GUIA o a l'AJUDA. </p> </div>
      </div>

  <div class="semi-container-iproductes-mytaulell">
  <div class="cos-labelcontainer-registro"> 
    <label style="text-align:left;" >Petita descripció del producte: </label>
  </div> 
				<input style=" border: 2px solid green;" class="textarea-three" name="pith"> </input>
       
      </div>
  <div class="semi-container-iproductes-mytaulell">
  <div class="cos-labelcontainer-registro"> 
        <label style="text-align:left;" >Insereix una foto: </label>
  </div>     
        <div class="form-group">
						<input type="file" name="pifo">	
            <div class="nota-info-mytaulell">	<p> Nota: Insereix una foto del producte, ha de ser nítida i que és vegi bé el producte. </p> </div>
          </div>
   </div> 

          <div class="semi-container-iproductes-mytaulell">
          <div class="cos-labelcontainer-registro"> 
          <label style="text-align:left;" >Selecciona les etiquetes: </label>
        </div> 


        
      </div> 
					


</div> 

<div class="card-container">

<div class="cardu-deck-mytaulell">
 <div class="card">
 <p style="text-align:left; font-size:19px; padding-left: 10px; " > Generals </p> 
  
 <div class="containercheck" id="input-order">
 <div class="semi-font-size-general">
 <input type="checkbox" name="filter_order[]" value="Botiga Familiar" /> Botiga Familiar <br />
    <input type="checkbox" name="filter_order[]" value="Desde 1950" /> Desde 1950 <br />
    <input type="checkbox" name="filter_order[]" value="Bon Preu" /> Bon Preu <br />
    <input type="checkbox" name="filter_order[]" value="Servei personal" /> Servei personal <br />
    <input type="checkbox" name="filter_order[]" value="Artesà" /> Artesà <br />
    <input type="checkbox" name="filter_order[]" value="Família" /> Família <br />
    <input type="checkbox" name="filter_order[]" value="G"  /> This is checkbox <br />
    <input type="checkbox" name="filter_order[]" value="H" /> This is checkbox <br />
 </div>
</div> <
 </div>
</div> 


 <div class="carddos-deck-mytaulell">
 <div class="card">
     <p style="text-align:right; font-size:19px; padding-right: 10px; "> Específiques  </p> 
     <div class="fontsize-normal-buscador"> 
 <div class="containercheck" id="input-order">
 <div class="semi-font-size-general"> 
 <input type="checkbox" name="filter_order[]" value="A cappella" /> A cappella <br />
    <input type="checkbox" name="filter_order[]" value="Absolute Music" /> Absolute Music <br />
    <input type="checkbox" name="filter_order[]" value="Acoustic Music" /> Acoustic Music <br />
    <input type="checkbox" name="filter_order[]" value="D" /> This is checkbox <br />
    <input type="checkbox" name="filter_order[]" value="E" /> This is checkbox <br />
    <input type="checkbox" name="filter_order[]" value="F" /> This is checkbox <br />
    <input type="checkbox" name="filter_order[]" value="G"  /> This is checkbox <br />
    <input type="checkbox" name="filter_order[]" value="H" /> This is checkbox <br />
 </div>  
</div> 
 </div>
 </div> 

</div> 

<div class="nota-info-mytaulell">   <p> Nota: Selecciona les 3 etiquetes que descriguin més bé al teu producte. </p> </div> 

<div style="">
<button type="submit" class="buttoniprod-myt">Inserir Producte</button>
</div> 
				</form>
</div> 
</div> <!--close father-div-container-iprod-myt -->




</div>



</body>
<foot>
<!--<script src="escogercat.js"></script> --> 
</foot> 