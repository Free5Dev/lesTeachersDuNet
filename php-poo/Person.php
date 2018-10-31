<?php 

    class Person{

        // les variables en poo sont appelés attributs
        private $firstName;
        private $lastName;
        private $age;
        public static $totalCount=0;
        // les constructeurs sont appeles à chaque fois que l'on crée un objet de la class
        public function __construct($firstName,$lastName,$age){
            // pour faire reference à l'objet courant
            $this->firstName=$firstName;
            $this->lastName=$lastName;
            $this->age=$age;
            // on increment la variable total count créer
            static::$totalCount++;
        }
        // on utilise le getteur pour retourner la variable totalCount comme cest private
        public static function  getTotalCount(){
             return static::$totalCount;
        }
        // les functions en poo sont appplélés methodes
        public function dancer(){
            echo $this->firstName." est entrain de danser <br/>";
        }
        // methode qui affiche le nom au complet
        public function fullName(){
            return $this->lastName." ".$this->firstName." "; 
        }
        // les getteurs permettent que retour la valuer de l'attribut et les setteurs pour faire une  modification
        public function getAge(){
        //    pour retourner l'age en nombre de jours
            return $this->age*365;
        }
    }
    // une instance de la class Person cad un objet
    $said=new Person("said","soumah",156);
    var_dump($said);
    // appel d'une methode
    var_dump($said->dancer());
    var_dump($said->fullName());
    // affichage des getteurs
    var_dump($said->getAge());
    echo "vous avez ".$said->getAge()." jours";
    // un autre objet de la class
    $other=new Person("free5dev","soumah",201);
    var_dump($other);
    // appel d'une methode
    var_dump($other->dancer());
    var_dump($other->fullName());
       // affichage des getteurs
       var_dump($other->getAge());
       echo "vous avez ".$other->getAge()." jours";

    // pour appler une methode static on utilise le nom de la classe suivie ::
        var_dump(Person::getTotalCount());
       echo "vous avez ".Person::getTotalCount()." personnes créer<br/>";
