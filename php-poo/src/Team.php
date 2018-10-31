<?php
    namespace Acme;
    
    class Team{
        private $name;
        private $nombreFans=0;
        public function __construct($name){
            $this->name=$name;
        }
        public function getName(){
            return $this->name;
        }
        public function getNombreFans(){
            return $this->nombreFans;
        }
        public function favorite(){
            $this->nombreFans++;
        }
    }