<?php

    require 'Cachorro.php';
    class TestarCachorro{

        public function main(){
            $novoCachorro = new Cachorro(); 

            $novoCachorro->setNome("Luiz");

            $novoCachorro->setRaca("vira-lata");

            echo "<br>". $novoCachorro->getNome();
            echo "<br>". $novoCachorro->getRaca();
            
            $novoCachorro->setNome("Channnel");

            $novoCachorro->setRaca("exótico");

            echo "<br>". $novoCachorro->getNome();
            echo "<br>". $novoCachorro->getRaca();
        }

    }

?>