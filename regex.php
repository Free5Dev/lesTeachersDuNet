<?php

# ^ =>  "commence par" ex : ^abc = commence par "abc"
# $ => "fini par" (ce qu'il y a juste avant) ex : toto$ = finir par toto
# [^] => "ne contient pas (ce qu'il y a dans les crochets)" ex : [^abc] = ne contient ni a, ni b, ni c

# [] => choix ou intervale de caractères
# [abc] => contient a, ou b, ou c
# [a-z] => n'importe quelle lettre entre a et z (minuscule)
# [A-Z] => n'importe quelle lettre entre A et Z (majuscule)
# [0-9] => n'importe quelle chiffre entre 0 et 9
# [a-zA-Z0-9] => n'importe quel caractère alphanumérique majuscule et minuscule, mais sans les accents" : une fois

# - (dans les crochets) => signifie un intervalle
# . (point) => "n'importe quel caractère"
# \ (backslash) => permet d'échapper un caractère
# | (pipe) => "ou bien"

# () => parenthèses capturantes, permet de réutiliser les données "capturées"

# ? ==> 0 ou 1 fois
# + ==> au moins une fois
# * ==> 0 fois, 1 fois ou plusierus fois
#
echo $chaine = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LoUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
echo '<br/>';
echo '<br/>';


$chaine2 = "Dis moi gros gras grand grin d'orge, quand te degrosgrasgrandgrin d'orgeras-tu ? Je me degrosgrasgrandgrin d'orgerai quand tous les gros gras grand grin d'orge se seront degrosgrasgrandgrin d'orge";
echo '<br/>';
echo '<br/>';
echo preg_replace('#gr[aio][s|n]d?#','<i>$0</i>',$chaine2).'<br/>';

// ------------------------------------------------------------------------------------------
echo preg_replace('#(gr)(as|in|os|an)(d?)#','gr<i>$1</i>$2',$chaine2).'<br/>';
// ---------------------------------------------------------------------------------------------------------------------------
$chaine3="Babarrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
#repère "Baba" suivi de 3 "r" (et mettre en rouge)
echo preg_replace('#Babarrr#','<span style="color:red">$0</span>"',$chaine3).'<br/>';
echo preg_replace('#Babar{3}#','<span style="color:red">$0</span>">$0</span>',$chaine3).'<br/>';
// -----------------------------------------------------------------------------------------------------
$chaine4='il fait pas beau à paris';
#repere 3 lettres  à la suite (sans espace donc)
echo preg_replace('#[a-z]{3}#i','<span style="color:red">$0</span>"',$chaine4);
// -------------------------------------------------------------------------------------------------
echo preg_replace('#[ ]f.+t[ ]#i','<span style="color:red">$0</span>"',$chaine4).'<br/>';
// -----------------------------------------------------------------------------------------------------7
#Filtrer dans une chaine de caractère , un mail et le faire cliquable
$texte="Mon email est blagues.a-toto@toto-land.to";
$recherche    = '#([a-z0-9]+([\._-]?[a-z0-9]+)*)@(([a-z0-9]+([\.-]?[a-z0-9]+)+)(\.[a-z]{2,}))#i';

$remplace    = '<a href="mailto:$0">$0</a>';

echo preg_replace($recherche, $remplace, $texte).'<br/><br/>';