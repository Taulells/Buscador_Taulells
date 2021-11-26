<?php
session_start();
 include_once 'c13$12o%-3123nn.php';


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = filter_var($data, FILTER_SANITIZE_STRING);
    
    $data = str_ireplace("", "taul", "$data");
    $data = str_ireplace("", "educado", "$data");
    $data = str_ireplace("", "educado", "$data");
    $data = str_ireplace("", "educado", "$data");
    $data = str_ireplace("", "educado", "$data");
    $data = str_ireplace("", "educado", "$data");
    $data = str_ireplace("", "educado", "$data");
    $data = str_ireplace("", "educado", "$data");
    $data = str_ireplace("", "educado", "$data");
    $data = str_ireplace("", "educado", "$data");
    $data = str_ireplace("", "educado", "$data");
    
    return $data;
  }


  function uuptt($uupdttdwu) {
    return preg_match('#[^\p{L}\s-]#u', $uupdttdwu);
    ///^[\pL ]{3,300}+$/u
    // '#[^\p{L}\s-]#u'
}

  function uupttL($pith) {
    return preg_match('/[\^£$%&*()}{@#?><>|=_+¬-]/', $pith);
    ///^[\pL ]{3,300}+$/u
}

  function dayUL($f) {
    return preg_match('/^[a-zA-Z\s]*$/', $f);

}




  function uupdttdwua($uupdttdwu, $f, $conn){
    $error=false;

    if(uuptt($uupdttdwu)==0){
        $error=true;
        return "31";
    }
    if(uupttL($uupdttdwu)==1){
        $error=true;
        return "31";
    }
  //if(dayUL($f)==0){
        //     $error=true;
        //     return "38";
        //}
            $uuptCheck = lecrypt($uupdttdwu);
            $CheckuupttDExists = $connn->prepare("SELECT * FROM ddb WHERE social1 = :social1");
            $CheckuupttDExists->execute(array(
                ":social1" => $uuptCheck
            ));
               $CheckuupttDExistsRow = $CheckuupttDExists->fetch(PDO::FETCH_ASSOC);
               //if the user is present in the system
               if($CheckuupttDExists->rowCount() > 0){


                $error=true;
                return "41";
        
               }   
    if($error==false){
         
        $uuptEnc = lecrypt($uupdttdwu);


        $sqll = $conn->prepare("UPDATE ddb SET social1=:social1 WHERE ul=:ul");
        $sqll->bindParam(':ul', $f);
        $sqll->bindParam(':social1', $uuptEnc);
        //$sqll->bindParam(':last_time', $failed_login[‘last_time’]);    last_time=:last_time
        $sqll->execute();

            
        return "0";
    } else {
        echo "<p>Problem, Problema, Leave the website, Surt de la pàgina web</p> ";
    }
}






function dupdttda($dupdttdw,$f, $conn){
    $error=false;

   
    if(uupttL($dupdttdw)==1){
        $error=true;
        return "31";
    }
  //if(dayUL($f)==0){
        //     $error=true;
        //     return "38";
        //}
            $dupdCheck = lecryppt($dupdttdw);
            $CheckuupttDExists = $connn->prepare("SELECT * FROM ddb WHERE social2 = :social2");
            $CheckuupttDExists->execute(array(
                ":social2" => $dupdCheck
            ));
               $CheckuupttDExistsRow = $CheckuupttDExists->fetch(PDO::FETCH_ASSOC);
               //if the user is present in the system
               if($CheckuupttDExists->rowCount() > 0){


                $error=true;
                return "41";
        
               }   
    if($error==false){
         
        $dupdEnc = lecrypt($dupdttdw);


        $sqll = $conn->prepare("UPDATE ddb SET social2=:social2 WHERE ul=:ul");
        $sqll->bindParam(':ul', $f);
        $sqll->bindParam(':social1', $dupdEnc);
        //$sqll->bindParam(':last_time', $failed_login[‘last_time’]);    last_time=:last_time
        $sqll->execute();

            
        return "0";
    } else {
        echo "<p>Problem, Problema, Leave the website, Surt de la pàgina web</p> ";
    }
}






function tupdtdp($tupdttd,$f, $conn){
    $error=false;

    
    if(uupttL($tupdttd)==1){
        $error=true;
        return "31";
    }
  //if(dayUL($daytime)==0){
        //     $error=true;
        //     return "38";
        //}
            $tupdCheck = lecrypt($tupdttd);
            $CheckuupttDExists = $connn->prepare("SELECT * FROM ddb WHERE social3 = :social3");
            $CheckuupttDExists->execute(array(
                ":social3" => $tupdCheck
            ));
               $CheckuupttDExistsRow = $CheckuupttDExists->fetch(PDO::FETCH_ASSOC);
               //if the user is present in the system
               if($CheckuupttDExists->rowCount() > 0){


                $error=true;
                return "41";
        
               }   
    if($error==false){
         
        $tupdEnc = lecrypt($tupdttd);


        $sqll = $conn->prepare("UPDATE ddb SET social3=:social3 WHERE ul=:ul");
        $sqll->bindParam(':ul', $daytime);
        $sqll->bindParam(':social3', $tupdEnc);
        //$sqll->bindParam(':last_time', $failed_login[‘last_time’]);    last_time=:last_time
        $sqll->execute();

            
        return "0";
    } else {
        echo "<p>Problem, Problema, Leave the website, Surt de la pàgina web</p> ";
    }
}






function qqupdtpu($qupdttd,$daytime, $conn){
    $error=false;

   
    if(uupttL($qupdttd)==1){
        $error=true;
        return "31";
    }
  //if(dayUL($f)==0){
        //     $error=true;
        //     return "38";
        //}
            $qupdCheck = lecrypt($qupdttd);
            $CheckqupdDExists = $conn->prepare("SELECT * FROM ddb WHERE social4 = :social4");
            $CheckqupdDExists->execute(array(
                ":social4" => $qupdCheck
            ));
               $CheckqupdDExistsRow = $CheckqupdDExists->fetch(PDO::FETCH_ASSOC);
               //if the user is present in the system
               if($CheckuupttDExists->rowCount() > 0){


                $error=true;
                return "41";
        
               }   
    if($error==false){
         
        $qupdEnc = lecryppt($qupdttd);


        $sqll = $conn->prepare("UPDATE ddb SET social4=:social4 WHERE ul=:ul");
        $sqll->bindParam(':ul', $f);
        $sqll->bindParam(':social4', $qupdEnc);
        //$sqll->bindParam(':last_time', $failed_login[‘last_time’]);    last_time=:last_time
        $sqll->execute();

            
        return "0";
    } else {
        echo "<p>Problem, Problema, Leave the website, Surt de la pàgina web</p> ";
    }
}








function lecryppt($inputString){

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

function pkcs7_pad($datas, $size)
{
    $length = $size - strlen($datas) % $size;
    return $datas . str_repeat(chr($length), $length);
}


  ?> 