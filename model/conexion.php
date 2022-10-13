<?php

class conexion {

    private $servidor="b9nvcdjmketfzy269pq9-mysql.services.clever-cloud.com";
    private $usuario="uuzpvgxg89gffhy8";
    private $contrasenia="Tv0IGZYDon6UPo7cv0Le";
    private $conexion;

    public function __construct() {

        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=b9nvcdjmketfzy269pq9", $this->usuario, $this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            return "Falla de conexión".$e;
        }

    }

    public function ejecutar($sql) {

        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();

    }

    public function consultar ($sql) {

        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();

    }

}

?>