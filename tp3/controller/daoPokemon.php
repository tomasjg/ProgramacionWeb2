<?php
	include 'bd.php';

	class daoPokemon{


	public function getPokemonByNombre($nombre){

		$db = new BaseDeDatos();
		$conn=$db->conectar();

		$SQL= "select p.id_pokemon, p.nombre, p.imagen, t.imagen as imagen_tipo from pokemon p join tipo t on t.id_tipo = p.id_tipo  where p.nombre like '%$nombre%'";	
		$result = mysqli_query($conn, $SQL);
		$datos = array();
		
		if ($result){

			$datos = mysqli_fetch_assoc($result);
		}

		$db->desconectar();
		
		return $datos;

	}


	public function getAllPokemons(){

		$db = new BaseDeDatos();
		$conn=$db->conectar();

		$sql="select p.id_pokemon, p.nombre, p.imagen, t.imagen as imagen_tipo from pokemon p join tipo t on t.id_tipo = p.id_tipo order by p.id_pokemon";
		$result=mysqli_query($conn, $sql);
		$pokemons = array();

		while($rows=mysqli_fetch_assoc($result) ){
			$pokemons[$rows['nombre']] = ["id"=>$rows['id_pokemon'], "tipo"=>$rows['imagen_tipo'], "imagen"=>$rows['imagen']];
		}

		$db->desconectar();

		return $pokemons;
	}


	public function savePokemon($nombre, $imagen, $tipo){

		$db = new BaseDeDatos();
		$conn=$db->conectar();	

		$SQL = 	"INSERT INTO pokemon (nombre, imagen, id_tipo)
				 VALUES ('$nombre', '$imagen', '$tipo')";

		mysqli_query($conn, $SQL);
		
		$db->desconectar();

	}

	public function updatePokemon($id, $nombre, $imagen, $tipo){

		$db = new BaseDeDatos();
		$conn=$db->conectar();	

		$SQL = 	"UPDATE pokemon
				 SET nombre = '$nombre', imagen = '$imagen', id_tipo = '$tipo'
				 WHERE id_pokemon = '$id' ";

		mysqli_query($conn, $SQL);
		
		$db->desconectar();

	}

	public function deletePokemon($id){

		$db = new BaseDeDatos();
		$conn=$db->conectar();	

		$SQL = 	"DELETE FROM pokemon WHERE id_pokemon = '$id' ";
		$result=mysqli_query($conn, $SQL);
		
		$db->desconectar();

	}


}

?>