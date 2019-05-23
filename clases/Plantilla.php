<?php

require("Smarty.class.php");

class Plantilla {

    //put your code here
    private $plantilla;

    public function __construct() {
        $this->plantilla = new Smarty();
        $this->plantilla->template_dir = "/var/www/TiendaShop/vistas/plantillas";
        $this->plantilla->compile_dir = "/var/www/TiendaShop/vistas/plantillas_compiladas";
    }

    public function getPlantilla() {
        return $this->plantilla;
    }

    public function mostrar($fichero) {
        $this->plantilla->display($fichero);
    }

    /**
     *
     * @param string $variable_p nombre de la variable en la vista
     * @param type $valor es el valor que quiero dar a esa variable
     */
    public function compartir(string $variable_p, $valor) {
        $this->plantilla->assign($variable_p, $valor);
    }

}
