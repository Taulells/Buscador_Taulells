<?php

include_once 'c13$12o%-3123nn.php';
include_once 'rf-ent-13.php';

session_start(); 

$error = $_SESSION['error'];



?> 

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- STYLESHEETS  -->
<link rel="stylesheet" href="ent-13.css">

<!-- END STYLESHEETS  -->

</head>



<body>
<div> 

            <div class='satisfactori-registre-cont-logo'>
        <div class='logo-registro-registro-subcontainer'> </div>
            </div>
        
        <div class='error-registre-line'> </div>
        
        <div class='satisfactori-registre-container-registre'> 
        
            <div class='satisfactori-registre-registre'>
          <div class='satisfactori-registre-text'>   <div class='fontsize-big-buscador'><p>Extrany!</p> </div> 
        </div> 
            <div class='error-subcontainer-registre'> <p class='fontsize-normal-buscador'> Hola, torna a provar el registre de nou, si l'error perdura comunica'l al <a href='#' style='color:green; '> Taulell d'Errors</a> i t'ajudarem.  </p> </div> 
            <div class='error-subcontainer-registre'> <p class='fontsize-normal-buscador'> Tip: Copia tot el missatge d'Error, així ens ajudarà a trobar el que ha passat.   </p> </div> 
            <?php  print "<h2>" . $error . "</h2>";  ?> 
            
            <a class='satisfactori-button-registre' href='registre.php'> Torna Enrere </a>
            <br>
            <br> 
            <img src='../theimages/taul5.png' alt='Satisfactori' class='responsive' style='margin:auto;' >
            <div class='error-registre-line'> </div>
            </div> 
            
           
           </div>
           
        </div>
        
        
</body>

</html> 