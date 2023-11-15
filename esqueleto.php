<?php
//GitHub: https://github.com/IgnacioCG28/ExamenT2_IgnacioCarmonaGonzalez.git

// solicitar los archivos "articulo.php", "bebida.php", "pizza.php";
include("articulo.php");
include("bebida.php");
include("pizza.php");
// Inicialización de los artículos
$articulos = [
    new Articulo("Lasagna", 3.50, 7.00, 20),
    new Articulo("Pan de ajo y mozzarella", 2.00, 4.50, 15),
    new Pizza("Pizza Margarita", 4.00, 8.00, 30, ["Tomate", "Mozzarella", "Albahaca"]),
    new Pizza("Pizza Pepperoni", 5.00, 10.00, 25, ["Tomate", "Mozzarella", "Pepperoni"]),
    new Pizza("Pizza Vegetal", 4.50, 9.00, 18, ["Tomate", "Mozzarella", "Verduras Variadas"]),
    new Pizza("Pizza 4 quesos", 5.50, 11.00, 20, ["Mozzarella", "Gorgonzola", "Parmesano", "Fontina"]),
    new Bebida("Refresco", 1.00, 2.00, 50, false),
    new Bebida("Cerveza", 1.50, 3.00, 40, true)
];

function mostrarMenu($articulos) {
    echo '<h2>Pizzas</h2>';
    foreach ($articulos as $articulo) {
        if ($articulo instanceof Pizza) {
            echo $articulo->nombre . '<br>';
        }
    }

    echo '<h2>Bebidas</h2>';
    foreach ($articulos as $articulo) {
        if ($articulo instanceof Bebida) {
            echo $articulo->nombre . '<br>';
        }
    }

    echo '<h2>Otros</h2>';
    foreach ($articulos as $articulo) {
        if (!($articulo instanceof Pizza) && !($articulo instanceof Bebida)) {
            echo $articulo->nombre . '<br>';
        }
    }
}

function mostrarMasVendidos($articulos) {
    echo '<h2>Los más saboreados!</h2>';
    usort($articulos, function($a, $b) {
        return $b->contador - $a->contador;
    });

    for ($i = 0; $i < 3; $i++) {
        echo $articulos[$i]->nombre . ' - Vendidos: <strong>' . $articulos[$i]->contador . '</strong><br>';
    }
}

function mostrarMasLucrativos($articulos) {
    echo '<h1>¡Los más Hot!</h1>';
    usort($articulos, function($a, $b) {
        return $b->calcularDinares() - $a->calcularDinares();
    });

    foreach ($articulos as $articulo) {
        echo $articulo->nombre . ' - Beneficio de: <strong>' . $articulo->calcularDinares() . '€</strong> <br>';
    }
}