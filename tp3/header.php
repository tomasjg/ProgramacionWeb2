<!doctype html>
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
  <h1 class="w3-lobster w3-xxxlarge" ><a href='index.php'>Pokedex!</a></h1>

  <script>
    function abreModal() {
        document.getElementById('modal').style.display='block';
    }
    function cierraModal() {
        document.getElementById('modal').style.display='none';
    }
  </script>

  <?php
  if(isset($_SESSION['user'])!='ok'){
   echo "<div class='w3-display-topright w3-margin-right w3-padding-16' onclick='abreModal();'> <img src='recursos/img/login.png' class='login' style='max-height: 50px;'> </div>";
  }
  if(isset($_SESSION['user'])=='ok'){
   echo "<a href='controller/controller_logout.php' class='w3-display-topright w3-margin-right w3-padding-16'> <img src='recursos/img/logout.png' class='login' style='max-height: 50px;'> </a>";
  }


  echo "<div id='modal' class='w3-modal'>
    <div class='w3-modal-content w3-round-large'>
        <span onclick='cierraModal();' class='w3-button w3-display-topright w3-theme-l3 w3-round-large'>&times;</span>";
        include('recursos/login.html');
  echo "</div>
  </div>";

  ?>
</header>
<br>