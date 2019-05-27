<?php

class Cesta {

    //put your code here
    private $productos = [];

    //$producto[$cod]['unidades']
    //$producto[$cod]['producto']




    public function add_producto($cod, $bd) {
        if (key_exists($cod, $this->productos))
            $this->productos[$cod]['unidades'] ++;
        else
            $this->productos[$cod]['unidades'] = 1;
        $this->productos[$cod]['producto'] = $bd->obtener_producto($cod);
    }

    static public function obtener_cesta() {
        if (isset($_SESSION['cesta']))
            $cesta = unserialize($_SESSION['cesta']);
        else
            $cesta = new Cesta();
        return $cesta;
    }

    public function guardar_cesta() {
        $_SESSION['cesta'] = serialize($this);
    }

    public function get_productos_cesta() {
        return $this->productos;
    }

}
