<?php
    class Censo{

        private $qtdMulheres;
        private $qtdHomens;
        private $maiorAltura;
        private $menorAltura;
        private $mediaAturaHomens;
        
        public function getMaiorAltura(){
            return $this->maiorAltura;
        }

        public function setMaiorAltura($maiorAltura){
            $this->maiorAltura = $maiorAltura;
        }

        
        public function getMenorAltura(){
            return $this->menorAltura;
        }
        
        public function setMenorAltura($menorAltura){
            $this->menorAltura = $menorAltura;
        }

        
        public function getMediaAturaHomens(){
            return $this->mediaAturaHomens;
        }

        public function setMediaAturaHomens($mediaAturaHomens){
            $this->mediaAturaHomens = $mediaAturaHomens;
        }

        
        public function getQtdHomens(){
            return $this->qtdHomens;
        }

        public function setQtdHomens($qtdHomens){
            $this->qtdHomens = $qtdHomens;
        }


        public function getQtdMulheres(){
            return $this->qtdMulheres;
        }

        public function setQtdMulheres($qtdMulheres){
            $this->qtdMulheres = $qtdMulheres;
        }

        public function realizarCenso(){

        }
    }
?>