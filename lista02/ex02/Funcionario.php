<?php
    class Funcionario{
        public $nome;
        public $sobrenome;
        public $horasTrabalhadas;
        public $valorPorHora;

        public function nomeCompleto(){
            return $this->nome." ".$this->sobrenome;
        }

        public function calcularSalario(){
            return $this->valorPorHora * $this->horasTrabalhadas;
        }

        public function incrementaHoras($valorPorHora){
            $this->valorPorHora+=$valorPorHora;
        }
    }
?>