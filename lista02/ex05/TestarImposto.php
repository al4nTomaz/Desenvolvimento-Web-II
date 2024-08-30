<?php

    require 'Imposto.php';
    class TestarImposto{

        public function main(){
            $novoImposto = new Imposto(); 

            $novoImposto->setValorImposto($novoImposto->calcularImposto(4000));
            $novoImposto->setNomeFuncionario("Capitu");
            
            echo "<br>".$novoImposto->getValorImposto();
            echo "<br>".$novoImposto->getNomeFuncionario();
        }

    }

?>