<?php

    class Casa{
        private $numQuartos;
        private $metrosQuadrados;
        private $numBanheiros;
        private $endereco;

        public function getNumQuartos(){
            return $this->numQuartos;
        }
        public function setNumQuartos($numQuartos){
            $this->numQuartos = $numQuartos;
        }
        
        public function getMetrosQuadrados(){
            return $this->metrosQuadrados;
        }
        public function setMetrosQuadrados($metrosQuadrados){
            $this->metrosQuadrados = $metrosQuadrados;
        }

        public function getNumBanheiros(){
            return $this->numBanheiros;
        }
        public function setNumBanheiros($numBanheiros){
            $this->numBanheiros = $numBanheiros;
        }

        public function getEndereco(){
            return $this->endereco;
        }
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
    }
?>