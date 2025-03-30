<?php


class Animal {
    protected string $name;
    protected int $age;
    protected string $species;

    public function __construct(string $name, int $age, string $species) {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
    }

    public function makeSound(): string {
        return "Животное издает звук";
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getSpecies(): string {
        return $this->species;
    }

    public function getInfo(): string {
        return "{$this->species} по имени {$this->name}, возраст: {$this->age} лет";
    }
}
