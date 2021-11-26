<?php
$busqueda=$_GET["buscar"];

?>
<!DOCTYPE html>
<html>

<head>  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- STYLESHEETS  -->
<link rel="stylesheet" href="css-principal.css">


<!-- END STYLESHEETS  -->
<style>
.navbar{
    z-index:1;
    overflow: hidden;
    background-color: white;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    width: 100%;
    padding-bottom: 10px;
    border-bottom: mediumseagreen solid 2px;

}
.main-content-resultat{
    height: 100%;
    width: 100%;
    padding-top: 150px;
}
.main-subcontent-resultat{
    width: 80%;
    padding-top: 2%;
    padding-right: 3% ;
    padding-left: 3%;
    padding-bottom: 2% ; 
    border-radius: 10px;
    margin-left: 5%;
    margin-right: 5%; 
    background-color:#3CB371; 
    background-color: rgba(82, 197, 82, 0.7);
}
.main-subcontent-linequadrat-resultat{
    border: white solid 2px;
    padding: 10px; 
}
.main-textbox-one-resultat{
    width: 100%;
    text-align: center;
    margin-bottom: 3px; 
   
}
.main-textbox-two-resultat{
    width: 100%;
    text-align: center; 
}
.main-tornaboto-resultat{
    width: 100%;
    margin-bottom: 20px;  
    
}
.main-boto-tornaboto-resultat{
    margin-left: 2%; 
    padding: 8px 15px;
    text-align: center;
    border-bottom: 1px solid mediumseagreen;
    font-size: 12px; 
    text-decoration: none; 
    color: black; 
}

.main-textresultat-resultat{
    width: 90%;
    margin-left: 10%;
    margin-top: 30px; 
}
.resultats-container-resultats{
    text-align; center; 
    width: 100%; 
    margin-left: 1.5%; 
  
}


    </style>
</head>
   
<body>

<div class="navbar">

<div class="buscador-container-buscador">

<form action="resultat-productes.php"  autocomplete="off" method="get" class="buscador-center-container-buscador" role="form">
            <div class="buscador-estil-container-buscador">
              <input type="text" placeholder="Introduïu el nom del producte..." name="buscar" class="buscador-estil-buscador">
              <input type="submit" name="enviando" value="Cerca" class="buscador-button-buscador"> 
            </div>
</form>
</div>


</div> <!--end top-container-resubsq -->

<div class="main-content-resultat">

 <div class="main-tornaboto-resultat">
<a class="main-boto-tornaboto-resultat" href="buscar-producte-local.php"> Torna a pàgina d'Inici </a>
 </div> 

<div class="main-subcontent-resultat"> 
<div class="main-subcontent-linequadrat-resultat">
   <div class="main-textbox-one-resultat">
<p> En trobar el producte, sols queda anar a comprar-lo! </p> 
    </div>
    <div class="main-textbox-two-resultat">
<p> Vés a donar un bon tomb pel poble així ajudant al comerç local. </p> 
    </div> 
    <div class="main-textbox-two-resultat">
<p> <div style="font-style:italic"><span class="dot"></span>Agraïment supergarantit!<span class="dot"></span></div> </p> 
    </div> 
    </div> 
</div> 




<div class="main-textresultat-resultat">
<p>Resultats:</p>  
</div> 

<div class="resultats-container-resultats">
<?php   
{
    /*Crear el objeto para accesar a la clase*/
$handler = new PDO('mysql:host=127.0.0.1;dbname=db_panelballena','root','');
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
include_once 'most.class.DB-bsq.php';
$DBImagen = new DBImagen($handler);
    
    
    $DBImagen->iewImages(); 
}
?>

</div>





<div class="popup-nouselements-buscador">
  <span class="close-popup-nouselements-buscador" onclick="this.parentElement.style.display='none';">&times;</span> 
  <p><strong>Nota: </strong>Cada dia parlem amb més comerços locals i afegim més productes a la llista. Si no ha pogut trobar el producte que busca, això no vol dir que no estigui al seu poble. Provi de buscar amb una altra paraula o busqui més tard. </p>
  <p style="color:#9ACD32;"> Busca i descobreix si venen el producte que necessites al teu poble Alcostat.cat </p> 
</div>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>








</div> <!--end main-content-resultat -->



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
