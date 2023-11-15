<?php
class Bebida extends Articulo {
    public $alcohol;

    public function __construct($nombre, $coste, $precio, $contador, $alcohol) {
        parent::__construct($nombre, $coste, $precio, $contador);
        $this->alcohol = $alcohol;
    }
}