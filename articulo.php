<?php

class Articulo {
    public $nombre;
    public $coste;
    public $precio;
    public $qty;

    public function __construct($nombre, $coste, $precio, $qty) {
        $this->nombre = $nombre;
        $this->coste = $coste;
        $this->precio = $precio;
        $this->qty = $qty;
    }

    public function calcularDinares() {
        return ($this->precio - $this->coste) * $this->qty;
    }
}