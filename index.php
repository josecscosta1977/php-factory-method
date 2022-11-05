<?php
declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

use src\ContaBancaria;
use src\ContaCorrente;
use src\ContaPoupanca;


function criarContaCorrente(ContaBancaria $conta1)
{
    echo "<pre>";
    echo $conta1->extrato();
    echo "<br>";
    echo $conta1->depositar(100);
    echo "<br>";
    echo $conta1->extrato();
    echo "<br>";
    echo $conta1->sacar(500);
    echo "<br>";
    echo $conta1->extrato();
    echo "</pre>";

}
criarContaCorrente(new ContaCorrente(
    "Bradesco",
    "12345",
    "Soares",
    "98765432196",
    1500
));

echo "<br>";
echo "======================================";
echo "<br>";

function criarContaPoupanca(ContaBancaria $conta2)
{
    echo "<pre>";
    echo $conta2->extrato();
    echo "<br>";
    echo $conta2->depositar(100);
    echo "<br>";
    echo $conta2->extrato();
    echo "<br>";
    echo $conta2->sacar(1500);
    echo "<br>";
    echo $conta2->extrato();
    echo "</pre>";
}
criarContaPoupanca(new ContaPoupanca(
    "Bradesco",
    "98765",
    "Carlos",
    "12345678987",
    2500
));
?>