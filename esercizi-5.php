<?php

// Data una stringa
// sostituire una determinata sottostring con una stringa diversa

$stringa = "<!DOCTYPE html>
<html>
<head>
<title>Page #pagetitile</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>";

$placeholder = '#pagetitile';
$sub = "Mio Titolo";
$posizione = 0;

for ($i=0; $i<=strlen($stringa)-strlen($placeholder); $i++) {
  $temp = '';
  for($j=0; $j<strlen($placeholder); $j++) {
    $temp = $temp . $stringa[$j+$i];
  }
  if ($temp === $placeholder) {
    $posizione = $i;
  }
}

$firstPart = '';
for ($i=0; $i<$posizione; $i++) {
	$firstPart = $firstPart . $stringa[$i];
}
$lastPart = '';
for ($i=$posizione+strlen($placeholder); $i<strlen($stringa); $i++) {
	$lastPart = $lastPart . $stringa[$i];
}

$newStringa = $firstPart . $sub . $lastPart;

echo $newStringa;



