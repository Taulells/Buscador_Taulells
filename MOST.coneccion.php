<?php 
	/****************************************
	Conexion a Base de Datos con PDO

	*****************************************/
	try
	 {
		$handler = new PDO('mysql:host=127.0.0.1;dbname=','root','');
		$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 }
	catch(PDOException $e)
	 {
		echo $e->getMessage();
	 }

	/*Crear el objeto para accesar a la clase*/
	include_once 'most.class.DB-bsq.php';
	$DBImagen = new DBImagen($handler);
?>

