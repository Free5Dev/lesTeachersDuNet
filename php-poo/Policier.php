<?php 
    class Policier extends Person{
        private $grade; 

        public function __construct($firstName,$lastName,$age,$grade){
            parent::__construct($firstName,$lastName,$age);
            $this->grade=$grade;
        }
        public function fullName(){
           // echo $this->firstName." ".$this->lastName;
            //printf("%s %s, policier",$this->firstName,$this->lastName);
            return parent::fullName().", policier ".$this->grade;
        }
    }