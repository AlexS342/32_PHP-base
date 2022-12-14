<?php
// Доработайте задание с прошлого занятия с использованием условных операторов и
// циклических конструкций. Реализуйте скрипт, запрашивающий у пользователя 
// количество задач, запланированных на день. После получения корректного числа,
// программа должна спросить определённое количество раз, какая задача 
// запланирована и сколько примерно времени займёт её выполнение. По завершению 
// циклического опроса необходимо вывести итог запланированного пользователем 
// дня, содержащий весь перечень задач с оценкой времени, а также суммарное 
// количество часов.

echo "\n";
$userName = readline("Как я могу обращаться к тебе? \n");
$quantityTask = (int) readline("$userName, сколько задач у вас на сегодня? \n");

// Видимо я что то упустил, но переменные $allTask и $sumTime пришлось объявлять
// перед началом цикла, иначе появлялась такая ошибка:
// PHP Warning:  Undefined variable $sumTime in /home/alexs/developer/www/32_PHP-base/script22.php on line 37
// PHP Warning:  Undefined variable $allTask in /home/alexs/developer/www/32_PHP-base/script22.php on line 38
$allTask = null;
$sumTime = null;
$estimation = null;

echo "\n";

for ($i = 1; $i <= $quantityTask; $i++) {

    do{
        $task = readline("Давайте запишем на сегодня задачу №$i? \n");
        $j = $task;
    }while(!$j);

    do{
        $timeTask = (int)readline("Сколько времени она займет? \n");
        $j = $timeTask;
    }while(!$j);

    $sumTime = $sumTime + $timeTask;
    $allTask = $allTask . "- $task ({$timeTask}ч)\n";

    echo "\n";
}

var_dump($sumTime);

switch (true){
    case !$sumTime:
        $estimation = "Вы уверены, что правильно указали время необходимое на ваши задачи?";
        break;
    case $sumTime > 0 && $sumTime <=2:
        $estimation = "Можно считать, что вы сегодня свободен.";
        break;
    case $sumTime < 6:
        $estimation = "У вас еще даже осталось время на отдых.";
        break;
    case ($sumTime <= 8):
        $estimation = "Не плохой план на день.";
        break;
    case $sumTime <= 14:
        $estimation = "У вас очень много планов на этот день, сомневаюсь, что вы все успеете.";
        break;
    case $sumTime > 14:
        $estimation = "Я бы посоветовал перенести часть дел на следующий день.";
        break;
}

$i = $i - 1;

echo "$userName, сегодня у вас запланировано $i приоритетных задачи на день:\n";
echo $allTask;
echo "Примерное время выполнения плана = {$sumTime}ч\n";
echo "
$estimation\n\n";
