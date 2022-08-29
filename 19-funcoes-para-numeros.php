<?php
// FUNÇÕES PARA NUMEROS
/*
   number_format - voce usa para formatar o numero com virgulas 
   round  - arredonda para o numero inteiro mais proximo
   ceil - só arredonda para cima 
   floor - Arredonda sempre para baixo
   rand - gera numeros aleatorios de acordo com o intervalo pre estabelecido 
*/
$db = 1234.56;
$preco = number_format($db, 2,",",".");
echo "O valor do produto é R$ $preco";
echo "<hr>";

echo round(3.49);
echo "<hr>";

echo ceil(3.49);
echo "<hr>";

echo floor(3.52);
echo "<hr>";


echo rand(1,20);
echo "<hr>";

?>
