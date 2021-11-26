<!-- 
Contact real@taulells.org
Copyright Taulells.org Organization
Version 1805.1
-->



<?php

$tituloPagina = "";
$pagina = "";
session_start();




?> 



<!DOCTYPE html>
<html>

<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- STYLESHEETS  -->
<link rel="stylesheet" href="css-principal.css">

<!-- END STYLESHEETS  -->
 
</head>

<body>



  
<div class="index-top-top-alq"> 

<div class="index-top-left-alq"> 
  
<div class="index-top-left-left-alq"> 
    <div id="mySidepanel" class="sidepanel">
   
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><div class="letter-side-index-close">×</div> </a>
  <div class="container-pagines-alq">
  <a href="#">Taulells.<span class="fontsize-org-title">org</span>  ?</a>
  <a href="#">Per què comerç local?</a>
  <a href="#">Preguntes freqüents </a>
  <a href="#">Contacte</a>
  </div>
</div>

<button class="openbtn" onclick="openNav()">☰</button>  
<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>

</div> <!-- close index-top-left-left-alq--> 

<div class="index-top-left-right-alq"> 

<div class="select-idiomescontainer-alq">
<select class="select-idiomes-box-alq" name="idiomes" id="idiomes">
  <option value="CAT">CAT</option>
  <option value="ESP">ESP</option>
  <option value="ENG">ENG</option>
</select>
</div> 

</div> <!-- close index-top-left-right-alq--> 
</div> <!-- close index-top-left-alq--> 


<div class="index-top-right-alq"> <!--+++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <span class="establiment-box-buscador">
        <span class="close-popup-establiment-box-buscador" onclick="this.parentElement.style.display='none';">&times; <div class="fontsize-small-buscador">Ets establiment local? </div> <a class="button-establiment-buscador" href='ent-13/login.html'>Registra't / Entra</a>  </span>
</span>

</div> <!-- close index-top-right-alq--> 

</div> <!-- close index-top-top-alq--> 

<!-- <div class="establiment-container-buscador"> --> 

<div class="general-container-buscador">


<div class="top-container-buscador">

</div>

<div class="logo-container-buscador">
    

        <div class="logo-img-buscador">
        </div>
        
  
</div>




<div class="text-primer-container-buscador">
     <div class="text-primer-box-buscador">
          <div class="fontsize-big-buscador">
              
    <p>Busca i descobreix si venen el producte que necessites al teu poble </p>

  
              
          </div> <!--close fontsize-big-buscador -->
     </div>  <!--close text-primer-box-buscador-->
</div>    <!--close text-primer-container-buscador -->

      

<div class="select-container-buscador">
    <div class="select-center-container-buscador">
        
<select name="poblacions" id="poblacions">
  <option value="molins">Molins de Rei</option>
</select>
    
    </div> <!--close select-center-container-buscador -->
</div><!--close select-container-buscador -->

<div class="container-linia-buscador">
                               <div class="linia-buscador"> </div> </div> 

<div class="buscador-container-buscador">

<form action="resultat-productes.php"  autocomplete="off" method="get" class="buscador-center-container-buscador" role="form">
            <div class="buscador-estil-container-buscador">
              <input type="text" placeholder="Introduïu el nom del producte..." name="buscar" class="buscador-estil-buscador">
              <input type="submit" name="enviando" value="Cerca" class="buscador-button-buscador"> 
            </div> <!--close buscador-estil-container-buscador -->
</form>
</div> <!--close buscador-container-buscador -->



<div class="iniciativa-container-buscador">
    <div class="iniciativa-box-buscador">
        <p>Buscador Taulells.org és una iniciativa que ajuda als ciutadans a trobar productes als seus pobles i ciutats i així fonamentar el consum local i de proximitat. Buscador Taulells.org no és cap tenda on es pugui comprar sinó un buscador per trobar al seu poble el producte que necessita. <div style="font-style:italic">Agraïment supergarantit!</div> <a href="#">#Síalconsumlocal</a>  </p>
</div> <!--close  iniciativa-box-buscador-->
</div> <!--close iniciativa-container-buscador -->



<div class="popup-nouselements-buscador">
  <span class="close-popup-nouselements-buscador" onclick="this.parentElement.style.display='none';">&times;</span> 
  <p><strong>Novetat: </strong>Ei! Hem afegit l'etiqueta <label class="label-novesetiquetes-buscador"> artesà </label> pels productes artesans. Recomanem donar-li un cop d'ull. </p>
</div> <!--close popup-nouselements-buscador -->














<div class="text-segon-container-buscador">

     <div class="text-segon-header-buscador">
        <div class="text-segon-headertext-buscador"> 
            <div class="fontsize-sub-buscador">
         <p> En buscar al Buscador Taulells.org trobaràs: </p> 
            </div>
        </div>
        </div>
        <div class="text-segon-box-buscador">   
    <p> <span class="dot"></span>Els productes relacionats amb la teva cerca situats al teu municipi </p>
    <p> <span class="dot"></span>Foto del producte </p>
    <p> <span class="dot"></span>Nom de l'establiment local i el seu horari d'obertura </p>
    <p> <span class="dot"></span>Enllaç a la seva pàgina Web </p>
    <p> <span class="dot"></span>La seva Adreça ( carrer ) </p>
    <p> <span class="dot"></span>Descripció del producte </p>
     
   </div>
</div> <!--close text-segon-container-buscador -->


<div class="alert">
  <span class="closennoaccepta" onclick="this.parentElement.style.display='none';">&times; <p> No galetes </p></span> 
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

  <div class="text-cookies-buscador">
 <div class="text-cookies-separation-buscador"> <span> A part de menjar-les, utilitzem galetes per millorar la navegació i optimitzar el buscador entre altres tasques.</span> </div>
 <div class="text-cookies-separation-buscador">  <span> Si continueu navegant, entendrem que accepteu els nostres <a href="#">Termes</a>.</span> </div>

  <div class="mobile-text-cookies-separation-buscador"> <span> Utilitzem galetes per millorar el buscador. Visita <a href="#">Termes</a> </span>  </div> 
  <div class="mobile-text-cookies-separation-buscador"> <span> per més informació. </span>  </div> 
</div> <!--close text-cookies-buscador-->


</div> <!--close alert -->








<div class="container-fullqstat-gran">

<div class="center-fullcostat">

<div class="fontsize-big-buscador">
<div class="title-fullqstat-gran"><p> Quan comprem al poble, ajudem... </p> </div> 
</div>

<div class="fontsize-normal-buscador">

  <div class="second-animation-container">
<div class="animation-container">
<div class="burst">
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div>
  
</div> 
</div>
</div> 
  <div class="subtitle-fullqstat-gran">
  <p> <div class="dot"></div> Al les petites botigues </p>
  <p> <div class="dot"></div> A persones com nosaltres </p>
  <p> <div class="dot"></div> Al teixit comercial de la nostra vila </p>
  </div> 
  
  <div class="sub-subtitle-fullqstat-gran">
  <a href="#"> Per què comerç local? </a> 
  </div> 

<div class="first-animation-container">
<div class="animation-container">
<div class="burst">
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</div> 
</div>
</div> 



  
 </div>

 <div class="third-animation-container">
<div class="animation-container">
<div class="burst">
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  
</div> 
</div>
</div> 

<div class="">
<img src="theimages/fullqstat.png" alt="#" class="responsive" width="923" height="407">
</div> 

</div> 
</div> 

<!--END  gran -->

<div class="space-between-lines">

</div>


<div class='lines'>
<div class="fontsize-big-buscador">
  <span>Etiquetes</span>
  </div>  <!--END fontsize-big-buscador -->
</div> <!--END lines -->

<div class="container-etiq-index-taulells"> 

<div class="subcontainer-etiq-index-r-taulells">

<div class="one-document-etiq-r-taulells"> 
    <p> Artesà </p> 
  </div> 

  <div class="two-document-etiq-r-taulells"> 
    <p> Servei personal</p> 
  </div> 

  <div class="three-document-etiq-r-taulells"> 
    <p> Bon Preu </p> 
  </div> 

</div> 

<div class="subcontainer-etiq-index-l-taulells">

<div class="one-document-etiq-l-taulells"> 
    <p> Botiga familiar</p> 
  </div> 

  <div class="two-document-etiq-l-taulells"> 
    <p> Desde 1950</p> 
  </div> 

  <div class="three-document-etiq-l-taulells"> 
    <p>Família</p> 
  </div> 

</div> 

</div> 


<div class="file-text-etiq-taulells">
  
  <p> Les etiquetes donen color als teus productes! Identifiquen els valors principals que vols transmetre als usuaris i clients. </p> 
  <div class="ind-infcommun-box-button-taulells">
  <button class="ind-infcommun-button-taulells">Més Informació</button> 
</div> 
</div> 
<!--
<div class="container-swing-taulells">
  <div class="swing-taulells">
    <div class="main-content-swing-taulells"></div>
  </div>
  </div>
-->
<div class="mega-box-commun-container-taulells">

<div class="mega-box-commun-left-taulells">

<div class="container-animation-box-taulells"> 
  <div class="box-taulells">
  <img src="theimages/ship-taulells.png" alt="#" class="responsiveet" width="171" height="132">
  </div> 
<div class="water-con-taulells">
<img src="theimages/water-con.png" alt="#" class="responsiveet" width="400" height="509">
</div> 
</div> <!--close container-animation-box-taulells  --> 

</div> <!--close mega-box-commun-left-taulells -->


<div class="mega-box-commun-right-taulells"> 

<div class="ind-infcommun-container-taulells">

  <div class="ind-infcommun-box-taulells">
     <div class="fontsize-big-buscador"> 
  <p> <div style="color:green; padding-bottom:3px;">Taulorgg!!</div> Ajuda'ns a mantenir i millorar la Comunitat Taulells</p> 
     </div> 
  </div> 

  <div class="ind-infcommun-semibox-taulells"> 
  <div class="fontsize-normal-buscador">
  <p> Descobreix la quantitat de tasques en les que tú pots pren-ne part! </p>
  </div> 
</div> 
<div class="ind-infcommun-box-button-taulells">
  <button class="ind-infcommun-button-taulells">Veure tasques</button> 
</div> 
</div> 

</div> <!--close mega-box-commun-right-taulells -->
</div> <!-- close mega-box-commun-container-taulells -->

<div class="footer">
  <div class="div-footer-taulells"> 
  <p> Projectes Oberts</p> 
  <div class="separacio-footer-taulells"><a href="#" style="text-decoration:none; color:green;">Comunitat Taulells</a></div>
  <div class="separacio-footer-taulells"><a href="#" style="text-decoration:none; color:green;">Buscador Taulells</a></div>
  <div class="separacio-footer-taulells"><a href="#" style="text-decoration:none; color:green;">Biblioteca Taulells</a></div>
  <p> Sobre Taulells.org</p> 
  <div class="separacio-footer-taulells"><a href="#" style="text-decoration:none; color:green;">Objectius i Esforços</a></div>
  <div class="separacio-footer-taulells"><a href="#" style="text-decoration:none; color:green;">Membres i donants</a></div>
  <div class="separacio-footer-taulells"><a href="#" style="text-decoration:none; color:green;">Qui som?</a></div>
  <div class="separacio-footer-taulells"><a href="#" style="text-decoration:none; color:green;">Contacte</a></div>

  </div> 
            <div class="footer-photo-taulells">
                
      <img style="height:195px; width:287px; " src="theimages/notext-taulells-logo.jpg"> </img> 
       
            </div> 
            <div class="footer-text-phrase-taulells">
            <i>Tecnologia per pobles i ciutats, creada pels ciutadans dels pobles i ciutats. </i>
            </div>
            <div class="footer-line-taulells"> </div> 
            <div class="footer-back-copy-taulells">  
            
            <div class="footer-twoback-copy-taulells">
                <a href="#" style="text-decoration:none; color:green; ">◉ Condicions d'Ús & Cookies ◉</a>
                </div>
             
                <div class="footer-twoback-copy-taulells">
                <a href="#" style="text-decoration:none; color:green; ">◉ Copyright 2021 Taulells.org Organization ◉</a> 
            </div> 

            </div> 
</div>
</body>
<foot>
</foot>
</html>
