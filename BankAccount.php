<?php

class InvalidAmountException extends Exception {}
class NotEnoughMoneyException extends Exception {}

class BankAccount {
    private $balance;

    public function __construct($startBalance) {
        if ($startBalance < 0) {
            $this->error("Начальный баланс не может быть отрицательным", 'InvalidAmount');
        }
        $this->balance = $startBalance;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if ($amount <= 0) {
            $this->error("Сумма должна быть больше нуля", 'InvalidAmount');
        }
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= 0) {
            $this->error("Сумма должна быть больше нуля", 'InvalidAmount');
        }
        if ($amount > $this->balance) {
            $this->error("Недостаточно средств на счете", 'NotEnough');
        }
        $this->balance -= $amount;
    }

    private function error($message, $type) {
        if ($type === 'InvalidAmount') {
            throw new InvalidAmountException($message);
        } else {
            throw new NotEnoughMoneyException($message);
        }
    }
}