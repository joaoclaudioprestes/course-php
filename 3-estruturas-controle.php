<?php

// Estruturas de controle

// Condicionais
if (1 == 1) {
  echo "1 é igual a 1";
} else {
  echo "1 não é igual a 1";
}

// If else
if (1 == 1) {
  echo "1 é igual a 1";
} elseif (1 == 2) {
  echo "1 é igual a 2";
} else {
  echo "1 não é igual a 1 nem a 2";
}

// laços de repetição
for ($i = 0; $i < 10; $i++) {
  echo $i;
}

// While
while ($i < 10) {
  echo $i;
  $i++;
}

// Do while
do {
  echo $i;
  $i++;
} while ($i < 10);

// Switch case
switch ($i) {
  case 1:
    echo "i é igual a 1";
    break;
  case 2:
    echo "i é igual a 2";
    break;
  default:
    echo "i não é igual a 1 nem a 2";
    break;
}

// Break
for ($i = 0; $i < 10; $i++) {
  if ($i == 5) {
    break;
  }
  echo $i;
}

// Continue
for ($i = 0; $i < 10; $i++) {
  if ($i == 5) {
    continue;
  }
  echo $i;
}

// Foreach
$lista = [1, 2, 3, 4, 5];
foreach ($lista as $item) {
  echo $item;
}
