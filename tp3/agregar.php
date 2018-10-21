<?php

session_start();
if(isset($_SESSION['user'])!='ok'){
  header("Location: /recursos/403.html");
  die();
}
  include('header.php');
?>

<main>

  <div class="form">
    
    <form action="controller/controller_agregar.php" method="post">
        
        <h2>Nombre</h2>
        <input type="text" id="nombre" placeholder="Ingrese nombre del Pokemon" name="nombre" required><br><br>
        
        <h2>Link de la imagen</h2>
        <input type="text" id="imagen" placeholder=" Ingrese url" name="imagen" required><br><br>

        <h2>Tipo</h2>
        <select id="tipo" name="tipo">
          <option value="1">Acero</option>
          <option value="2">Agua</option>
          <option value="3">Bicho</option>
          <option value="4">Dragón</option>
          <option value="5">Eléctrico</option>
          <option value="6">Fantasma</option>
          <option value="7">Fuego</option>
          <option value="8">Hada</option>
          <option value="9">Hielo</option>
          <option value="10">Lucha</option>
          <option value="11">Normal</option>
          <option value="12">Planta</option>
          <option value="13">Psíquico</option>
          <option value="14">Roca</option>
          <option value="15">Siniestro</option>
          <option value="16">Tierra</option>
          <option value="17">Veneno</option>
          <option value="18">Volador</option>
        </select>
        <br><br>

        <button class="" type="submit">Guardar</button>
  
    </form>

  </div>

</main>

 <?php include('footer.php'); ?>

</body>

</html>