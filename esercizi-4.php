<?php

// Data una stringa
// contare quante volte ripetuta una sottostringa

$stringa = "Sono una stringa con una sottostringa";
$sub = "stringa";

$contatore = 0;

for ($i=0; $i<=strlen($stringa)-strlen($sub); $i++) {
  $temp = '';
  for($j=0; $j<strlen($sub); $j++) {
    $temp = $temp . $stringa[$j+$i];
  }
  if ($temp === $sub) {
    $contatore = $contatore + 1;
  }
}

echo '<' . $sub . '>' . " è ripetuto n. " . $contatore . " volte.";

