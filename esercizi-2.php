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


/* Soluzione */
// function conteggioNumero($array, $numero): int
// {
//     $i=0;
//     $contatore = 0;
    
//     while ($i < count($array)) {
//         if ($array[$i] == $numero) {
//             $contatore = $contatore + 1;
//         }
//         $i++;
//     }
    
//     return $contatore;
// }

// function posizioniNumero($array, $numero): array
// {
//     $i=0;
//     $posizioni = [];

//     while ($i < count($array)){
//         if($array[$i] == $numero){
//             array_push($posizioni,$i);
//         }
//         $i++;
//     }
    
//     return $posizioni;
// }
