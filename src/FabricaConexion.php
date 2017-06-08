<?php
    class FabricaConexion {
        private $host;
        private $user;
        private $pass;
        private $dbname;

        public function __construct($h,$u,$p,$d) { 
            $this->host = $h;
            $this->user = $u;
            $this->pass = $p;
            $this->dbname = $d;
        }

        public function CrearConexion() {
            return new mysqli(
                $this->host,
                $this->user,
                $this->pass,
                $this->dbname
            );
        }
    }
?>