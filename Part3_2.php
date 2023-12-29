<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario academico</title>
</head>

<body>
    <form method="post">
        <input type="text" name="Nombre" placeholder="Nombre"><br>
        <input type="text" name="ID" placeholder="Identificacion"><br>
        <input type="text" name="Email" placeholder="Correo Electronico"><br>
        <input type="submit" name="Registrar">
    </form>
    <?php
include("Registrar.php")
?>
</body>

</html>