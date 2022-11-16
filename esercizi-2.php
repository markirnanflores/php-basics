<?php

// Scrivere il codice necessario per avere il risultato corretto
// per le funzioni `conteggioNumero()` e `posizioniNumero()`

function conteggioNumero($array, $numero): int
{
	$contatore = 0;
	
	// Scrivere logica
	
	return $contatore;
}

function posizioniNumero($array, $numero): array
{
	$posizioni = [];
	
	// Scrivere logica
	
	return $posizioni;
}

$numeri = [1, 4, 44, 5, 32, 1, 9, 12, 23, 44, 11, 44];

$numeroGrande = max($numeri);

echo 'Il numero più grande è ' . $numeroGrande . PHP_EOL;

echo 'Il numero più grande è ripetuto n. ' . conteggioNumero($numeri, $numeroGrande)  . ' volte' . PHP_EOL;
echo 'Il numero più grande è nelle seguenti posizioni ' . PHP_EOL;
print_r(posizioniNumero($numeri, $numeroGrande));
