<?php
declare(strict_types=1);

namespace src;

abstract class ContaBancaria
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

    abstract public function metodoFabrica(): ProdutoConta; 

    abstract public function getBanco(): string;

    abstract public function getAgencia(): string;

    abstract public function getNome(): string;

    abstract public function getCpf(): string;
    
    abstract public function getSaldo(): int;

    abstract public function depositar(int $valor): void;

    abstract public function sacar(int $valor): void;

    public function extrato(): string
    {
        $informacao = $this->metodoFabrica();

        $apresentar = $informacao->extrato();

        return $apresentar;
    }
}