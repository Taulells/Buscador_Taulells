<?php
session_start();
 include_once 'c13.php';


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

 
  function PioUL($pi) {
    return preg_match('^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$^', $pi);

}

function PitwUL($pit) {
    return preg_match('%^(?:(?:https?|ftp)://)(?:\S+(?::\S*)?@|\d{1,3}(?:\.\d{1,3}){3}|(?:(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)(?:\.(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)*(?:\.[a-z\x{00a1}-\x{ffff}]{2,6}))(?::\d+)?(?:[^\s]*)?$%iu', $pit);

}

function PithUL($pith) {
    return preg_match('/[\^£$%&*()}{@#?><>|=_+¬-]/', $pith);
    ///^[\pL ]{3,300}+$/u
}




           
           function ipficUL($fi) {
            return preg_match('/^[\p{L}\p{N} .-]+$/u', $ficip);
        
        }
        function ipsecUL($se) {
            return preg_match('/^[\p{L}\p{N} .-]+$/u', $se);
        
        }
        function ipthcUL($th) {
            return preg_match('/^[\p{L}\p{N} .-]+$/u', $th);
        
        }  
         

        function dayUL($f) {
            return preg_match('/^[a-zA-Z\s]*$/', $f);
        
        }
        
       
        
        function registerr($pi, $pit, $pith, $pifo,$fi,$sec,$thc,$f,$conn, $connn){
            $error=false;
             

            if(PioUL($pi)==0){
                $error=true;
                return "31";
            }
           
            
            if(PitwUL($pit)==0){
                $error=true;
                return "32";
            }
            if(PithUL($pith)==1){
                $error=true;
                return "33";
            }
            
            if(ipficUL($fi)==0){
                $error=true;
                return "35";
            }
            if(ipsecUL($sec)==0){
               $error=true;
                return "36";
            }
            if(ipthcUL($th)==0){
                $error=true;
                return "37";
            }
            //if(dayUL($f)==0){
            //     $error=true;
            //     return "38";
            //}

            $filetype = strtolower(pathinfo($pifo,PATHINFO_EXTENSION));
            if($filetype != "jpg" && $filetype != "png" && $filetype != "jpeg" ) {
                $error=true;
                return 39;
               }

             // if ($_FILES["pifo"]["size"] > 500000) {
             //   echo "Sorry, your file is too large.";
             //   $uploadOk = 0;
             // }

            
             $CheckCatUExists = $connn->prepare("SELECT * FROM c WHERE c = :c");
             $CheckCatUExists->execute(array(
                 ":c" => $fi
             ));
             $CheckCatUExistsRow = $CheckCatUExists->fetch(PDO::FETCH_ASSOC);
             //if the user is present in the system
             if($CheckCatUExists->rowCount() < 1){


                $scat = $connn->prepare("INSERT INTO cat_i (pia,illca,llct,lct,ce)
                VALUES ( :pia, :illct,:llct,:lct, :ce )");
                $scat->bindParam(':pia', $_SERVER['REMOTE_ADDR']);
                $scat->bindParam(':illca', $fi );
                $scat->bindParam(':llct', $sec );
                $scat->bindParam(':lct', $th );
                $scat->bindParam(':ce', $f );
                $scat->execute();
                 $error=true;
                 return "40";
         
             }   

             $CheckCatDExists = $connn->prepare("SELECT * FROM c WHERE c = :c");
             $CheckCatDExists->execute(array(
                 ":c" => $sec
             ));
             $CheckCatDExistsRow = $CheckCatDExists->fetch(PDO::FETCH_ASSOC);
             //if the user is present in the system
             if($CheckCatDExists->rowCount() < 1){


                $sscat = $connn->prepare("INSERT INTO cat_i(pia,illct,llct,lct,ce)
                VALUES ( :piad, :illct,:llct,:lct, :ce )");
                $sscat->bindParam(':pia', $_SERVER['REMOTE_ADDR']);
                $sscat->bindParam(':illct', $fi );
                $sscat->bindParam(':llct', $sec );
                $sscat->bindParam(':lct', $th );
                $sscat->bindParam(':ce', $f );
                $sscat->execute();
                 $error=true;
                 return "41";
         
             }   

             $CheckCatTExists = $connn->prepare("SELECT * FROM c WHERE c = :c");
             $CheckCatTExists->execute(array(
                 ":c" => $th
             ));

             $CheckCatTExistsRow = $CheckCatTExists->fetch(PDO::FETCH_ASSOC);
             //if the user is present in the system
             if($CheckCatTExists->rowCount() < 1){


                $ssscat = $connn->prepare("INSERT INTO cat_i(pia,illct,llct,lct,ce)
                VALUES ( :pia, :illct,:llct,:lct, :ce )");
                $ssscat->bindParam(':pia', $_SERVER['REMOTE_ADDR']);
                $ssscat->bindParam(':illct', $fi );
                $ssscat->bindParam(':llct', $sec );
                $ssscat->bindParam(':lct', $th );
                $ssscat->bindParam(':ce', $f );
                $ssscat->execute();
                 $error=true;
                 return "42";
         
             }   
               

            if($error==false){
                 
                $ident = $pith;
               
                // prepare sql and bind parameters
                
                $uniq = uniqq($lenght = 16); 
                $tmp = explode(".",$filetype);
                $newfilename = $uniq . '.' . end($tmp);
                $rutpht = 'ent-13/'.'imagenes2/'. $newfilename;
                $rutphtt = 'imagenes/'. $newfilename;
                //$pifo = 'imagenes/' . basename($_FILES["pifo"]["name"]);
                move_uploaded_file($_FILES["pifo"]["tmp_name"], $rutphtt);
                
                //$_FILES["pifo"]["name"]
		        //move_uploaded_file($Imagen['pifo']['name'],);
                $localCne = localDiv($f, $conn);
                $addrCne = addrDiv($f, $conn);
                $horarCne = horarDiv($f, $conn); 

                
                 
                //$cif = $fi ; 
                //$cis = $sec ; 
                //$cit = $th ; 
                $urlpath = parse_url($pitw, PHP_URL_PATH);
                $httur = 'https://'; 
                $htturr = lruDiv($daytime, $conn); 
                $reshtturr = $httur . $htturr . $urlpath;  
                

                    $qtmt = $connn->prepare("INSERT INTO prod ( fl, zytvu, aj, ijel, ewl, wqala,jljl,qu,bqw,ofv,qjbtu ) 
                    VALUES ( :fl,:zytvu, :aj, :ijel, :ewl, :wqala, :jljl, :qu, :bqw, :ofv, :qjbtu)"); 
                    $qtmt->bindParam(':fl', $f);
                    $qtmt->bindParam(':zyvu', $pio );
                    $qtmt->bindParam(':aj', $localCne);
                    $qtmt->bindParam(':ijel', $addrCne);
                    $qtmt->bindParam(':ewl', $horarCne);
                    $qtmt->bindParam(':wqala', $reshtturr);
                    $qtmt->bindParam(':jljl', $ident);
                    $qtmt->bindParam(':qu', $rutpht);
                    $qtmt->bindParam(':bqw', $fi);
                    $qtmt->bindParam(':ofv', $sec);
                    $qtmt->bindParam(':qjbtu', $th);
                    $qtmt->execute();    
        
                    
                return "0";
            } else {
                echo "<p>Problem, Problema, Leave the website, Surt de la pàgina web</p> ";
            }
        }



       


            function localDiv($f, $conn) { 
      
                
                $tmst = $conn->prepare("SELECT soc1 FROM ddb WHERE ul=:ul");
                                $tmst->bindParam(':ul', $f);
                                $tmst->execute();
                                $rwesw = $tmst->fetchAll(PDO::FETCH_COLUMN);
                                $wqqqq = implode("|",$rwesw);
                                $stqdrdd = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', decrypt($wqqqq));
                                
                                return $stqdrdd; 
            }

            function addrDiv($f, $conn) { 
      
                
                $tmst = $conn->prepare("SELECT soc3 FROM ddb WHERE ul=:ul");
                                $tmst->bindParam(':ul', $f);
                                $tmst->execute();
                                $resus = $tmst->fetchAll(PDO::FETCH_COLUMN);
                                $wq = implode("|",$resus);
                                $strdd = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', decrypt($wq));
                                
                                return $strdd; 
                               
            }

            function horarDiv($daytime, $conn) { 
      
                
                $tmst = $conn->prepare("SELECT soc4 FROM ddb WHERE ul=:ul");
                                $tmst->bindParam(':ul', $f);
                                $tmst->execute();
                                $resulw = $tmst->fetchAll(PDO::FETCH_COLUMN);
                                //$strdlt = dept($resulw); 
                                $wqq = implode("|",$resulw);
                                $strdlt = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', decrypt($wqq));
                                
                                return $strdlt; 
                               
                                
            }

            function lruDiv($f, $conn) { 
            
                
                $tmst = $conn->prepare("SELECT soc2 FROM ddb WHERE ul=:ul");
                                $tmst->bindParam(':ul', $f);
                                $tmst->execute();
                                $resww = $tmst->fetchAll(PDO::FETCH_COLUMN);
                                //$strd = dept($resww); 
                                $wqqq = implode("|",$resww);
                                $strd = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', decrypt($wqqq));
                                $str2d = substr($strd, 4);
                                
                                return $str2d; 
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



            function uniqident($lenght = 16) {
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


