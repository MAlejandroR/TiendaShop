<?php

class BD {

//put your code here
    private $conexion;

    public function __construct() {
        try {
            $dsn = "mysql:host=172.17.0.2;dbname=dwes";
            $user = "root";
            $pass = "root";
            $this->conexion = new PDO($dsn, $user, $pass);
        } catch (Exception $ex) {
            die("Error conectando con la bd " . $ex->getMessage());
        }
    }

    /**
     *
     * @param type $nom nombre
     * @param type $pass password
     * @return boolean true si el usuario y passwor existen en la base de datos
     */
    public function verifica_usuario(string $nom, string $pass): bool {

        $pass = md5($pass);

        $consulta = "select * from usuarios where "
                . "nombre=  :nom and pass= :pass ";
        $datos = [":nom" => $nom, ":pass" => $pass];
        $rtdo = $this->ejecuta_consulta($consulta, $datos);
        try {
            if ($rtdo->fetch())
                return true;
            else
                return false;
        } catch (PDOException $e) {
            die("Error consultado " . $e->getMessage());
        }
    }

    private function ejecuta_consulta($sentencia, $valores) {
        try {
            $stmt = $this->conexion->prepare($sentencia);
            $stmt->execute($valores);
        } catch (Exception $ex) {
            die("Error ejecutando consulta" . $ex->getMessage());
        }
        return $stmt;
    }

    public function obtener_productos() {
        $sentencia = "select * from producto";
        $rtdo = $this->ejecuta_consulta($sentencia, null);
        $productos = [];
        try {
            while ($fila = $rtdo->fetch(PDO::FETCH_ASSOC)) {
                $productos[] = $fila;
            }
            //  $productos[]=$rtdo->fetAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error obteniendo los productos " . $e->getMessage());
        }
        return $productos;
    }

    public function obtener_producto($cod) {
        $sentencia = "select * from producto where cod = :cod";
        $datos = [':cod' => $cod];

        $rtdo = $this->ejecuta_consulta($sentencia, $datos);
        try {
            $producto = $rtdo->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error obteniendo producto " . $e->getMessage());
        }
        return $producto;
    }

}
