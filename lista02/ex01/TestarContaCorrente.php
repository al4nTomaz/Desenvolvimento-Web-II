<?php

    require 'ContaCorrente.php';
    class TestarContaCorrente{

        public function main(){
            $novaConta = new ContaCorrente(); 

            $novaConta->definirSaldoInicial(1000);

            echo "<br>". $novaConta->saldo;

            $novaConta->sacar(500);

            echo "<br>". $novaConta->saldo;

            $novaConta->depositar(50);

            echo "<br>". $novaConta->saldo;

            if(!$novaConta->sacar(600)){
                echo "<br>valor não disponivel para saque!<br>";
            }

            echo "<br>". $novaConta->saldo;
        }

    }

?>