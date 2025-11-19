<?php

$variavel1 = true;
$variavel2 = true;
$variavel3 = true;

if ($variavel1 == $variavel2 && 10 > 5) {
    echo "Primeiro IF\n";
    if (8 == 4) {
        echo "Verdadeiro";
    }
    echo "Variáveis são iguais ou 10 é menor do que 5\n";
}

$nota = 6;

if ($nota >= 7) {
    echo "Aluno aprovado.\n";
} else {
    echo "Aluno reprovado.\n";
}

$nota2 = 8;
echo $nota2 >= 7 ? "Aluno Aprovado.\n" : "Aluno Reprovado.\n";