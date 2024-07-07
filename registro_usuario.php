<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
   
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];


    $contrasena = hash('sha512', $contrasena);
  

    $query = "INSERT INTO personal (nombre, email, contrasena)
         Values('$nombre','$email','$contrasena')";

    //vw
    $verificar_nombre = mysqli_query($conexion, "SELECT * FROM personal WHERE nombre='$nombre' ");



    if(mysqli_num_rows($verificar_nombre) > 0){
        echo '
            <script>
             alert("Este nombre ya esta registrado, intenta de nuevo");
             window.location = "Formulario.php";
            </script>
        ';
        exit();
    }

    

    
    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo '
             <script>
             alert("Usuario registrado exitosamente");
             window.location = "Formulario.php";
             </script>
        
        ';
    }else{
        echo'
        <script>
             alert("Intentelo de nuevo");
             window.location = "Formulario.php";
             </script>

         ';    

    }
    
    mysqli_close($conexion);
?>