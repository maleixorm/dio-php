<?php
  // Leia o Desafio e siga o código base abaixo para resolvê-lo. Algumas dicas:
  // 1. Use a função "fgets(STDIN)" para ler uma linha de Entrada;
  // 2. Use a função "echo" formatar e imprimir sua(s) Saída(s).
$a = fgets(STDIN);
$b = fgets(STDIN);

function soma($a, $b){
  //TODO: Crie uma nova variável "$soma" para receber o valor de "$a + $b".
  return $a + $b;
}

$result = soma($a, $b);
echo "SOMA = $result";
  //TODO: Use a função "echo" para imprimir o resultado da soma no padrão de saída.
?>
