<?php
// escopo de uma variavel é o contexto de onde ela foi definida
$nome = "Erick Seidmann";
$a = 1;
$b = 3;
$c = 7;

function exibeNome() {
	global $nome; // aqui estou definindo a variavel como uma variavel como global 
	echo $nome;
};

exibeNome();
echo "<hr>";
///////////////////////////

function exibeCidade(){
	global $cidade;
	$cidade = "Rio de Janeiro";
};

exibeCidade();
echo $cidade;
echo "<hr>";
//////////////////////////////

function soma(){
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; 
};

soma();