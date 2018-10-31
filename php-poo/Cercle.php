<?php 
    class Cercle extends Form{
        private $rayon=3;
        public function aire(){
            return M_PI * $this->rayon**2;
        }
    }