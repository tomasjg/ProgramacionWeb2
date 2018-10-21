<?php
	
	include 'daoPokemon.php';

	$dao=new daoPokemon();

	$nombre=trim($nombre=$_POST['nombre']);
	$imagen=trim($imagen=$_POST['imagen']);
	$tipo=trim($tipo=$_POST['tipo']); 

	$dao->savePokemon($nombre, $imagen, $tipo);

	header("Location: ../index.php");
    die();
?>