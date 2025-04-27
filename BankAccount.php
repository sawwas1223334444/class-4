<?php

class BankAccount {
    private float $balance;

    public function __construct(float $startBalance) {
        if ($startBalance < 0) {
            $this->error("Начальный баланс не может быть отрицательным", 'InvalidAmount');
        }
        $this->balance = $startBalance;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function deposit(float $amount): void {
        if ($amount <= 0) {
            $this->error("Сумма должна быть больше нуля", 'InvalidAmount');
        }
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void {
        if ($amount <= 0) {
            $this->error("Сумма должна быть больше нуля", 'InvalidAmount');
        }
        if ($amount > $this->balance) {
            $this->error("Недостаточно средств на счете", 'NotEnough');
        }
        $this->balance -= $amount;
    }

    private function error(string $message, string $type): void {
        if ($type === 'InvalidAmount') {
            throw new InvalidAmountException($message);
        } else {
            throw new NotEnoughMoneyException($message);
        }
    }
}