<?php

$valor = (float) readline("qual o valor do produto que voce pegou? " );

$quant = (int) readline("\nqual a quantidade que voce pegou? ");

$total = $valor * $quant;

echo ("\no total que voce devera pagar é: $") . $total;

?>
