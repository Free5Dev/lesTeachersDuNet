<?php 
    class Str{

        public static function upper($str){
            return mb_strtoupper($str);
        }
        public static function lower($str){
            return mb_strtolower($str);
        }
        public static function length($str){
            return mb_strlen($str);
        }
    }
    // var_dump((new Str)->upper("toto est cool"));
    // les static nomde la classe ::method
    var_dump(Str::upper("toto est moche"));