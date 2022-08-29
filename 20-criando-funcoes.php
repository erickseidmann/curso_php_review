<?php
// criar funçoes 
/*para criar uma função é bem simples basta
escrever function e o nome da função 
depois colocar parenteses e abrir e fechar chaves
os codigos da função devem ficar dentro das chaves
dentro dos parenteses ficam parametros 
*/


function exibirNome($nome){
	echo "meu nome é $nome";
}
// para que uma função funcione não basta apenas criala devemos chamala, e chamamos ela suando o nome dela

exibirNome("Caroline Seidmann");
echo "<hr>";


function calcularMedia($nome, $n1,$n2,$n3,$n4){
	$media = ($n1 + $n2 + $n3 + $n4) /4;
	if($media >= 7):
		echo "$nome foi aprovado com a média $media. <br>";
	else:
		echo"$nome foi reprovado com a media $media. <br>";
	endif;
}

calcularMedia("José",5,7,9,10);
calcularMedia("João",2,3,2,10);




?>