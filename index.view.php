<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exáment T2 Ignacio</title>

    <style>
        body {
            font-family: monospace;
            font-size: 1rem;
            color: rgb(38, 137, 38);
            background-color: rgb(41, 41, 41);
            display: flex;
            flex-direction: column;
            text-align: center;
            align-items: center;
        }
        h2{
            text-decoration: underline;
            margin: 10px;
        }
    </style>
</head>

<body>
    <h1>¡Menú barato y rico!</h1>
    <?php

    //GitHub: https://github.com/IgnacioCG28/ExamenT2_IgnacioCarmonaGonzalez.git
    include("esqueleto.php");
    // Ejemplo de uso
    mostrarMenu($articulos);
    echo '<h2>¡Los más saboreados!</h2>';
    mostrarMasVendidos($articulos);
    echo '<h2>¡Los más Hot!</h2>';
    mostrarMasLucrativos($articulos);
    ?>


</body>

</html>