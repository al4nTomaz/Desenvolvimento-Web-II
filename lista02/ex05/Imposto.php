<?php

    class Imposto{
        
        private $valorImposto;
        private $nomeFuncionario;

        public function getValorImposto(){
            return $this->valorImposto;
        }
        public function setValorImposto($valorImposto){
            $this->valorImposto = $valorImposto;
        }
        
        public function getNomeFuncionario(){
            return $this->nomeFuncionario;
        }
        public function setNomeFuncionario($nomeFuncionario){
            $this->nomeFuncionario = $nomeFuncionario;
        }

        public function calcularImposto($salario){
            if ($salario <= 2259.20) {
                return "insento";
            } else if ($salario >= 2259.21 && $salario <= 2828.65) {
                return $salario * 0.75;
            } else if ($salario >= 2828.66 && $salario <= 3751.05) {
                return $salario * 0.15;
            } else if ($salario >= 3751.06 && $salario <= 4664.68) {
                return $salario * 0.225;
            }
            
        }
    }
?>