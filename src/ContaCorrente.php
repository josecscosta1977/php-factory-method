<?php
declare(strict_types=1);

namespace src;

class ContaCorrente extends ContaBancaria
{
    protected string $banco;
    protected string $agencia;
    protected string $nome;
    protected string $cpf;
    protected int $saldo;
    const TIPO_CONTA = "Conta Corrente";

    public function __construct(
        string $banco,
        string $agencia,
        string $nome,
        string $cpf,
        int $saldo
    )
    {
        parent::__construct(
            $banco,
            $agencia,
            $nome,
            $cpf,
            $saldo
        );
    }

    public function metodoFabrica(): ProdutoConta
    {
        return new ProdutoContaCorrente(
            $this->banco,
            $this->agencia,
            $this->nome,
            $this->cpf,
            $this->saldo
        );
    }

    public function getBanco(): string
    {
        return $this->banco;
    }

    public function getAgencia(): string
    {
        return $this->agencia;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getSaldo(): int
    {
        return $this->saldo;
    }

    public function depositar(int $valor): void
    {
        if($valor <= 0)
        {
            echo "Entrada inválida.";
        }
        else
        {
            $this->saldo += $valor;

            echo "<br><span style='background-color:violet'>Efetuado depósito de R$" . number_format($valor,2,",",".") . ".</span><br>";
        }
    }

    public function sacar(int $valor): void
    {
        if($this->saldo < $valor)
        {
            echo "Entrada inválida.";
        }
        else
        {
            $this->saldo -= $valor;

            echo "<br><span style='background-color:violet'>Efetuado saque de R$" . number_format($valor,2,",",".") . ".</span><br>";
        }
    }
}

