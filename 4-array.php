<?php

// Criar arrays
$cursos = ["PHP", "JavaScript", "Python"];
$aluno = [
  "nome" => "João",
  "idade" => 20,
  "altura" => 1.85,
  "peso" => 80.5,
  "doador" => true
];

echo $cursos[0] . "<br>";

function mostrarDados(array $aluno): void
{
  echo "Nome: " . $aluno["nome"] . "<br>";
  echo "Idade: " . $aluno["idade"] . "<br>";
  echo "Altura: " . $aluno["altura"] . "<br>";
  echo "Peso: " . $aluno["peso"] . "<br>";
  echo "Doador: " . $aluno["doador"] . "<br>";
}

mostrarDados($aluno);

// Adicionar elementos
$cursos[] = "Java";
$cursos[] = "C#";

// Remover elementos
unset($cursos[1]);
unset($cursos[2]);

// Adicionar elementos com índices
$cursos[1] = "JavaScript";

// Mostrar arrays
var_dump($cursos);

// Mostrar arrays de forma legível
print_r($cursos);

// push
array_push($cursos, "Python");

// pop
array_pop($cursos);

// shift
array_shift($cursos);

// unshift
array_unshift($cursos, "PHP");

// contar elementos
echo count($cursos) . "<br>";

// ordenar arrays
sort($cursos);

// inverter arrays
array_reverse($cursos);

// buscar elementos
echo array_search("PHP", $cursos) . "<br>";

// verificar se existe elemento
echo in_array("PHP", $cursos) . "<br>";

// juntar arrays
$linguagens = ["Java", "C#"];

//