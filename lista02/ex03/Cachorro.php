<?php

    class Cachorro{
        private $nome;
        private $raca;

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getRaca(){
            return $this->raca;
        }
        public function setRaca($raca){
            $this->raca = $raca;
        }
    }
?>