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

    /**
     * este método devuelve el importe total de la cesta
     */
    public function importe_total() {
        $total = 0;
        foreach ($this->productos as $producto)
            $total += $producto['unidades'] * $producto['producto']['PVP'];
        return $total;
    }

    public function vaciar() {
        $this->productos = [];
    }

    /**
     * método que me indica si la cesta está o no vacía
     * Es decir, si hay productos en la cesta
     */
    public function cesta_vacia() {
        if (count($this->productos) > 0)
            return false;
        else
            return true;
    }

}
