<?php
// Tipos de dados
$nome = "João"; // string
$curso = "PHP"; // string
$idade = 20; // int
$altura = 1.85; // float
$peso = 80.5; // float
$imc = $peso / ($altura * $altura); // cálculo do IMC
$doador = true; // boolean

// Mostrar informações sobre elas]
var_dump(
  $idade,
  $altura,
  $peso,
  $imc,
  $doador
);

// Operações matemáticas
$numero1 = 10;
$numero2 = 20;
$soma = $numero1 + $numero2; // soma
$subtracao = $numero1 - $numero2; // subtração
$multiplicacao = $numero1 * $numero2; // multiplicação
$divisao = $numero1 / $numero2; // divisão
$resto = $numero1 % $numero2; // resto

// funcao
function exibitNome($nome)
{
  echo "Olá, $nome!";
}
