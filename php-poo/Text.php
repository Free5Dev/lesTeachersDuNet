<?php 
    require_once './vendor/autoload.php';
    // require_once 'C:\wamp64\www\lesTeachersDuNet\php-poo\vendor\autoload.php'; 
    $hore=new Acme\Person("Honre gogo");
    $pierre=new Acme\Person("Pierre Oui");
    
    $barcelona=new Acme\Team("Barcelona");
    $realMadrid=new Acme\Team("Real Madrid");


    $hore->favorite($barcelona);
    $pierre->favorite($realMadrid);
    $pierre->favorite($barcelona);
    // affichage
    echo $barcelona->getName()." à : ".$barcelona->getNombreFans()." Fans <br/>";
    echo $realMadrid->getName()." à : ".$realMadrid->getNombreFans()." Fans <br/>";

    $liga=new Acme\League("Liga");
    $liga->addTeams($barcelona);
    $liga->addTeams($realMadrid);

    echo $liga->getTeamCount();