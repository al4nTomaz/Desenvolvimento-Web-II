<?php

    class Banco {

        /* private $host='localhost';
        private $port=3306; 
        private $dbname='padaria';
        private $username='root';
        private $password='';*/
        
        private $host='wagnerweinert.com.br';
        private $port=3306; 
        private $dbname='tads23_alan';
        private $username='tads23_alan';
        private $password='tads23_alan';
        private $conexao;

        public function __construct(){
            $this->conexao = new PDO("mysql:host=".$this->host. ";port=" . $this->port . ";dbname=".$this->dbname, $this->username, $this->password);
        }

        public function getConexao() {
            return $this->conexao;
        }
    }
?>