<?php

include('functions.php');

function antes() {
    echo "-> Esta função está antes da exceção";
    pularLinha();
}

function lancar($int) {
    if(!is_int($int)) {
        throw new Exception("O argumento não é do tipo esperado");
    } else {
        echo "-> Função dentro da exceção";
        pularLinha();
    }
}

function depois() {
    echo "-> Esta função está depois da exceção";
    pularLinha();
}

antes();
lancar(int:5);
depois();