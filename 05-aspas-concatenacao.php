<?php
// aspas simplis 
/* as aspas simples são literais elas não interpretam as 
variaveis mas é como se fosse  uma sting
eu psso usar se eu concatenar usando . que é o simbiulo de concatenação */
$nome = 'Erick Seidmann<br>';
echo $nome;
echo 'essa é aspas simples $nome<br>';
echo 'esse é  concatenando '.$nome.' deu certo';

//Aspas Duplas

/* já as aspas duplas são interpretativas */
echo '<hr>';
echo "Meu nome é $nome ";