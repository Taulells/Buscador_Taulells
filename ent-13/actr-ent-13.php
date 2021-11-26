
<?php

include_once 'c13.php';
include_once 'c13-we.php';
include_once 'act-ent-13.php';
//session_start(); 
 


//$vulgaris = ""; 
$emailpath = "/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)" .
"|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}" .
"|[0-9]{1,3})(\]?)$/";
$urlpath = "/^(https):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i"; 


    
    //if form sent if (SERVER["REQUEST_METHOD"] == "POST") {}
    if (isset($_POST['pio'], $_POST['pitw'], $_POST['pith'])) {
        //insert all values of w3schools
    //$_POST["email"]=trim($_POST["email"]);
    
        //Comprobamos si se envió el arreglo 'filter_order' y si cumple con la condición de tener tres valores
        
             
             
        

    $pio = test_input($_POST["pio"]);
    $pit = test_input($_POST["pitw"]);
    $pith = test_input($_POST["pith"]);
    
    $target_dir = "imagenes2/";
    $pifo = $target_dir . basename($_FILES["pifo"]["name"]);
     

    //if(isset($_POST['filter_order']) &&  count($_POST['filter_order']) == 3){ //Aqui estableci que estrictamente deben ser 3 letras, pero si la condición es otra cambiar el criterio
            
        //$picfi = $_POST['filter_order'];  
        $arrletters = $_POST['filter_order']; //obtenemos las letras
        //$txtLetters = implode(' ',$arrletters); //concadenamos los valores con un espacio color f5ac78  #bad1ff 
        //echo $txtLetters;//imprimimos las letras 
         
         
         
    //}else{
       // echo 'Variable vacia o No se cumple con la condición';
       //$error='<div style="text-align:center; font-size:18px; color:orange; "><div><p> Només 3 etiquetes, si error continua, tanca sessió i torna a entrar. </p></div></div>';
        //$_SESSION['error'] = $error;
        //header('Location: de-error.php');
    //}
    $_SESSION['picfi']  = $arrletters[0] ?? "";
    $_SESSION['picse']  = $arrletters[1] ?? "";
    $_SESSION['picth'] = $arrletters[2] ?? "";
     $fi =  $_SESSION['picfi'];
    $sec =  $_SESSION['picse']; 
     $th =  $_SESSION['picth'];  
    $f = $_SESSION['todaysdate'];
    
   
  //  '/@.+\./'
        //if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)===false or !preg_match($emailpath, $_POST["email"])) {$error="Invalid Email";return false;}
       // if (filter_var($_POST["social2"], FILTER_SANITIZE_URL)===false or !preg_match($urlpath, $_POST["social2"])) {$error="Invalid Url";return false;}
        //if (strpos($_POST["name"], $vulgaris) !==false){$error="Palabra no permitida";break;} //Maybe don't need it if you do function
       // if ($_POST["contra"]!=$_POST["passwordconfirm"]) {$error="Password mismatch";return false;}
        //if (strlen($_POST["password"])<8) {$error="Password too short (minimum 8 character)";break;}

        if (registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 0) {
            // register success 
            header('Location: de-good.php');
        } else  if(registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 31){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Caracters inválids, només lletres   </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: de-error.php');
            
        } else  if(registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 32){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: La URL és incorrecta, copy-paste la url de la teva pàgina web amb la direcció correcta al producte. Exemple: https://taulells.org/exempleproducte </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: de-error.php');
        } else  if(registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 33){
            // register failed
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>En la descripció del producte sols números i lletres. </p></div></div>';
            $_SESSION['error'] = $error; 
            header('Location: de-error.php');
        } else  if(registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 34){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p> La imatge no és correcte, sols admetem .jpg , .png o jpeg. La imatge a de contindre sols números i lletres. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: de-error.php');
        } else  if(registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 35){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p> Hola, la primera casella que ha marcat conté un error, selecciona un altre o surt i torna a entrar.  </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: de-error.php');
        } else  if(registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 36){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p> Hola, la segona casella que ha marcat conté un error, selecciona un altre o surt i torna a entrar. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: de-error.php');
        } else  if(registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 37){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Hola, la tercera casella que ha marcat conté un error, selecciona un altre o surt i torna a entrar. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: de-error.php');
        } else  if(registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 38){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p>Error: Error al servidor, tanca la sessió i torna a entrar. Si error perdura, contacta amb el Taulells Ajuda. Comunica Error1313. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: de-error.php');
        } else  if(registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 39){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p> La imatge no és correcte, sols admetem .jpg , .png o jpeg. </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: de-error.php');

        } else  if(registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 40){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p> STOP, YOU AND YOUR ACCOUNT HAVE BEEN ANALYSED AND REPORTED </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: out-ent-13.php');
        } else  if(registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 41){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p> STOP, YOU AND YOUR ACCOUNT HAVE BEEN ANALYSED AND REPORTED </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location:  out-ent-13.php');
        } else  if(registerr($pi, $pit, $pith, $pifo,$fi,$sec,$th,$f,$conn, $connn) == 42){
            // register failed 
            $error='<div style="text-align:center; font-size:18px; color:orange; "><div><p> STOP, YOU AND YOUR ACCOUNT HAVE BEEN ANALYSED AND REPORTED </p></div></div>';
            $_SESSION['error'] = $error;
            header('Location: out-ent-13.php');
       
        }
        

    } else {
        // The correct POST variables were not sent to this page. 
        echo 'Invalid Request';
    }
       









?> 

















?> 
