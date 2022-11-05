<?php
declare(strict_types=1);

namespace src\teste12;

class ProdutoContaCorrente implements ProdutoConta
{
    protected string $banco;
    protected string $agencia;
    protected string $nome;
    protected string $cpf;
    protected int $saldo;

    public function __construct(
        string $banco,
        string $agencia,
        string $nome,
        string $cpf,
        int $saldo
    )
    {
        $this->banco = $banco;
        $this->agencia = $agencia;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->saldo = $saldo;
    }

    public function extrato(): string 
    {
        return "__________ EXTRATO __________" . "<br><br>" .
        "Banco: " . $this->banco . "<br>" . 
        "Tipo: " . ContaCorrente::TIPO_CONTA . "<br>" . 
        "Agência: " . $this->agencia . "<br>" .
        "Titular: " . $this->nome . "<br>" . 
        "Cpf: " . $this->cpf . "<br>" . 
        "Saldo: R$" . number_format($this->saldo,2,",",".") . "<br>" .
        "_____________________________";
    }

}