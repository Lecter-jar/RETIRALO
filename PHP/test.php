<?php
    
    require_once("Persona.php");
    require_once("Usuario.php");

    $objUsuario = new Usuario();
    $user = $_GET['user'];
    $password = $_GET['password'];
    
    //$objUsuario->_nombre = $user;
    //$objUsuario->_contrasena = $password;
    
    
    include 'db.php';
    
   /* if($conn) {
        echo "Conexion exitosa";
    }
    else {
        die ("Fallo conexion" . mysqli_connect_error());
    }*/

    
     $query= "SELECT * from Usuario WHERE Nombre='$user' AND Contrasena='$password' OR Email='$user' AND Contrasena='$password'";
     $resultado = $conn -> query($query);
     
     while($fila = $resultado -> fetch_array()){
         $usuario[] = array_map('utf8_encode', $fila);
     }
    echo json_encode($usuario);
    $resultado -> close();

?>
    