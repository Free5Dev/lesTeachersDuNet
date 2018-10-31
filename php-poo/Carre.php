<?php 
    class Carre extends Form{
        private $cote=4;
        public function aire(){
            return $this->cote**2;
        }
    }