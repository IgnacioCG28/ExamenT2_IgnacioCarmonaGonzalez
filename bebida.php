<?php
class Bebida extends Articulo {
    public $alcohol;

    public function __construct($nombre, $coste, $precio, $qty, $alcohol) {
        parent::__construct($nombre, $coste, $precio, $qty);
        $this->alcohol = $alcohol;
    }
}