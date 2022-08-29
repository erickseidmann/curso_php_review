<?php

/*********************** Escalares *************/

// string

$nome = "Olá mundo 123 !@#";
var_dump($nome); // para mostrar todas as informações de uma variavel nos usamos Var_dump($nomeVariavel);

if(is_string($nome)):
	echo"é uma string";
else:
	echo "não é uma string";
endif;
echo "<hr>";

// int somente para numeros inteiros
$idade = 27;
var_dump($idade);
if(is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;

echo "<hr>";

// Float para representar numeros reais
$peso = 27.45;
var_dump($peso);

if(is_float($peso)):
	echo "É um float";
else:
	echo "Não é um float";
endif;
echo "<hr>";

// Boolean - verdadeiro ou falso 

$admin = true;
var_dump($admin);

if(is_bool($admin)):
	echo "É um Booleano";
else:
	echo "Não é um Booleano";
endif;
echo "<hr>";

/*********************** Compostos *************/

$carros = array("Gol","Uno","Camaro",12,20.6,true);
Var_dump($carros);
if(is_array($carros)):
	echo"é um array";
else:
	echo"não é um array";
endif;
echo "<hr>";

// object 

class Cliente {
	public $nome;
	public function atribuirNome($nome){
		$this-> $nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Rodrigo");
var_dump($cliente);







