<?php

include("con_db.php");

if(isset($_POST["Registrar"])){
    if(strlen($_POST['Nombre'] >= 1) && strlen($_POST['ID']) >= 1 && strlen($_POST['Email']) >= 1){
        $nombre = trim($_POST['Nombre']);
        $id = trim($_POST['ID']);
        $email = trim($_POST['Email']);
        $consulta = "INSERT INTO datos(Nombre, Identificacion, Email) VALUES ('$nombre','$id','$email')";
        $resultado = mysqli_query($conexion,$consulta);

        echo $nombre . "\n";
        echo $id . "\n";
        echo $email . "\n";

}
}

?>