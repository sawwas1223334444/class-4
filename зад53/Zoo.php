<?php

require_once 'Animal.php';

class Zoo
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function listAnimals(): void
    {
        echo "Животные в зоопарке:\n";
        foreach ($this->animals as $animal) {
            echo "- " . $animal->getInfo() . "\n";
        }
    }

    public function animalSounds(): void
    {
        echo "Звуки животных:\n";
        foreach ($this->animals as $animal) {
            echo "- {$animal->getName()} ({$animal->getSpecies()}): {$animal->makeSound()}\n";
        }
    }
}
