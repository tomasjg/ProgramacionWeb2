<?php session_start();
include('header.php');
?>

<div class="clear"></div>

<main>
  <form action="#" method="get">
    <div class="form-group">
      <label for="buscado">Nombre:</label>
      <input type="text" class="form-control" id="whoisthatpokemon" placeholder="Ingrese nombre" name="whoisthatpokemon">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
  </form>
  <br>


  <?php

    if(isset($_SESSION['user'])=='ok'){
      echo"<form action='agregar.php' method='get'>
            <button type='submit'>Agregar</button>
            <br><br>
          </form>";
    }

    include './controller/daoPokemon.php';
    $dao = new daoPokemon();
    $pokemons = $dao->getAllPokemons();
        
    if(isset($_GET["whoisthatpokemon"])  && !empty($_GET["whoisthatpokemon"]) ){
      $nombre = ucfirst(strtolower($_GET["whoisthatpokemon"]));
      if(array_key_exists($nombre, $pokemons)){
        echo '<div class="w3-card " style="width:22.5%">
              <img src="' . $pokemons[$nombre]['imagen'] . '" style="width:100%">
              <div class="w3-container w3-theme-l4">
                <h4>
                  <b>'. $nombre .'</b>
                  <img src="' . $pokemons[$nombre]['tipo'] . '">
                </h4>
              </div>
            </div>';



        if(isset($_SESSION['user'])=='ok'){
            echo "<div class='center'>
              <a href='modificar.php?nombre=$nombre&imagen=" . $pokemons[$nombre]['imagen'] . "&id=" . $pokemons[$nombre]['id'] . "'>
               <input type='button' value='Modificar'>
              </a>
              <a href='controller/controller_eliminar.php?id=" . $pokemons[$nombre]['id'] . "'>
                <input type='button' value='Eliminar'></a>
              </div>";
         }  
      }else{
        echo "El pokémon solicitado no existe en la Pokedex";
      }
    }
    else
    {
      foreach ($pokemons as $nombre => $pokemon) {
        echo '<div class="w3-quarter">
                <div class="w3-card " style="width:90%; margin-bottom:30px">
                  <img src="' . $pokemon['imagen'] . '" style="width:100%">
                  <div class="w3-container w3-theme-l4">
                    <h4>
                      <b>'. $nombre .'</b>
                      <img src="' . $pokemon['tipo'] . '">
                    </h4>
                  </div>
                </div>
              </div>';
      }
      echo "<br><br>";
    }


    if(isset($_GET["msj"])=='LoginError'){
      echo '<script type="text/javascript">alert("Error: Usuario o contraseña incorrectos!");</script>';
    }
  ?>
  </main>

  <?php
    include('footer.php');
  ?>

