<?php 

    class Policier extends Person{
        private $grade;
        // redefinition du construct
        public function __construct($firstName,$lastName,$age,$grade){
            // pour faire reference à l'objet courant
            parent::__construct($firstName,$lastName,$age);
            $this->grade=$grade;
        }
        // redefinition  de la methode fullName de person au sein de policier
        public function fullName(){
            $fullName=parent::fullName();
            return $fullName.", Policier ".$this->grade." <br/>"; 
        }
    }