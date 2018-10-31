<?php 
    class A{

        public function toto(){
            echo"Je suis la methode toto appelee depuis la class A<br/>";
        }
    }
    class B extends A{
        public function tata(){
            parent::toto();
            echo"Je suis la methode tata appelee depuis la class B<br/>";
        } 
    }
    echo (new A)->toto();
    echo (new B)->tata();
    // self fait appel à la methode de la classe courante tandisque static fait appel à la classe qui as été instantié