
<html>
<head>
  <title>Pokedex!</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-green.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
  <style>
    .w3-lobster {
        font-family: "Lobster", Sans-serif;
    }
  </style>
</head>

<body class="w3-theme-l3 w3-margin-left">
  <header>
    <h1 class="w3-lobster w3-xxxlarge">Pokedex!</h1>
  </header>
  
  <main>
  <form action="#" method="get">
    <div class="form-group">
      <label for="buscado">Nombre:</label>
      <input type="text" class="form-control" id="whoisthatpokemon" placeholder="Ingrese nombre" name="whoisthatpokemon">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
  </form>


  <?php
    $bichos=  array(  "Bulbasaur"=>["tipo"=>"img/tipos/planta.png","imagen"=>"img/pokemons/bulbasaur.jpg","ataque"=>"Látigo Cepa - Corte - Hoja Afilada - Rayo Solar"],
                      "Squirtle"=>["tipo"=>"img/tipos/agua.png","imagen"=>"img/pokemons/squirtle.jpg","ataque"=>"Golpe Cabeza - Hidrobomba - Fuerza - Cascada"],
                      "Charmander"=>["tipo"=>"img/tipos/fuego.png","imagen"=>"img/pokemons/charmander.jpg","ataque"=>"Rapidez - Ascuas - Llamarada - Pulso Dragón"],
                      "Pikachu"=>["tipo"=>"img/tipos/electrico.png","imagen"=>"img/pokemons/pikachu.jpg","ataque"=>"Ataque Rápido - Impactrueno - Látigo - Surf"],
                      
            );
        
    if(isset($_GET["whoisthatpokemon"])  && !empty($_GET["whoisthatpokemon"]) ){
      $nombre = ucfirst(strtolower($_GET["whoisthatpokemon"]));
      if(in_array($nombre, array_keys($bichos))){
        echo '<div class="w3-card " style="width:22.5%">
              <img src="' . $bichos[$nombre]['imagen'] . '" style="width:100%">
              <div class="w3-container w3-theme-l4">
                <h4>
                  <b>'. $nombre.'</b>
                  <img src="' . $bichos[$nombre]['tipo'] . '">
                </h4>
                <p>'. $bichos[$nombre]['ataque'] .'</p>
              </div>
            </div>';
      }else{
        echo "El pokémon solicitado no existe en la Pokedex";
      }    
    }
    else
    {
      foreach ($bichos as $nombre => $pokemon) {
        echo '<div class="w3-quarter">
                <div class="w3-card " style="width:90%">
                  <img src="' . $pokemon['imagen'] . '" style="width:100%">
                  <div class="w3-container w3-theme-l4">
                    <h4>
                      <b>'. $nombre.'</b>
                      <img src="' . $pokemon['tipo'] . '">
                    </h4>
                    <p>'. $pokemon['ataque'] .'</p>
                  </div>
                </div>
              </div>';

      }
      echo "<br><br>";
    }
  ?>
  </main>
  <footer>
      <p class="w3-display-bottomright w3-margin-right">Tomás Gómez - TP3 - Programación Web II</p> 
  </footer>
</body>
</html>