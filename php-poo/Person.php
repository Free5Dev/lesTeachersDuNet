<?php 
    class Person{
        public $firstName;
        public $lastName;
        public $age;
        // les variables static
        public static $totalCount=0;

        // les constructeurs
        public function __construct($firstName,$lastName,$age){
            $this->firstName=$firstName;
            $this->lastName=$lastName;
            $this->age=$age;
            // pour savoir le nom de variable static qui as été fait
            static::$totalCount++;
        }
        public static function getTotalCount(){
            return static::$totalCount;
        }
        // les methodes en oop
        public function danser(){
            echo $this->firstName." est entrain de danser";
        }
        // une methode qui retourne le nom complet
        public function fullName(){
            echo $this->firstName." ".$this->lastName;
            //printf("%s %s",$this->firstName,$this->lastName);
        }
    }

    // instance de la classe person cad on créer un objet person
    $person=new Person("said","soumah",126);
    var_dump($person->firstName);
    var_dump($person->lastName);
    var_dump($person->age);

    // on execute la methode danser
    $person->danser();
    
    // methode d'affiche du nom complet
    $person->fullName();



 // instance de la classe person cad on créer un objet person
    $person2=new Person("Alain","Yout",124);
    var_dump($person2->firstName);
    var_dump($person2->lastName);
    var_dump($person2->age);

    // on execute la methode danser
    $person2->danser();

    // methode d'affiche du nom complet
    $person2->fullName();
    // pour executer une variable static on met nom de class::nom de la variable
echo "<br/>".Person::getTotalCount();
   
 
