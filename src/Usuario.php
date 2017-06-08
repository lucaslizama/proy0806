<?php
    class Usuario {
        private $idusuario;
        public $nombre;
        private $clave;

        public function __construct($id,$nombre,$clave) {
            $this->idusuario = $id;
            $this->nombre = $nombre;
            $this->clave = $clave;
        }

        /*Valida la existencia del usuario*/
        public function VerificaUsuario() {
            $fabrica = new FabricaConexion("localhost","root","","exportaciones");
            $conexion = $fabrica->CrearConexion();

            $sql = "select * from acceso where nomusuario='" . $this->nombre . "' " . 
            "and pwdusuario='" . md5($this->clave) . "'";

            $resultado = $conexion->query($sql);

            return $resultado->num_rows >= 1;

            $conexion->close();
            $resultado->close();
        }

        public function ValidaLocal() {
            if(strlen(trim($this->nombre)) == 0)
                return false;
            if(strlen(trim($this->clave)) == 0)
                return false;
            return true;
        }
    }
?>