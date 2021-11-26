



<?php

include_once 'c13$12o%-3123nn.php';
include_once 'rf-ent-13.php';

session_start(); 


//$vulgaris = ""; 
$emailpath = "/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)" .
"|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}" .
"|[0-9]{1,3})(\]?)$/";
$urlpath = "/^(https):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i"; 


    
    //if form sent if (SERVER["REQUEST_METHOD"] == "POST") {}
    if (isset($_POST['nom'], $_POST['contra'], $_POST['passwordconfirm'])) {
        //insert all values of w3schools
    //$_POST["email"]=trim($_POST["email"]);

    $nom = test_input($_POST["nom"]);
    $email = test_input($_POST["email"]);
    $contra = test_input($_POST["contra"]);
    $passwordconfirm = test_input($_POST["passwordconfirm"]);
    $social1 = test_input($_POST["social1"]);
    $social2 = test_input($_POST["social2"]);
    $social3 = test_input($_POST["social3"]);
    $social4 = test_input($_POST["social4"]);
    
   
  //  '/@.+\./'
        //if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)===false or !preg_match($emailpath, $_POST["email"])) {$error="Invalid Email";return false;}
       // if (filter_var($_POST["social2"], FILTER_SANITIZE_URL)===false or !preg_match($urlpath, $_POST["social2"])) {$error="Invalid Url";return false;}
        //if (strpos($_POST["name"], $vulgaris) !==false){$error="Palabra no permitida";break;} //Maybe don't need it if you do function
       // if ($_POST["contra"]!=$_POST["passwordconfirm"]) {$error="Password mismatch";return false;}
        //if (strlen($_POST["password"])<8) {$error="Password too short (minimum 8 character)";break;}

        if (register($nom, $email, $contra, $passwordconfirm, $social1,  $social2,  $social3,  $social4, $conn) == 0) {
            // register success 
            header('Location: d-good.php');
        } else  if(register($nom, $email, $contra, $passwordconfirm, $social1,  $social2,  $social3,  $social4, $conn) == 3){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Aquest usuari ja no està disponible, utilitza un altre nom.   </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: d-error.php');
            
        } else  if(register($nom, $email, $contra, $passwordconfirm, $social1,  $social2,  $social3,  $social4, $conn) == 4){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: La constrasenya i la confirmació no són iguals, escriu la mateixa contrasenya en les dos caselles. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: d-error.php');
        } else  if(register($nom, $email, $contra, $passwordconfirm, $social1,  $social2,  $social3,  $social4, $conn) == 5){
            // register failed
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: La contraseña ha de contindre un número, una lletra Majúscula, una lletra Minúscula i un mínim de 8 caràcters, per seguretat. </p></div></div>';
            $_SESSION['error'] = $error; 
            header('Location: d-error.php');
        } else  if(register($nom, $email, $contra, $passwordconfirm, $social1,  $social2,  $social3,  $social4, $conn) == 10){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Email no vàlid. Exemple: real@taulells.org </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: d-error.php');
        } else  if(register($nom, $email, $contra, $passwordconfirm, $social1,  $social2,  $social3,  $social4, $conn) == 11){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Sols números i lletres a la casella Nom Establiment. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: d-error.php');
        } else  if(register($nom, $email, $contra, $passwordconfirm, $social1,  $social2,  $social3,  $social4, $conn) == 12){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Patró incorrecte. Patró exemple: www.taulells.org a la casella Pàgina Web Establiment. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: d-error.php');
        } else  if(register($nom, $email, $contra, $passwordconfirm, $social1,  $social2,  $social3,  $social4, $conn) == 13){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Sols números i lletres a la casella Adreça, exemple: Carrer Margarida de les Corts num 32. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: d-error.php');
        } else  if(register($nom, $email, $contra, $passwordconfirm, $social1,  $social2,  $social3,  $social4, $conn) == 14){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Sols números i lletres a la casella Horari Obertura. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: d-error.php');
        } else  if(register($nom, $email, $contra, $passwordconfirm, $social1,  $social2,  $social3,  $social4, $conn) == 16){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Server Fail, Error al nostre servidor, prova un altre cop o més tard. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: d-error.php');
        } else  if(register($nom, $email, $contra, $passwordconfirm, $social1,  $social2,  $social3,  $social4, $conn) == 17){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Server Fail, Error al nostre servidor, prova un altre cop o més tard. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: d-error.php');
        }  else  if(register($nom, $email, $contra, $passwordconfirm, $social1,  $social2,  $social3,  $social4, $conn) == 18){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Server Fail, Error al nostre servidor, prova un altre cop o més tard. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: d-error.php');
        }
        

    } else {
        // The correct POST variables were not sent to this page. 
        echo 'Invalid Request';
    }
       









?> 