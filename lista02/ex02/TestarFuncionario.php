<?php

    require 'Funcionario.php';
    class TestarFuncionario{

        public function main(){
            $novoFuncionario = new Funcionario(); 

            $novoFuncionario->nome = "Luiz";

            $novoFuncionario->sobrenome = "Silva";

            echo "<br>". $novoFuncionario->nomeCompleto();
            
            $novoFuncionario->horasTrabalhadas = 10;
            $novoFuncionario->valorPorHora = 25.50;
            
            echo "<br>". $novoFuncionario->calcularSalario();
            
            $novoFuncionario->incrementaHoras(8);

            echo "<br>". $novoFuncionario->calcularSalario();
        }

    }

?>