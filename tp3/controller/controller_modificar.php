<?php
	
	include 'daoPokemon.php';

	$dao=new daoPokemon();

	$id=$_POST['id'];
	$nombre=trim($nombre=$_POST['nombre']);
	$imagen=trim($imagen=$_POST['imagen']);
	$tipo=trim($tipo=$_POST['tipo']); 

	$dao->updatePokemon($id, $nombre, $imagen, $tipo);

	header("Location: ../index.php");
    die();
?>