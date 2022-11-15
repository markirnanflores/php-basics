<?php

// 1. Dato un array di numeri trovare il numero più grande
// 2. Trovare quante volte è ripetuto il numero più grande
// 3. Indicare gli indici del numero più grande salvandoli in un array

$numeri = [1, 4, 44, 5, 32, 1, 9, 12, 23, 44, 11, 44];

$numeroGrande = max($numeri);

echo 'Il numero più grande è ' . $numeroGrande . PHP_EOL;

$i = 0;
$contatore = 0;
$posizioni = [];

while ($i < count($numeri)) {
	if ($numeri[$i] == $numeroGrande) {
		$contatore = $contatore + 1;
		array_push($posizioni,$i);
	}
	$i++;
}

echo 'Il numero più grande è ripetuto n. ' . $contatore . ' volte' . PHP_EOL;
echo 'Il numero più grande è nelle seguenti posizioni ' . PHP_EOL;
print_r($posizioni);
