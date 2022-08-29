<?php 
/*
- Condicionais tomar determinada decisão se certo objetivo for completo  
- if 
- else
- elseif
- endif;
*/

$numero = 50;

if ($numero == 10):
	echo "É igual a 10";
elseif ($numero <=9):
	echo "É menor ou igual a 9";
else:
	echo "É diferente de 10";
endif;

echo "<hr>";

$media = 7;

echo ($media >= 7) ? "Aprovado!" : "Reprovado"; // maneira mais curta de se fazer o else if tambem chamado de operador ternario.
echo "<hr>";

/*
Condicionais 
switch 
case
 */

$cor = "amarelo";

switch ($cor) :
	case 'Vermelho':
	echo "Sua cor preferida é o Vermelho";
	break;// é muito importante usar o break

	case 'verde':
	echo "Sua cor preferida é o verde";
	break;

	case 'azul':
	echo "Sua cor preferida é o azul";
	break;

	default:
	echo "Sua cor favorita não é  Vermelho, azul ou verde"; 
endswitch;









	


