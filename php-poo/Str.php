<?php 
    class Str{

        public static function upper($string){
            return mb_strtoupper($string);
        }
        public static function lower($string){
            return mb_strtolower($string);
        }
        public static function lenght($string){
            return mb_strlen($string);
        }
    }
    $str=new Str();
    // echo $str->upper("Toto est COOL");
    echo Str::upper("Toto est COOL");