<?php 
    class BankAccount{
        // les variables en poo on les appeles attributs
        private static $tax=0.8;
        const TAUX=0.007;
        private $accountNumber;
        private $balance=0;

        // les constructeurs
        public function __construct($accountNumber){
            $this->accountNumber=$accountNumber;
            BankAccount::$tax=0.7;
        }
        public static function getTax(){
            return static::$tax;
        }
        // les setteurs pour permettre de faire une modification
        public function setBalance($balance){
            // verification de la balance
            if($balance<10000){
                throw new  Exception("L'argent est trop petit");
            }
            $this->balance=$balance;
        }
        // les getteurs
        public function getBalance(){
            return $this->balance *10;
        }
        public function getAccountNumber(){
            return $this->accountNumber;
        }
        public function setAccountNumber($accountNumber){
            $this->accountNumber=$accountNumber();
        }
    }
    // l'objet compte de honore
    $compteDeHonorer=new BankAccount('547964648584545454554554');
    var_dump($compteDeHonorer->getAccountNumber());
    $compteDeHonorer->setBalance('500000');
    var_dump($compteDeHonorer->getBalance());
    // les variables de classe ou les constantes
    var_dump(BankAccount::getTax());
    var_dump(BankAccount::TAUX);