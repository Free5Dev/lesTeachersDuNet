<?php 
    namespace Acme;
    
    class League{
        private $name;
        private $teams;
        public function __construct($name){
            $this->name=$name;
            $this->teams=[];
        }
        public function addTeams(Team $team){
            $this->teams[]=$team;
        }
        public function getTeamCount(){
            return count($this->teams);
        }
    }