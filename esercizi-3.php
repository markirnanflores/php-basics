<?php

// Dato un array a due dimensioni, trovare il numero più grande
// Contare il numero di volte in cui viene ripetuto lo stesso numero più grande
// Indicare le posizioni del numero più grande

$numeroGrande = 0;
$contatore = 0;
$posizioni = [];
    
$array = [
  [2, 6, 8, 11, 22, 24, 28, 29, 32, 36, 40, 42, 44, 49, 51, 54, 56, 58, 59, 62, 65, 70, 72, 74, 76, 77, 78, 83, 86, 96],
  [6, 13, 15, 19, 20, 22, 25, 26, 28, 33, 40, 47, 50, 52, 53, 55, 61, 63, 67, 69, 72, 78, 79, 84, 85, 86, 89, 90, 97, 99],
  [1, 8, 9, 15, 17, 19, 20, 25, 27, 33, 35, 37, 39, 40, 42, 47, 56, 60, 62, 64, 65, 71, 73, 85, 86, 88, 89, 92, 93, 94],
  [ 5, 7, 12, 16, 19, 24, 27, 31, 32, 35, 45, 46, 47, 49, 52, 58, 59, 60, 64, 66, 67, 70, 71, 74, 77, 81, 82, 85, 92, 94],
  [2, 3, 7, 10, 16, 17, 20, 23, 24, 30, 34, 37, 39, 40, 42, 51, 52, 54, 56, 59, 61, 65, 72, 75, 79, 80, 81, 83, 88, 99],
  [1, 2, 5, 9, 14, 15, 20, 23, 24, 26, 28, 29, 34, 35, 40, 44, 46, 47, 49, 54, 61, 62, 63, 70, 79, 81, 88, 90, 91, 93],
  [6, 9, 17, 18, 21, 23, 34, 35, 41, 42, 44, 53, 55, 57, 60, 61, 62, 65, 72, 75, 76, 77, 79, 84, 85, 91, 92, 93, 97, 98],
  [3, 5, 6, 7, 15, 19, 21, 28, 30, 35, 38, 39, 49, 50, 55, 56, 61, 62, 63, 65, 68, 72, 76, 78, 79, 85, 86, 87, 94, 98],
  [5, 9, 12, 14, 15, 17, 21, 25, 27, 31, 36, 37, 40, 41, 59, 64, 68, 74, 79, 82, 84, 85, 86, 88, 93, 94, 95, 96, 98, 99],
  [6, 9, 11, 16, 17, 28, 29, 31, 32, 43, 45, 49, 50, 52, 59, 61, 67, 71, 72, 73, 75, 76, 77, 82, 83, 84, 91, 96, 97, 98]
];

for ($i=0; $i<count($array); $i++){
    array_push($numeriGrandi, max($array[$i]));
}

$numeroGrande = max($numeriGrandi);

for ($i=0; $i<count($array); $i++){
    for($id=0; $id<count($array[$i]); $id++){
        if($array[$i][$id]== $numeroGrande){
            $contatore = $contatore +1; 
            $posizioni["$i"]= "$id";
        }
    }
}
  
echo  "<br>". 'Il numero più grande è ' . $numeroGrande . PHP_EOL . "<br>";
echo "<br>".'Il numero più grande è ripetuto n. ' . $contatore  . ' volte' . PHP_EOL . "<br>";
echo "<br>".'Il numero più grande è nelle seguenti posizioni ' . PHP_EOL . "<br>";

print_r($posizioni) . "<br>";



