<?php 

    // inclution des class papa et enfant dans l'order
    // class papa est appele class mere ou supper class
    // class enfant est appele sous class ou class derivée
    require 'Papa.php';
    require 'Enfant.php';
    $enfant= new Enfant;
    var_dump($enfant->toto()); 

    // ----------------------------------------------------------------------------
    require 'Form.php';
    require 'Carre.php';
    require 'Cercle.php';
    require 'Triangle.php';

    echo (new Carre)->aire()."<br/>";
    
    echo (new Triangle)->aire()."<br/>";
    
    echo (new Cercle)->aire()."<br/>";
    // -----------------------------------------------------------------------------
    require 'Person.php';
    require 'Policier.php';
    echo (new Policier("SaidDev","Prod",12,"Sergent"))->fullName();
    
