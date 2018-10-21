<?php
	
	include 'daoPokemon.php';

	$dao=new daoPokemon();

	$id=$_GET['id']; 
	$mje=$dao->deletePokemon($id);

	header("Location: ../index.php");
    die();
?>