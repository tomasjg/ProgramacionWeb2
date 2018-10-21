<?php
session_start();

    include 'bd.php';
    $db = new BaseDeDatos();
    $conn = $db->conectar();

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Fallo conexion: %s\n", mysqli_connect_error());
    exit();
}


$usuario = $_POST["nombre"];
$clave = $_POST["clave"];
  
if ($stmt = mysqli_prepare($conn, "SELECT * FROM usuario WHERE user = ? and pass = SHA2(?, 224)")) {

    /* ligar parámetros para marcadores */
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $clave);

    /* ejecutar la consulta */
    mysqli_stmt_execute($stmt);
    
    /* obtener valor */
   if(mysqli_stmt_fetch($stmt)) {
        
        echo "Login Correcto";

        $_SESSION['user']  = 'ok';
        header("Location: ../index.php");
        die();

   } else {
        echo "Login Incorrecto";
        header("Location: ../index.php?msj='LoginError'");
        die();
   };

    /* cerrar sentencia */
    mysqli_stmt_close($stmt);
}

/* cerrar conexión */
mysqli_close($conn);


?>
