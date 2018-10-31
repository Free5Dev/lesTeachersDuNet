<?php 
    // une classe abstract est une classe qui ne peut pas être instanatier cad pas de new CLASS et une classe abstract peut contenir des methodes abstract et des methodes non abstract tandisque une methode abstract doit etre obligatoirement au sein d'une classe abstract 
    abstract class Form{
        // une methode abstract est une methode qui n'as pas de corps en plus une methode abstract doit obligatoire etre au sein d'une classe abstract et toute les classe qui herite de forme doit obligatoirement avoir une methode aire()
        abstract public function aire();
    }