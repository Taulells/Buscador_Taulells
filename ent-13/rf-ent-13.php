<?php

define ("COrCTO",''); //random string for extra salt

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = filter_var($data, FILTER_SANITIZE_STRING);
    return $data;
  }

//function test_email($email){ if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  return $email; } else {  echo() } }

//function test_url(){}


function NameOk($norfm) {
    return preg_match("/[^a-zA-Z0-9]+/", $norfm);

}

//Password complexity as per https://technet.microsoft.com/en-us/library/cc786468(v=ws.10).aspx
function PasswordOk($contra) {
    $uppercase = preg_match('@[A-Z]@', $contra);
    $lowercase = preg_match('@[a-z]@', $contra);
    $number    = preg_match('@[0-9]@', $contra);
    
    if(!$uppercase || !$lowercase || !$number || strlen($contra) < 8) {
        return 0;
    }else{
        return 1;
    }
}

function SocialOneOk($social1){
    return preg_match('/[\^£$%&*()}{@#?><>|=_+¬-]/', $social1); 
}
//'/^[a-z\d_]{3,15}$/i'
function UrlOk($social2){
    return preg_match('@(www?([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', $social2); 

}

function SocialThreeOk($social3){
    return preg_match('/[\^£$%&*()}{@#?><>|=_+¬-]/', $social3); 
}

function SocialFourOk($social4){
    return preg_match('/[\^£$%&*()}{@#?><>|=_+¬-]/', $social4); 
}
// '^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$'
 // function isValidDateOfBirth($dob){ return preg_match("/^(\d{2})-(\d{2})-(\d{4})$/", $dob);} 

//Used to add a a user to the database. Input is sanitized before it gets here.
function register($nom, $email, $contra, $passwordconfirm, $social1, $social2, $social3, $social4, $conn){
    $error=false;
    if(NameOk($norfm)==1){
        $error=true;
        return "3";
    }
    if($contra!=$passwordconfirm){
        $error=true;
        return "4";
    }
    if(PasswordOk($contra)==0){
        $error=true;
        return "5";
    }
    if((!filter_var($email, FILTER_VALIDATE_EMAIL))){
        $error=true;
        return "10";
    }
    if(SocialOneOk($social1)==1){
        $error=true;
        return "11";
    }
    if(UrlOk($social2)==0){
        $error=true;
        return "12";
    }
    if(SocialOneOk($social3)==1){
        $error=true;
        return "13";
    }
    if(SocialOneOk($social4)==1){
        $error=true;
        return "14";
    }
    //Get decrypt ready!!!
    //Check that username is not already in use, if it is return an error.

    

     
            $CheckUserExists = $conn->prepare("SELECT * FROM db WHERE norfm = :norfm");
            $CheckUserExists->execute(array(
                ":norfm" => $norfm
            ));
            $CheckUserExistsRow = $CheckUserExists->fetch(PDO::FETCH_ASSOC);
            //if the user is present in the system
            if($CheckUserExists->rowCount() > 0){
                $error=true;
                return "16";
        
            }
        
            $CheckEmailExists = $conn->prepare("SELECT * FROM db WHERE email = :email");
            $CheckEmailExists->execute(array(
                ":email" => $email
            ));
            $CheckEmailExistsRow = $CheckEmailExists->fetch(PDO::FETCH_ASSOC);
            //if the user is present in the system
            if($CheckEmailExists->rowCount() > 0){
                $error=true;
                return "17";
        
            }

            $CheckUrlExists = $conn->prepare("SELECT * FROM db_l WHERE social2e = :social2e");
            $CheckUrlExists->execute(array(
                ":social2e" => $social2
            ));
            $CheckUrlExistsRow = $CheckUrlExists->fetch(PDO::FETCH_ASSOC);
            //if the user is present in the system
            if($CheckUrlExists->rowCount() > 0){
                $error=true;
                return "18";
        
            }
        

    //If no errors, continue with registration 
    if($error==false){
        $nomEnc = ulencrwwypt($norfm); 
        $emailEnc = ulencrwwypt($email); 
        $cleu = password_hash($_POST['contra'].COrCTO, PASSWORD_DEFAULT, ['cost' => 12]);
        $social1Enc = lecryadpt($social1); 
        $social2Enc = lecryadpt($social2); 
        $social3Enc = lecryadpt($social3); 
        $social4Enc = lecryadpt($social4); 
        $efe = 0; 
        
        $identfq = uniqidReal($lenght = 13);
        // prepare sql and bind parameters
       
            $stmt = $conn->prepare("INSERT INTO db_cl (norfm, email, contra, ul )
            VALUES (:nom, :email, :contra, :ul)");
            $stmt->bindParam(':norfm', $nomEnc);
            $stmt->bindParam(':email', $emailEnc );
            $stmt->bindParam(':contra', $cleu);
            $stmt->bindParam(':ul', $identfq);
            
            $stmt->execute();    

            $sstmt = $conn->prepare("INSERT INTO ddb_cl (ul, norfm, social1, social2, social3, social4  )
            VALUES ( :ultra, :nom, :social1, :social2, :social3, :social4 )");
            $sstmt->bindParam(':ul', $identfq);
            $sstmt->bindParam(':norfm', $nomEnc);
            $sstmt->bindParam(':social1', $social1Enc );
            $sstmt->bindParam(':social2',$social2Enc );
            $sstmt->bindParam(':social3',$social3Enc );
            $sstmt->bindParam(':social4', $social4Enc);
            $sstmt->execute();  
            
            
            $sstmtte = $conn->prepare("INSERT INTO db_l (ultra,social2e )
            VALUES ( :ultra, :social2e )");
            $sstmtte->bindParam(':ultra', $identfq);
            $sstmtte->bindParam(':social2e', $social2Enc);
            
            $sstmtte->execute();   

            $sstmtt = $conn->prepare("INSERT INTO reg_m (ultra,coeu, ccnt )
            VALUES ( :ul, :coeu, :ccnt )");
            $sstmtt->bindParam(':ul', $identfq);
            $sstmtt->bindParam(':coeu', $emailEnc);
            $sstmtt->bindParam(':ccnt', $efe );
            
            $sstmtt->execute(); 
       
        return "0";
    } else {
        echo "<p>Problem, Problema, Leave the website, Surt de la pàgina web</p> ";
    }
}


function errorLogging($errorNum){
    $error="";
    if(isset($_GET["error"])){
        if($_GET["error"]=="1"){
            $nom = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $_GET['norfm']); //XSS Security
            $_SESSION['varname'] = $var_value;
            $error='<div class="col-lg-12"><div class="alert alert-warning">The username <strong>'.$nom.'</strong> & password combination cannot be authenticated at the moment. </strong></div>';

        }
        if($_GET["error"]=="2"){
            $nom = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $_GET['nom']); //XSS Security
            $error='<div class="col-lg-12"><div class="alert alert-danger"><strong>The username <strong>'.$nom.'</strong> has been locked out for too many failed login attempts! Please try again later.. </strong></div>';
        }
        if($_GET["error"]=="3"){
            $error='<div class="col-lg-12"><div class="alert alert-warning"><strong>The username you entered is invalid. Please use alphanumerical charaters only. </strong></div>';
        }
        if($_GET["error"]=="4"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">Your passwords did not match.</div>';
        }
        if($_GET["error"]=="5"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">Your passwords must meet the following criteria: </br></br>           
                    - Must be a minimum of 8 characters</br> 
                    -  Must contain at least 1 number</br> 
                    - Must contain at least one uppercase character</br> 
                    - Must contain at least one lowercase character</br></div>';
        }
        if($_GET["error"]=="6"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">Your passwords did not match.</div>';
        }
        if($_GET["error"]=="7"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">Your username was not found. Do not edit sessions.</div>';
        }
        if($_GET["error"]=="8"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">Email entered did not match records.</div>';
        }
        if($_GET["error"]=="9"){
            $error='<div class="col-lg-12"><div class="alert alert-success">Your password has been updated. Click <a href="./index.php">HERE</a> to login. </div>';
        }
        if($_GET["error"]=="10"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">You did not eneter a valid email.</div>';
        }
        if($_GET["error"]=="11"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">You need to enter your date of birth in the format DD-MM-YYYY.</div>';
        }
        if($_GET["error"]=="12"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">Sorry, that username OR email is already in use.</div>';
        }
        if($_GET["error"]=="13"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">Sorry, you entered an invalid token.</div>';
        }
        if($_GET["error"]=="14"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">Sorry, that token has expired, please request a new token.</div>';
        }
        if($_GET["error"]=="15"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">Sorry, the date of birth you entered did not match our records.</div>';
        }
        if($_GET["error"]=="16"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">Sorry, error 16.</div>';
        }
        if($_GET["error"]=="17"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">Sorry, error 16.</div>';
        }
        if($_GET["error"]=="18"){
            $error='<div class="col-lg-12"><div class="alert alert-warning">Sorry, error 16.</div>';
        }
        return $error;
    }
}

function login($eeemaiil, $contra, $conn) {

    
$_POST["email"]=trim($_POST["email"]);

 
//if not valid email "end cicle" and show again the login form
if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)===false or !preg_match('/@.+\./', $_POST["email"])) { $error=true; return "10";}



//$throttle_delay = throttle_failed_logins($eemaiil, $conn);
//if ($throttle_delay > 0) {

   
    //$message = "Too many login attempts. ";
    //$message .= "You must wait " . $throttle_delay . " minutes before you can attempt another login.";
//}
//******************** ADD A DELAY FOR AVOID BRUTAL FORCE ATTACKS 
//otherwise read from database how many login attemps in the last 10 minutes from the same IP address
//$sql = $conn->prepare("SELECT data FROM reg_log WHERE pii='".$_SERVER['REMOTE_ADDR']."' and access=0 and data>date_sub(now(), interval 10 minute) ORDER BY data DESC");
//$sql->execute();
//$attempts=$sql->rowCount();
//$last=$sql->fetchColumn();
//$last=strtotime($last);
//$delay=min(max(($attempts-3),0)*2,60); //after 3rd wrong try, add a delay of (# attempts * 2) as seconds (maximum 30 seconds each try)
	
//if there are many tries in few second, show a messagge and "end cicle" so doesnt check the email/pw this time
//if (time()<($last+$delay)) {$error=true; return "21";}  //$delay
//***************************************************************



$emailD = ulcrypt($eeemaiil);
$stmmt = $conn->prepare("SELECT * FROM db_cl WHERE emil=:emil");
        $stmmt->bindParam(':emil', $emailD);
        $stmmt->execute();
//$sql = $conn->prepare("SELECT * FROM db_cl WHERE emil=?");
//$sql->bindParam(1, $emailD);
//$sql->execute();
$rows = $stmmt ->fetch(PDO::FETCH_ASSOC);	

//check if password type is match with password in the database
//using php function password_hash in the register.php and password_verify here



$checked = password_verify($_POST['contra'].CORRECTO, $rows["contra"]);
if ($checked) { //if email/pw are right:
    



	$_SESSION['f'] = $rows["ul"];
    
	
	

//redirect to page with content only for members
header("location:myTaulell.php");
clear_failed_logins($eeemaiil, $conn);
//if email/pw are wrong	
} else {
    
  //record_failed_login($eeemaiil, $conn);
  $failed_times = find_username($eemaiil, $conn);
        $emailDD = ulcrypt($eeemaiil);
        $become = 0; 
        //$oneattempt = 1 ;
        //$integerIDs = array_map('intval', explode(',', $oneattempt));
        //$integerIIDs = array_map('intval', explode(',', $failed_times));
        //$c= $integerIDs += $integerIIDs ;
    
        $cfinal = ($failed_times + 1) ; 
         
        $sqll = $conn->prepare("UPDATE reg_m SET ccnt=:ccnt WHERE coeu=:coeu");
        $sqll->bindParam(':coeu', $emailDD);
        $sqll->bindParam(':ccnt', $cfinal);
        //$sqll->bindParam(':last_time', $failed_login[‘last_time’]);    last_time=:last_time
        $sqll->execute();

            $sstmttt = $conn->prepare("INSERT INTO reg_lg (pi,a,acess)
            VALUES ( :pi, :a, :acess )");
            $sstmttt->bindParam(':pi', $_SERVER['REMOTE_ADDR']);
            $sstmttt->bindParam('a', $emailDD );
            $sstmttt->bindParam(':acess', $become );
            $sstmttt->execute();  
       
    $error=true;
                return "20";
    //$message=($attempts>1)?"Wrong credentials ($attempts attempts)":"Wrong credentials retry";
    
}
    //$sql = $conn->prepare("INSERT INTO reg_lg (pi,a,acess) VALUES (? ,? ,?)");
    //$sql->bindParam(1, $_SERVER['REMOTE_ADDR']);
    //$sql->bindParam(2, $_POST["email"]);
    //$sql->bindParam(3, $checked);
    //$sql->execute(); 

//save the access log
  }







//////////////////////////////////////////////////////////////////////////////////////////////7



  //////////////////////////////////////////////////////////////////////////////////////////////7  
    
    
    function find_username($eeemaiil, $conn) { 
      
        $emailDD = ulcrypt($eemaiil);
        $tmst = $conn->prepare("SELECT ccount FROM reg_m WHERE coeu=:coeu");
                        $tmst->bindParam(':coeu', $emailDD);
                        $tmst->execute();
                        $result = $tmst->fetch(PDO::FETCH_ASSOC);
                    
                       
                        $string = implode("|",$result);
                        return $string; 

    
    }


    
    function update_failed_logins_table($conn, array $failed_login) {
    //$db = DB::getInstance();
    //$pdo = $db->getConnection();
    $swtm = $conn->prepare("UPDATE reg_m SET  ccnt=:ccnt, last_time=:last_time WHERE nemo=:nemo"); //email or maybe better name ‘UPDATE users SET  count=:count, last_time=:last_time WHERE email=:email’
    //$stmt = $pdo->prepare($query);
    $swtm->bindParam(':ccnt', $failed_login[‘count’]);
    $swtm->bindParam(':last_time', $failed_login[‘last_time’]);
    $swtm->execute();
    
    }
    

    function record_failed_login($eeemaiil, $conn) {
    
        $failed_times = find_username($eeemaiil, $conn);
        $emailDD = ulencrwdypt($eeemaiil);
        //$oneattempt = 1 ;
        //$integerIDs = array_map('intval', explode(',', $oneattempt));
        //$integerIIDs = array_map('intval', explode(',', $failed_times));
        //$c= $integerIDs += $integerIIDs ;
    
        $cfinal = ($failed_times + 1) ; 
         
        $sqll = $conn->prepare("UPDATE reg_m SET ccnt=:ccnt WHERE coeu=:coeu");
        $sqll->bindParam(':coeu', $emailDD);
        $sqll->bindParam(':ccnt', $cfinal);
        //$sqll->bindParam(':last_time', $failed_login[‘last_time’]);    last_time=:last_time
        $sqll->execute();
    } 
    

    function clear_failed_logins($eeemaiil, $conn) { 
        $emailDD = ulencrywdpt($eeemaiil);
         $zeroattempt = 0 ; 
        $sqll = $conn->prepare("UPDATE reg_m SET ccount=:ccnt WHERE coeu=:coeu");
        $sqll->bindParam(':coeu', $emailDD);
        $sqll->bindParam(':ccnt', $zeroattempt);
        //$sqll->bindParam(':last_time', $failed_login[‘last_time’]);    last_time=:last_time
        $sqll->execute();
    }
    
    // Returns the number of minutes to wait until logins
    // are allowed again.
    function throttle_failed_logins($eeemaiil, $conn) {
    $throttle_at = 500;
    $delay_in_minutes = 5;
    $delay = 60 * $delay_in_minutes;
    
    $failed_login = find_username($eemaiil, $conn);
    
    // Once failure count is over $throttle_at value, 
    // user must wait for the $delay period to pass.
    if ($failed_login && $failed_login['ccount'] >= $throttle_at) {
        $remaining_delay = ($failed_login['last_time'] + $delay) - time();
        $remaining_delay_in_minutes = ceil($remaining_delay / 60);
        return $remaining_delay_in_minutes;
    } elseif (!$failed_login && isset($_SESSION['nemonus']) && (int) $_SESSION['ccount'] > $throttle_at) {
        $remaining_delay = ($_SESSION['last_time'] + $delay) - time();
        $remaining_delay_in_minutes = ceil($remaining_delay / 60);
        return $remaining_delay_in_minutes;
      }
        //return 0;
        //$error=true;
        //return "20";
   
}
  

//Modified version of encryption and decryption using OpenSLL below
//https://stackoverflow.com/questions/10916284/how-to-encrypt-decrypt-data-in-php


function ulencrdwypt($inputString){

    $encryption_key = "";
    $iv = "";

    $crypt = base64_encode( openssl_encrypt(
        pkcs7_pad($inputString, 16),    // Input String
        'AES-256-CBC',                  // cipher and mode
        $encryption_key,                // secret key
        0,                              // options (not used)
        $iv                             // initialisation vector
    ) );

    return $crypt;
}


function lecrwwypt($inputString){

    $encryption_key = "";
    $iv = "";

    $crypt = base64_encode( openssl_encrypt(
        pkcs7_pad($inputString, 16),    // Input String
        'AES-256-CBC',                  // cipher and mode
        $encryption_key,                // secret key
        0,                              // options (not used)
        $iv                             // initialisation vector
    ) );

    return $crypt;
}

function decrypt($inputString){
    $encryption_key = "";
    $iv = "";

    $crypt = openssl_decrypt( 
        base64_decode(pkcs7_pad($inputString, 16)),    // Input String
        'AES-256-CBC',                  // cipher and mode
        $encryption_key,                // secret key
        0,                              // options (not used)
        $iv                             // initialisation vector
    ); 
    $decryptedRemovePadding = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', $crypt);
    return $decryptedRemovePadding;
}
function pkcs7_pad($datas, $size)
{
    $length = $size - strlen($datas) % $size;
    return $datas . str_repeat(chr($length), $length);
}

function uniqidReal($lenght = 13) {
    // hackan at https://www.php.net/manual/en/function.uniqid.php
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($lenght / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
    } else {
        throw new Exception("no cryptographically secure random function available");
    }
    return substr(bin2hex($bytes), 0, $lenght);
      }






?> 