<?php
// While & do While
/* enquanto um condição for verdadeira ele vai executar um treixo de codigo*/

$contador = 1;

while ($contador <= 10):
	echo "O Contador é $contador <br>";
	$contador++; // vai adicionar +1 enquanto o contador for mernor que 10
endwhile;

echo "<hr>";
$contador =1;
do{
	echo "Contador é $contador <br>";
	$contador++;

} while ($contador <= 10);

?>