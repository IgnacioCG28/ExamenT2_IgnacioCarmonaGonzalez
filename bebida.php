<?php
class Bebida extends Articulo {
    public $conSustancia;

    public function __construct($nombre, $coste, $precio, $contador, $conSustancia) {
        parent::__construct($nombre, $coste, $precio, $contador);
        $this->conSustancia = $conSustancia;
    }
}