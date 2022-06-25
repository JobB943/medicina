<?php 
session_start();
$id = $_POST['user_id'];
include '../php/config.php';
$foto = $_FILES['nfoto'];
echo $foto['tmp_name'];
$directorio_destino = "images";

$tmp_name = $foto['tmp_name'];
    
    
        $img_file = $foto['name'];
        $img_type = $foto['type'];
        echo 1;
        // Si se trata de una imagen   
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
 strpos($img_type, "jpg")) || strpos($img_type, "png")))
        {
            //¿Tenemos permisos para subir la imágen?
            echo 2;
            $destino = $directorio_destino . '/' .  $img_file;
            mysqli_query($conn, "UPDATE users SET img = '$destino' WHERE user_id = '$id';");
           (move_uploaded_file($tmp_name, $destino))
        
                ?>

<script type="text/javascript">
     window.location = "perfildo.php";
 </script>
                <?php  

            }
    



    

 ?>

 <script type="text/javascript">
     window.location = "perfil.php";
 </script>