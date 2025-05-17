<?php

namespace Karina\Repo;

class BankAccount {
    private float $balance;

    public function __construct(float $startBalance) {
        if ($startBalance < 0) {
            throw new InvalidAmountException("Initial balance cannot be negative");
        }
        $this->balance = $startBalance;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function deposit(float $amount): void {
        if ($amount <= 0) {
            throw new InvalidAmountException("Amount must be positive");
        }
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void {
        if ($amount <= 0) {
            throw new InvalidAmountException("Amount must be positive");
        }
        if ($amount > $this->balance) {
            throw new InsufficientFundsException("Not enough funds");
        }
        $this->balance -= $amount;
    }
}