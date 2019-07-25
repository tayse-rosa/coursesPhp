<?php 
$nome = "Tayse";
$sobrenome = "Rosa";
$nomeCompleto = $nome . " ". $sobrenome;
echo $nomeCompleto;

echo "<br>";
var_dump($nome);
echo "<br>";

unset($nome);

if (isset($nome)){
	echo $nome;
}