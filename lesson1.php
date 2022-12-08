<?php
//Однострочный коментарий
/*Многострочный коментарий*/

/*
NULL
Null — это и тип и единственное значение этого типа.
Означает отсутствие значения.
Переменная получает в качестве значения null всего в трёх случаях:
    * Когда ей явно задано в качестве значения null ($variable = null;);
    * Когда переменная создана, но значение не было установлено;
    * Когда переменная не создана или удалена.
*/

//Запустить файл в консоли: php lesson1.php

//Работа со строками
echo "!!!РАБОТА С ТЕКСТОМ!!!\n";
$fu = "Привет гребаный МИР";                                    //Создание переменной
$ck = "150 раз";                                                //Создание переменной
$hi = $fu . ' ' . $ck;                                          //Конкотенация производится спомощью точки
$krya = "Крякал гусь";                                          //Создание переменной
$bl = "Летая на над поляной " . $krya . "\n";                   //Конкотенация производится спомощью точки

echo "$hi\n";                                                   //Вывод текста (значения переменной) в консоль; echo может принимать сколько угодно аргументов для вывода, echo не возвращает никаких значений
print "$bl\n";                                                  //Вывод текста (значения переменной) в консоль; print принимает только один, print всегда возвращает единицу.
echo 'В переменной $fu хранится строка $fu \n' . "\n";          //В одинарных ковычках не распознаются переменные и спецсимволы
echo "В переменной \$fu хранится строка $fu";                   //В двойных кавычках распознаются переменные и спецсимволы, для вывода имени переменной ее нужно экранироввать
$nu = readline("Для проверки работы readline введите любой текст:\n");                      //Выводит в консоль сообщение и ждет ввода данных от пользователя
print $nu;

echo "\n";
echo "!!!РАБОТА ЧИСЛАМИ!!!\n";
$k = true;                                                      //Создание переменной
$x = 12;                                                        //Создание переменной
$y = 4.12;                                                      //Создание переменной
$z = $x + 3.78;                                                 //Сложение
$q = $x - $y;                                                   //Вычитание
$w = $x * 5;                                                    //Умножение
$e = $x / $y;                                                   //Деление
$r = $x % $y;                                                   //Остаток от деление (результат челочисленый (int))
$t = $x**$y;                                                    //Возведение в степень
$u = pow($x, $y);                                               //Возведение в степень
echo "ВАРДАМП-1\n";
var_dump($hi, $bl, $k, $x, $y, $z, $q, $w, $e, $r, $t, $u);          //Вывод типа переменной в консоль
/*Запись математического действия если ресультат присваевается в туже переменную, с которой производилось действие */
$x += $y;                                                       //Равносильно записи $x = $x + $y; (Сложение)
$z -= $y;                                                       //Равносильно записи $z = $z - $y; (Вычитание)
$q *= $y;                                                       //Равносильно записи $q = $q * $y; (Умножение)
$w /= $y;                                                       //Равносильно записи $w = $w / $y; (Деление)
$e %= $y;                                                       //Равносильно записи $e = $e % $y; (Остаток от деления)
/*Запись инкримента и декримента*/
echo "ВАРДАМП-2\n";
var_dump($x, $z, $q, $w, $e);                                   //Вывод типа переменной в консоль
$x++;                                                           //Инкримент
$y--;                                                           //Декримент
echo "ВАРДАМП-3\n";
var_dump($x, $y);                                   //Вывод типа переменной в консоль

echo "\n";
echo "!!!ПРИВЕДЕНИЕ ТИПОВ!!\n";
//ПРИВЕДЕНИЕ ТИПОВ:
$x = "150";                 //строковое начение
$y = 200;                   //Целочисленное значение
$z = 4.37;                  //число с плавующей точкой

$v1 = $x . $y;              //Произойдет конкотенация, в переменной будет строка "150200"
$v2 = $x . $z;              //Произойдет конкотенация, в переменной будет строка  "1504.37"
$v3 = $y . $z;              //Произойдет конкотенация, в переменной будет строка "2004.37"
echo "\$v1 = $v1 \n";
echo "\$v1 = $v2 \n";
echo "\$v1 = $v3 \n";
echo "ВАРДАМП-1\n";
var_dump($v1, $v2, $v3);

$v1 = $x + $y;              //Произойдет сложение, $v1 будет int(350)
$v2 = $x - $z;              //Произойдет вычитание, v2 будет float(145.63)
$v3 = $y * $z;              //Произойдет умножение, v3 будет float(874)
echo "\$v1 = $v1 \n";
echo "\$v1 = $v2 \n";
echo "\$v1 = $v3 \n";
echo "ВАРДАМП-2\n";
var_dump($v1, $v2, $v3);

$x = 5.98;                  //$x - число с плавующей точкой (float)
$y = (int)$x;               //$y будет хранить челочисленное значение (int); $y = 5;
$z = (bool)$y;              //$z будет хранить логическое значение (bool); $z = true;
$s = (string)$z;            //$s будет хранить строку (string); $s = "true";
echo "ВАРДАМП-3\n";
var_dump($x, $y, $z, $s);




