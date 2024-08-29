<?php
    class ContaCorrente{
        public $saldo;

        public function __construct(){}
        
        public function definirSaldoInicial($saldo){
            $this->saldo = $saldo;
        }

        public function depositar($valor){
            $this->saldo += $valor;
        }

        public function sacar($valor){
            if ($this->saldo >= $valor){
                $this->saldo -= $valor;
            }else{
                return false;
            }
        }
    }
?>