<?php
/*
- is_array($nome_Array) = verifica se uma determinada variavel é um array
- in_array($valor, $nome_Array) = verifica se um determinado valor existe em alguma posição do array
- array_keys($nome_Array) = retorna um novo array com as chaves do array passado como parametro.
- array_values($nome_Array) = retorna um novo array com os valorexs do array passado como parametro.
- array_merge($array1, $array2) = agrega o conteudo de dois arrays
- array_pop($nome_array) = exclui a ultima posição do array
- array_shift($nome_array) = exclui a primeira posição do array
- array_unshift($nome_array, "valor") = adiciona um ou mais elementos no inicio do array.
- array_push($nome_array, "valor", "valor") = adiciona um ou mais elementos no fina do array.
- array_combine($keys, $Values) = mescla os dois arrays passados
- array_sum() = clacula a soma dos elementos de um array
- explode("/","20/01/2001") = transforma string de um array 
- implode("-", $nome_array) = transforma array em string
*/

// ****  exemplo  implode****
$nomes = array("rodrigo", "carlos", "neusa","talita");
$string = implode(", ", $nomes);
echo $string;

// ****  exemplo  explode****
/*$data = "30/02/2018";
$novaData = explode("/", $data);
print_r($novaData);
echo "<br>";
$frase = "meu nome não é johnny";
$array = explode(" ", $frase);
print_r($array);*/

// ****  exemplo  array_sum****
/*$soma = array(7.8,5.5,10,7.2);
$total = array_sum($soma);
echo "o total é ".$total;*/



// ****  exemplo  array_combine****
/*$keys = array("Campeão", "vice","terceiro");
$values = array("vasco", "flamengo", "botafogo");
$times = array_combine($keys, $values);
print_r($times);*/

// ****  exemplo  array_push****
/*$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_push($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);*/

// ****  exemplo  array_unshift****
/*$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_unshift($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);*/



// ****  exemplo  array_shift****
/*$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
array_shift($carros);
print_r($carros);
echo "<br>";
echo array_shift($carros);// para exibir qual elemento foi excluido.
echo "<br>";
print_r($carros);*/


// ****  exemplo  array_pop****
/*$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
array_pop($carros);
print_r($carros);
echo "<br>";
echo array_pop($carros);// para exibir qual elemento foi excluido.
echo "<br>";
print_r($carros);*/

// ****  exemplo  array_merge****
/*$carros = array("Camaro", "Uno", "Gol");
$motos  = array("Pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);

print_r($veiculos);
*/

//$nomes = array("Primo"=>"Rodrigo","Vizinho"=>"Felipe","Mãe"=>"Maria","Pai"=>"José");

// ****  exemplo  array_values****
/*$values = array_values($nomes);
print_r ($values);*/

/*****  exemplo array_keys ****
$keys = array_keys($nomes);
print_r($keys);*/

/* ****  exemplo is_array ****
echo in_array("Rodrigo", $nomes);
echo "<br>";
if(in_array("Rodrigo", $nomes)):
	echo "Existe no array";
else:
	echo"Não existe";
endif;*/

// ****  exemplo is_array ****
/*echo is_array($nomes);
echo "<br>";
var_dump(is_array($nomes));
echo "<br>";
if(is_array($nomes)):
	echo "é um array";
else:
	echo "não é um array";
endif;
quando retornar 1 indica que é 
verdadeiro*/
