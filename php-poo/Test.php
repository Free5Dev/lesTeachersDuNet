<?php 
    class A{
        public function toto(){
            echo"Je suis la methode toto appelee depuis la class A .<br/>";
        }
    }
    class B extends A{
        public function tata(){
           //  apple la methode toto depuis la class B 
            parent::toto();
            // ensuite affiche la methode tata depuis la classe B
            echo "Je suis la methode tata appelee depuis la classe B.<br/>";
        }
    }
//  appel de la methode toto depuis la classe A
    echo (new A)->toto();
//  appel de la methode tata depuis la classe B
    echo (new B)->tata();
//  appel de la methode toto depuis la classe B
    echo (new B)->toto();