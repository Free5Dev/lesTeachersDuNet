<?php 
    class Triangle extends Form{

        private $base=2;
        private $hauteur=4;
        // redefinition de methode aire()
        public function aire(){
            return ($this->base*$this->hauteur)/2;
            // return ($this->base*$this->hauteur)*0.5;
        }
    }