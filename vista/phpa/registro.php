<?php
include("config.php");

if(isset($_POST['registrar'])){
    if(isset($_POST['name']) && (isset($_POST['em'])) && (isset($_POST['pass']))){
        $nombre=$_POST['name'];
        $email=$_POST['em'];
        $contra=$_POST['pass'];
       
    

        $insertar="INSERT INTO usuarios(nombre,email,psw) VALUES ('$nombre','$email','$contra')";

        $resultado=mysqli_query($conn,$insertar);
        if(!$resultado){
            die("fallo en consulta");
        }

       header("Location: indexlogin.php");
    }
    
}
?>