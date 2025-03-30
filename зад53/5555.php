<?php

require_once 'Animals.php';
require_once 'Dog.php';
require_once 'cat.php';
require_once 'Zoo.php';


$dog1 = new Dog('Бобик', 3, 'Овчарка');
$dog2 = new Dog('Рекс', 5, 'Доберман');
$cat1 = new Cat('Мурка', 2, 'Серая');
$cat2 = new Cat('Барсик', 4, 'Рыжий');

$zoo = new Zoo();
$zoo->addAnimal($dog1);
$zoo->addAnimal($dog2);
$zoo->addAnimal($cat1);
$zoo->addAnimal($cat2);


$zoo->listAnimals();
echo "\n";


$zoo->animalSounds();