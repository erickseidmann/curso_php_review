<?php
// Funções Para Strings
/*
Strtoupper - deixa todas as letras maiusculas
strtolower - - deixa todas as letras minusculas
substr -  permite controlar apartir de qual parte eu posso enviar uma string.
str_pad - adiciona mais espaça a determinado objeto
str_replace
strlen
str_repeat
strpos - indica a posição de uma palavra especifica
*/

//strtoupper
$nome ="erick seidmann";
$novoNome = strtoupper($nome);
echo "$novoNome";
echo "<hr>";

//strtolower
$nome ="erick seidmann";
$novoNome = strtolower($nome);
echo "$novoNome";
echo "<hr>";

//substr
$mensagem = "Olá mundo";
echo substr($mensagem, 4) ;
echo "<hr>";

// str_pad

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_LEFT);
echo "$novoObjeto";
echo "<hr>";

// str_reapeat

$string = str_repeat("Sucesso! " , 5 );
echo "$string";
echo "<hr>";

//strlen

$mensagem = "Olá mundo";
echo strlen($mensagem);

echo "<hr>";

// str_replace

$texto = "A seleção Argentina será campeã da copa do mundo!";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;
echo "<hr>";

// strpos
echo strpos($texto, "copa") ;


?>