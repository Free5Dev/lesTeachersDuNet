<?php 
    // une classe abstract est uneclasse qui ne peut pas être instancier cad ne peut contenir new
    abstract class Forme{
    //ET UNE methode abstract est une function sans corps elle doit etre être implementé au niveau des class fille
        abstract public  function aire(); //en plus une mpethode abstract doit être obligatoirement au sein d'une class abstract   
    }