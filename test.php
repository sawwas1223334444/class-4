<?php
require_once 'BankAccount.php';

function readInput($prompt)
{
    echo $prompt;
    return trim(fgets(STDIN));
}

function handleOperation($account)
{
    while (true) {
        echo "\nТекущий баланс: " . $account->getBalance() . "\n";
        echo "1. Пополнить счет\n";
        echo "2. Снять деньги\n";
        echo "3. Выйти\n";
        $choice = readInput("Выберите операцию: ");

        try {
            switch ($choice) {
                case 1:
                    $amount = readInput("Введите сумму для пополнения: ");
                    $account->deposit($amount);
                    echo "Счет пополнен на $amount\n";
                    break;
                case 2:
                    $amount = readInput("Введите сумму для снятия: ");
                    $account->withdraw($amount);
                    echo "Со счета снято $amount\n";
                    break;
                case 3:
                    return;
                default:
                    echo "Неверный выбор. Попробуйте снова.\n";
            }
        } catch (InvalidAmountException $e) {
            echo "Ошибка: " . $e->getMessage() . "\n";
        } catch (NotEnoughMoneyException $e) {
            echo "Ошибка: " . $e->getMessage() . "\n";
        }
    }
}

echo "--- Банковский счет ---\n";

try {
    $initialBalance = readInput("Введите начальный баланс: ");
    $account = new BankAccount($initialBalance);
    handleOperation($account);
} catch (InvalidAmountException $e) {
    echo "Ошибка создания счета: " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "Произошла ошибка: " . $e->getMessage() . "\n";
}

echo "Работа программы завершена.\n";
