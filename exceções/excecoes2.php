<?php

include('functions.php');

function divisao($dividendo, $divisor) {
    try {
        if ($divisor == 0) {
            throw new RangeException("O número não pode ser dividido por zero!");
        }
        $resultado = $dividendo / $divisor;
        return "O resultado é: ".$resultado;
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        pularLinha();
        echo "Tratando exceções no PHP!";
    }
}

divisao(10, 0);