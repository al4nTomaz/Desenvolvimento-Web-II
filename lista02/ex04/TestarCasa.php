<?php

    require 'Casa.php';
    class TestarCasa{

        public function main(){
            $novoCasa = new Casa(); 

            $novoCasa->setNumQuartos(4);
            $novoCasa->setMetrosQuadrados(50);
            $novoCasa->setNumBanheiros(4);
            $novoCasa->setEndereco("R. Silva Jardim, 340 - Boa Morte, Barbacena - MG, 36201-004");
            
            echo "<br>".$novoCasa->getNumQuartos();
            echo "<br>".$novoCasa->getMetrosQuadrados();
            echo "<br>".$novoCasa->getNumBanheiros();
            echo "<br>".$novoCasa->getEndereco();
        }

    }

?>