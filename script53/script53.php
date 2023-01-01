<?php
// Разработайте механизм корзины интернет-магазина. Реализуйте класс продукта (Product) со свойствами title (string), 
// price (float) и components (массив объектов Product), и соответствующие методы для взаимодействия со свойствами. 
// Свойство components служит для реализации товара-наборов (например, комплект клавиатура+мышь) и в случае, если 
// экземпляр содержит компоненты, стоимость этого комплекта должна быть равна сумме стоимостей её компонентов. 
// Разработайте класс корзины (Cart) с методами для добавления, удаления товаров, а также с методом вычисления полной 
// стоимости корзины, с учётом того, что некоторые товары могут представлять собой комплекты других товаров.

include_once "Product.php";
include_once "Cart.php";

$title = 'Спининг';
$price = 6785.54;
$prod1 = new Product($title, $price);

$title = 'Леска';
$price = 1246.32;
$prod2 = new Product($title, $price);

$title = 'Шнур';
$price = 2258.98;
$prod3 = new Product($title, $price);

$title = 'Виброхвост';
$price = 42.57;
$prod4 = new Product($title, $price);

$title = 'Блесна';
$price = 359.14;
$prod5 = new Product($title, $price);

$title = 'Воблер';
$price = 648.36;
$prod6 = new Product($title, $price);

$title = 'Экономный рыбак';
$components = [$prod1, $prod2, $prod4];
$prod7 = new Product($title, $components);

$title = 'Железный рыбак';
$components = [$prod1, $prod3, $prod5];
$prod8 = new Product($title, $components);

$title = 'Успешный рыбак';
$components = [$prod1, $prod3, $prod6];
$prod9 = new Product($title, $components);

echo $prod1->getTitle() . ' по ' . $prod1->getPrice() . "руб.\n";
echo $prod2->getTitle() . ' по ' . $prod2->getPrice() . "руб.\n";
echo $prod3->getTitle() . ' по ' . $prod3->getPrice() . "руб.\n";
echo $prod4->getTitle() . ' по ' . $prod4->getPrice() . "руб.\n";
echo $prod5->getTitle() . ' по ' . $prod5->getPrice() . "руб.\n";
echo $prod6->getTitle() . ' по ' . $prod6->getPrice() . "руб.\n";
echo $prod7->getTitle() . " (" . $prod7->getComponents()[0]->getTitle() . ', ' . $prod7->getComponents()[1]->getTitle() . ', ' . $prod7->getComponents()[2]->getTitle() . ")" . ' по ' . $prod7->getPrice() . "руб.\n";
echo $prod8->getTitle() . " (" . $prod8->getComponents()[0]->getTitle() . ', ' . $prod8->getComponents()[1]->getTitle() . ', ' . $prod8->getComponents()[2]->getTitle() . ")" . ' по ' . $prod8->getPrice() . "руб.\n";
echo $prod9->getTitle() . " (" . $prod9->getComponents()[0]->getTitle() . ', ' . $prod9->getComponents()[1]->getTitle() . ', ' . $prod9->getComponents()[2]->getTitle() . ")" . ' по ' . $prod9->getPrice() . "руб.\n";

$prod8->removeComponent('Шнур');
echo $prod8->getTitle() . " (" . $prod8->getComponents()[0]->getTitle() . ', ' . $prod8->getComponents()[1]->getTitle() . ")" . ' по ' . $prod8->getPrice() . "руб.\n";

$prod8->addComponent($prod2);
echo $prod8->getTitle() . " (" . $prod8->getComponents()[0]->getTitle() . ', ' . $prod8->getComponents()[1]->getTitle() . ', ' . $prod8->getComponents()[2]->getTitle() . ")" . ' по ' . $prod8->getPrice() . "руб.\n";

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";

$myCarts = new Cart;

$myCarts->addProduct($prod1);
$myCarts->addProduct($prod3);
$myCarts->addProduct($prod9);

$myCarts->removeProduct($prod1->getTitle());

echo 'Полная стоимость:' . $myCarts->getFullPrice() . "\n";
print_r($myCarts->getProducts());
