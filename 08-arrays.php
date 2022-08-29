<?php
/* arrays
listas  
não podemos imprimir os centeudos do nosso array usando echo
Só podemos usando print_r($nomearray);
mas quando quiser imprimir um conteudo especifico de algum indice
nos vamos ultilizar da seguinte forma echo $nome_array[1]; as chaves indicarão qual será o indice que será printado.
eu posso atribuir um indice diferente para o meu array ultilizando o seguinte comando 
1=>"bmw" - a seta indica qual elemento terá o indice alterado.
*/

$carros = array("BMW","Veloster","Hilux");
//print_r($carros);
//echo $carros[2];
// inserir novos elementos no meu array
/* primeiro nos chamamos o array depois definimos onde queremos colocar nosso elemento usando [] se não colocarmos nada ele ira automaticamente par ao final do array depois colocamos = e o novo elemento entre aspas 
$nome_array [] ="novo_elemento";*/
$carros [] ="Amarok";

print_r($carros);
echo "<br>";

// outras maneiras de criar array

$motos = array();
$motos [] = "Yamaha";
$motos [] = "Honda";
$motos [5] = "Suzuki";

print_r($motos);
echo "<br>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";
// ver quantos elementos temos dentro de um array

// função count 

echo count($carros);
echo "<br>";
echo count($motos);
echo "<br>";
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//Criar loop para percorrer arrays 

// funçaos foreach
foreach ($carros as $valor) {
	echo $valor." oi "."<br>";
}
echo "<hr>";

// arrays associativos
/* um array é associativo quando o indice ou as chaves são Strings
*/

$pessoa = array("nome"=> "Rodrigo", "idade"=> 23, "altura"=> 1.75);
echo $pessoa["nome"];
echo "<br>";
$pessoa ["cidade"] = "Itabuna";
print_r($pessoa);
echo "<br>";

foreach ($pessoa as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

// arrays multidimensionais
$times = array(
		"cariocas"=> array("campeao"=>"vasco","vice"=>"flamengo","terceiro"=>"botafogo"),
		"paulistas"=> array("santos","sao paulo","palmeiras"),
		"baianos"=> array("bahia", "vitoria",)
	);
echo $times["paulistas"][1];
echo "<br>";
echo "<hr>";
foreach ($times["cariocas"] as $indice => $valor) {
	echo $indice." : ".$valor."<br>";
}





