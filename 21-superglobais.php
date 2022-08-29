<?php
/*
SÃO VARIAVEIS PROPRIAS DO PHP
	$GLOBALS --- é usada para acessar variaveis globais de qualquer script php. como por exemplo variaveis que estão fora de uma função e voce precisa de usar o seu valor.
	$_SERVER --- é uma super global que contem informções sobre cabeçalhor caminhos e locais de script. é um array que contem varios indices. 
	$_REQUEST --- oiii
	$_POST
	$_GET
	$_FILES
	$_ENV
	$_COOKIE
	$_SESSION
*/
// exemplo $GLOBALS
$x = 10;
$y = 15;

function soma() {
	echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();

echo "<hr>";
// exemplo $_SERVER
echo $_SERVER['PHP_SELF']."<hr>";
echo $_SERVER['SERVER_NAME']."<hr>";
echo $_SERVER['SCRIPT_FILENAME']."<hr>";
echo $_SERVER['DOCUMENT_ROOT']."<hr>";
echo $_SERVER['SERVER_PORT']."<hr>";
echo $_SERVER['REMOTE_ADDR']."<hr>";





?>