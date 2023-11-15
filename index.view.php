<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: monospace;
            color: rgb(30, 84, 31);
            background-color: rgb(69, 69, 69);
        }
    </style>
</head>

<body>
    <h1>¡Menú barato y rico!</h1>
    <?php
    include("esqueleto.php");
    // Ejemplo de uso
    mostrarMenu($articulos);
    echo '<h2>Los más saboreados!</h2>';
    mostrarMasVendidos($articulos);
    echo '<h2>¡Los más Hot!</h2>';
    mostrarMasLucrativos($articulos);
    ?>


</body>

</html>