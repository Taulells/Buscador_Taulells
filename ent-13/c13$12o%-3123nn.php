
    <!--
       
// Connection variables
// $dbhost	= "";	   // localhost or IP
// $dbuser	= "";		  // database username
// $dbpass	= "";		     // database password
// $dbname	= "db_p";    // database name	

--!> 
<?php
$servername = "";
$usname = "";
$paword = "";

try {
    $conn = new PDO("mysql:host=$servername;dbe=db_p", $usname, $paword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    header('Location: ./setup.php');
    //echo "Connection failed: " . $e->getMessage();
    }
    
?> 