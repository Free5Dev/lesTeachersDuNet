<?php 
    // class enfant herite de papa cad la class papa etend ses possiblités à la classe papa
    class Enfant extends Papa{

        public function toto(){
            return $this->getNombreDeTete();
        }

    }