<?php

include_once 'c13$12o%-3123nn.php';
include_once 'c13-wee3123nn.php';
include_once 'act-ent-13.php';
 
//session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['uupdt'])) {
    $uupdttdwu = test_input($_POST["uupdt"]);
    $f = $_SESSION['f'];
    //$nom = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $nom); //XSS Security

    if (uupdttdwua($uupdttdwu,$f, $conn) == 0) {
        // register success 
        header('Location: myTaulell.php');
    } else  if(uupdttdwua($uupdttdwu,$f, $conn) == 20){
        // register failed 
        $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Email o Contrasenya incorrecte. </p></div></div>';
            $_SESSION['error'] = $error;
        header('Location: d-error.php');
    }else  if(uupdttdwua($uupdttdwu,$f, $conn) == 21){
        // register failed 
        $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Email o Contrasenya incorrecte. </p></div></div>';
            $_SESSION['error'] = $error;
        header('Location: registre.php');
      }
    } else {
        // The correct POST variables were not sent to this page. 
        echo 'Invalid Request';
    }




    
if (isset($_POST['dupdt'])) {
    $dupdttdw = test_input($_POST["dupdt"]);
    $f = $_SESSION['f'];
    //$nom = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $nom); //XSS Security

    if (dupdttda($dupdttdw,$f, $conn) == 0) {
        // register success 
        header('Location: myTaulell.php');
    } else  if(dupdttda($dupdttdw,$f, $conn) == 20){
        // register failed 
        $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Email o Contrasenya incorrecte. </p></div></div>';
            $_SESSION['error'] = $error;
        header('Location: d-error.php');
    }else  if(dupdttda($dupdttdw,$f, $conn) == 21){
        // register failed 
        $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Email o Contrasenya incorrecte. </p></div></div>';
            $_SESSION['error'] = $error;
        header('Location: registre.php');
      }
    } else {
        // The correct POST variables were not sent to this page. 
        echo 'Invalid Request';
    }




    
if (isset($_POST['tupdt'])) {
    $tupdttd = test_input($_POST["tupdt"]);
    $f = $_SESSION['f'];
    //$nom = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $nom); //XSS Security

    if (tupdtdp($tupdttd,$f, $conn) == 0) {
        // register success 
        header('Location: myTaulell.php');
    } else  if(tupdtdp($tupdttd,$f, $conn) == 20){
        // register failed 
        $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Email o Contrasenya incorrecte. </p></div></div>';
            $_SESSION['error'] = $error;
        header('Location: d-error.php');
    }else  if(tupdtdp($tupdttd,$f, $conn) == 21){
        // register failed 
        $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Email o Contrasenya incorrecte. </p></div></div>';
            $_SESSION['error'] = $error;
        header('Location: registre.php');
      }
    } else {
        // The correct POST variables were not sent to this page. 
        echo 'Invalid Request';
    }


    
if (isset($_POST['qupdt'])) {
    $qupdttd = test_input($_POST["qupdt"]);
    $f = $_SESSION['f'];
    //$nom = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $nom); //XSS Security

    if (qqupdtpu($qupdttd,$f, $conn) == 0) {
        // register success 
        header('Location: myTaulell.php');
    } else  if(qqupdtpu($qupdttd,$f, $conn) == 20){
        // register failed 
        $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Email o Contrasenya incorrecte. </p></div></div>';
            $_SESSION['error'] = $error;
        header('Location: d-error.php');
    }else  if(qqupdtpu($qupdttd,$f, $conn) == 21){
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


