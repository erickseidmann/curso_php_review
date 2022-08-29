<?php 
/*
Operadores logicos 
Nos permitem fazer comparações entre expressões

e - && - and
ou - || - or
ou exclusivo - xor     =quando apenas um é verdadeiro
negação - ! 

*/
// and
$idade = 25;
$nome = "Rodrigo";

if(($idade == 25 ) and ($nome == "Rodrigo")):
	echo "É verdadeiro";
else:
	echo "É falso";
endif;
echo "<br>";

$idade = 28;
$nome = "Rodrigo";

if(($idade == 25 ) || ($nome == "Rodrigo")):
	echo "É verdadeiro";
else:
	echo "É falso";
endif;
echo "<br>";
//xor
$idade = 25;
$nome = "Rodrigo";

if(($idade == 25 ) xor ($nome == "Rodrigo")):
	echo "É verdadeiro";
else:
	echo "É falso";
endif;
echo "<br>";

$idade = 26;
$nome = "Rodrigo";

if(!($idade == 25 ) and ($nome == "Rodrigo")):
	echo "É verdadeiro";
else:
	echo "É falso";
endif;
echo "<br>";

?>