<?php 

    class BankAccount{
        // les attributs
        private $accountNumber;
        private $balance=0;
        // les constantes comme leurs noms l'indiquent on ne peut pas modifier leurs valeurs
        const TAX=0.8;
        // les constructeurs pour construire l'objet
        public function __construct($accountNumber){
            $this->accountNumber=$accountNumber;
        }
        public static function getTAX(){
            return static::TAX;
        }
        // les setteurs pour modifier l'attribut de la balance et effectuer des verifications
        public function setBalance($balance){
            if($balance<10000){
                throw new Exception("L'argent est trop petit");
            }
            return $this->balance=$balance;
        }
        // les getteurs pour retourner la valeur de la balance sans pouvoir acceder aux attributs
        public function getBalance(){
            return $this->balance;
        }

    }
    $compteSaid=new BankAccount("00157410148541028541028");
    var_dump($compteSaid);
    // pour modifier l'attribut de la balance à travers le setteurs
    $compteSaid->setBalance(2000000000);
    var_dump($compteSaid);
    // pour afficher la nouvelle balalnce à travers le getteurs
    var_dump($compteSaid->getBalance());
    // affichage de la const
    var_dump(BankAccount::getTAX());
