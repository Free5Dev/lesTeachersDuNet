<?php 
    require 'Papa.php';
    require 'Enfant.php';
    // inclusion des portion de forme
    require 'Forme.php';
    require 'Triangle.php';
    require 'Carre.php';
    require 'Cercle.php';
    // 
    require 'Person.php';
    require 'Policier.php';
   // $enfant=new Enfant();
    // var_dump((new Enfant())->toto());
   echo (new Enfant())->toto()." <br/>";
//    pour les portions de forme
echo (new Carre)->aire()."<br/>";
// echo (new Cercle)->aire()."<br/>";
echo (new Triangle)->aire();

// 
echo (new Policier('said','soumah',2552,"sergent"))->fullName();