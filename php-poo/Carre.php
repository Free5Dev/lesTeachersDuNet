<?php 
    class Carre extends Forme{
        private $cote=4;
        public function aire(){
            return $this->cote*$this->cote;
            // return $this->cote**2;
        //    return  pow($this->cote, 2);
        }
    }