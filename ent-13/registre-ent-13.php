<!doctype html>
<html lang="en">
  <head>
    <title>Registre Nou Establiment</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- STYLESHEETS  -->
<link rel="stylesheet" href="ent-13.css">

<!-- END STYLESHEETS  -->
    
  </head>
<body>

<div class="container">

	<?php

	include 'c13$12o%-3123nn.php';

	$conn = mysqli_connect($dst, $dr, $ds, $dme);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// Query to check if the email already exist
	$checkEmail = "SELECT * FROM db WHERE email = '$_POST[email]' ";
	$checkName = "SELECT * FROM db WHERE nom = '$_POST[name]' ";

	// Variable $result hold the connection data and the query
	$result = $conn-> query($checkEmail); 
    $result = $conn-> query($checkName);
	// Variable $count hold the result of the query
	$count = mysqli_num_rows($result);

	// If count == 1 that means the email is already on the database
	if ($count == 1) {
	echo "<div> 

    <div class='satisfactori-registre-cont-logo'>
<div class='logo-registro-registro-subcontainer'> </div>
    </div>

<div class='already-registre-line'> </div>

<div class='satisfactori-registre-container-registre'> 

    <div class='satisfactori-registre-registre'>
  <div class='satisfactori-registre-text'>   <div class='fontsize-big-buscador'><p>Hola! Aquesta direcció E-mail ja esta registrada. Utilitzi un altre E-mail o <a href='#' style='color:green;' >Entra</a> </p> </div>
</div> 
    <div class='already-subcontainer-registre'> <p class='fontsize-normal-buscador'> És aquest el teu E-mail i ja esta registrat? Cap problema, vista el <a href='#' style='color:green; '> Taulell d'Ajuda</a> i solucionem el problema. </p> </div> 
    <a class='satisfactori-button-registre' href='registre.html' > Torna Enrere </a>
    </div> 
    </div> 
    <div class='already-registre-line'> </div>
</div>";
	} else {	
	
	/*
	If the email don't exist, the data from the form is sended to the
	database and the account is created
	*/
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	
	$social1 = $_POST['social1'];
	$social2 = $_POST['social2'];
	$social3 = $_POST['social3'];
    $social4 = $_POST['social4'];


	// The password_hash() function convert the password in a hash before send it to the database
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	
	// Query to send Name, Email and Password hash to the database
	$query = "INSERT INTO db (nosjem, emahsil, cohehntra, s1, s2, s3, s4 ) VALUES ('$name', '$email', '$passHash', '$social1', '$social2', '$social3', '$social4')";
	
	
	if (mysqli_query($conn, $query)) {

		echo "
        
<div> 

<div class='satisfactori-registre-cont-logo'>
<div class='logo-registro-registro-subcontainer'> </div>
</div>

<div class='satisfactori-registre-line'> </div>

<div class='satisfactori-registre-container-registre'> 

<div class='satisfactori-registre-registre'>
<div class='satisfactori-registre-text'>   <div class='fontsize-big-buscador'><p>Benvigut/da! El teu compte a sigut creat satisfactòriament! </p> </div>
</div> 
<div class='satisfactori-subcontainer-registre'> <p class='fontsize-normal-buscador'> Entra al teu compte i comença a crear el teu Taulell </p> </div> 
<button class='satisfactori-button-registre' href='login.html'> Entra </button>
<br>
    <br> 
    <img src='../theimages/taul6.png' alt='Satisfactori' class='responsive' style='margin:auto;' >
</div> 

</div>

<div class='satisfactori-registre-line'> </div>

</div> ";	
		
		} else {
			echo "
            <div> 

    <div class='satisfactori-registre-cont-logo'>
<div class='logo-registro-registro-subcontainer'> </div>
    </div>

<div class='error-registre-line'> </div>

<div class='satisfactori-registre-container-registre'> 

    <div class='satisfactori-registre-registre'>
  <div class='satisfactori-registre-text'>   <div class='fontsize-big-buscador'><p>Extrany! Aixó no tindria que passar. </p> </div>
</div> 
    <div class='error-subcontainer-registre'> <p class='fontsize-normal-buscador'> Hola, torna a provar el registre de nou, si l'error perdura comunica'l al <a href='#' style='color:green; '> Taulell d'Errors</a> i t'ajudarem.  </p> </div> 
    <div class='error-subcontainer-registre'> <p class='fontsize-normal-buscador'> Tip: Copia tot el missatge d'Error, així ens ajudarà a trobar el que ha passat.   </p> </div> 
    <button class='satisfactori-button-registre' href='#'> Torna Enrere </button>
    <br>
    <br> 
    <img src='../theimages/taul5.png' alt='Satisfactori' class='responsive' style='margin:auto;' >
    </div> 
   </div>
   <div class='error-registre-line'> </div>
</div>
 " . $query . "<br>" . mysqli_error($conn) . "<div class='error-registre-line'> </div>" ;
		}	
	}	
 
	

	mysqli_close($conn);
	?>
</div>
	
  </body>


</html>