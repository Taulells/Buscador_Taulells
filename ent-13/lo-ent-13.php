<?php

include_once 'c13$12o%-3123nn.php';
include_once 'rf-ent-13.php';
 
session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['email'], $_POST['contra'])) {
    $eemaiil = test_input($_POST["email"]);
    $contra = test_input($_POST["contra"]);
    //$nom = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $nom); //XSS Security

    
    if (login($eemaiil, $contra, $conn) == 0) {
        // register success 
        header('Location: myTaulell.php');
    } else  if(login($eemaiil, $contra, $conn) == 20){
        // register failed 
        $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Email o Contrasenya incorrecte. </p></div></div>';
            $_SESSION['error'] = $error;
        header('Location: d-error.php');
    }else  if(login($eemaiil, $contra, $conn) == 21){
        // register failed 
        $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Email o Contrasenya incorrecte. </p></div></div>';
            $_SESSION['error'] = $error;
        header('Location: registre.php');
      }
    } else {
        // The correct POST variables were not sent to this page. 
        echo 'Invalid Request';
    }
       
?> 





