<?php
class Pizza extends Articulo {
    public $ingredientes;

    public function __construct($nombre, $coste, $precio, $qty, $ingredientes) {
        parent::__construct($nombre, $coste, $precio, $qty);
        $this->ingredientes = $ingredientes;
    }
}