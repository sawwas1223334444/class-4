<?php

require_once 'Animals.php';

class Dog extends Animal {
    private string $breed;

    public function __construct(string $name, int $age, string $breed) {
        parent::__construct($name, $age, 'Собака');
        $this->breed = $breed;
    }

    public function makeSound(): string {
        return "Гав-гав!";
    }

    public function getBreed(): string {
        return $this->breed;
    }

    public function getInfo(): string {
        return parent::getInfo() . ", порода: {$this->breed}";
    }
}