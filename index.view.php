<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>
    <h1>¡Menú barato y rico!</h1>
    <?php
    include("esqueleto.php");
    // Ejemplo de uso
    mostrarMenu($articulos);
    mostrarMasVendidos($articulos);
    mostrarMasLucrativos($articulos);
    ?>


</body>

</html>