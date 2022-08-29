<?php 
/*
serve quando voce já sabe o numero de repetições que voce precisa
*/
for($contador = 0; $contador <=10; $contador++):
	echo "O Contador é $contador <br>";
endfor;
echo "<hr>";

// tabuado do 8
for($contador = 0; $contador <=10; $contador++):
	echo "8 X $contador = ".($contador*8)."<br>";
endfor;

echo "<hr>";

// for each é ultilizado para arrays ele percorre os elementos do array adicionando o valor selecionado.

$cores = array ("Verde", "Vermelho", "Azul", "Preto");

foreach($cores as $indice => $valor):
    echo $indice." - ".$valor." oi <br> ";
endforeach;





?>