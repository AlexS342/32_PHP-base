<?php
// Подготовьте массив целых чисел (4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2). Разработайте анонимную функцию для применения в 
// качестве аргумента array_map, возвращающую для каждого элемента массива строковое значение: «четное» или «нечетное». 
// Для проверки четности числа используйте деление по модулю (%);

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$evenOdd = function(int $i): string {
    return ($i & 1) ? "не чётное" : "чётное";
};

$resEvenOdd = array_map($evenOdd, $numbers);

print_r($resEvenOdd);
