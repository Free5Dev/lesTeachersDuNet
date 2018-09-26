<?php 
    class Cercle extends Forme{
        private $cote=4;
        public function aire(){
            return M_PI*($this->cote**2);
        }
        
    }
    echo (new Cercle)->aire();