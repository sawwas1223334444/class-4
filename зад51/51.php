<?php

class Car {
    public string $mark;
    public string $model;
    public int $year;
    public int $mileage; 

    public function __construct(string $mark, string $model, int $year, int $mileage) {

        if ($mileage < 0) {
            throw new InvalidArgumentException("Пробег не может быть отрицательным!");
        }

        $this->mark = $mark;
        $this->model = $model;
        $this->year = $year;
        $this->mileage = $mileage;
    }

    public function getInfo(): string {
        return "Машина: $this->mark $this->model, год выпуска: $this->year, пробег: $this->mileage км" . PHP_EOL;
    }

    public function drive(int $distance): void {
        if ($distance <= 0) {
            throw new InvalidArgumentException("Дистанция должна быть положительной!");
        }

        $this->mileage += $distance;
        echo "Добавлено $distance км. Текущий пробег: $this->mileage км" . PHP_EOL;
    }

    public function getMileage(): int {
        return $this->mileage;
    }
} 
