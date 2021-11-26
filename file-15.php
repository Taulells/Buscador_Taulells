<?php

if ($_GET["logout"]==1 && isset($_SESSION["nom"])) {
    //$del=$db->prepare("DELETE FROM auth_tokens WHERE userid = ".$_SESSION["user"]);
    //$del->execute();
    //setcookie("remember", "", 111, '/',WEBSITE); //destroy cookie
    session_unset();
    session_destroy();   // delete Session
    //unset($_COOKIE["remember"]); //unset the cookie now, so is not valid for this page too  
    //$debug.="<br>cookie deleted, session destroyed<br>";	
   } 


?> 