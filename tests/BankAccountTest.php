<?php

namespace Karina\Repo\Tests;

use PHPUnit\Framework\TestCase;
use Karina\Repo\BankAccount;
use Karina\Repo\InvalidAmountException;
use Karina\Repo\InsufficientFundsException;

// Добавьте это в самое начало файла:
require_once __DIR__.'/../vendor/autoload.php';

class BankAccountTest extends TestCase
{
    private BankAccount $bank;

    protected function setUp(): void
    {
        $this->bank = new BankAccount(1000);
    }

    public function testInsufficientFundsException(): void
    {
        $this->expectException(InsufficientFundsException::class);
        $this->bank->withdraw(2000);
    }

    public function testInvalidAmountException(): void
    {
        $this->expectException(InvalidAmountException::class);
        $this->bank->withdraw(-1000);
    }

    public function testDeposit(): void
    {
        $this->bank->deposit(1000);
        $this->assertEquals(2000, $this->bank->getBalance());
    }

    public function testWithdraw(): void
    {
        $this->bank->withdraw(500);
        $this->assertEquals(500, $this->bank->getBalance());
    }
}