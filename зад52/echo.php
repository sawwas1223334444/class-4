<?php

require_once 'Rectangle.php';

$rectangle = new Rectangle(5.0, 3.0);

echo "Площадь прямоугольника: " . $rectangle->getArea() . "\n";
echo "Периметр прямоугольника: " . $rectangle->getPerimeter() . "\n";
