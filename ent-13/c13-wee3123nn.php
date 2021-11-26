<?php
$serrname = "";
$usname = "";
$paword = "";

try {
    $connn = new PDO("mysql:host=$serrname;dame=db_p", $usname, $paword);
    // set the PDO error mode to exception
    $connn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    header('Location: ./setup.php');
    //echo "Connection failed: " . $e->getMessage();
    }
    
?> 