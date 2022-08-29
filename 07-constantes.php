<?php

/* Constantes
o que é uma constante?
constante é um identificador para um valor unico, ou seja é um valor 
que não pode mudar durante a execuçao do script
outra coisa muito importante sobre as constantes é que elas são globais 
automaticamente não precisa usar a palavra global*/

define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);
// para definir uma constante usa a palavra define
// e com ela dois parametros um que sera a variavel e outra o valor da variavel
// OS NOMES DAS CONSTANTES SEMPRE EM LETRAS MAIUSCULAS
echo 'Meu nome é '.NOME.' Minha idade é '.IDADE.' e minha altura é'.ALTURA.'.';


function exibeNome() {
	echo NOME;
}

exibeNome();

