<?php
//Task #1

/*
alexs@desktop:~$ php -v
PHP 8.1.2-1ubuntu2.9 (cli) (built: Oct 19 2022 14:58:09) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.1.2, Copyright (c) Zend Technologies
    with Zend OPcache v8.1.2-1ubuntu2.9, Copyright (c), by Zend Technologies
*/

//Task #2

$userName = readline("Как я могу обращаться к тебе? \n");
$age = readline("Сколько тебе лет? \n\n");
echo "Вас зовут $userName, вам $age лет \n\n";

//Task #3

$userName = readline("Как я могу обращаться к тебе? \n");
$task1 = readline("Давайле запишем на сегодня задачу №1? \n");
$taskTime1 = (int)readline("Сколько времени собираетель потратить на задачу №1? \n");
$task2 = readline("Давайле запишем на сегодня задачу №2? \n");
$taskTime2 = (int)readline("Сколько времени собираетель потратить на задачу №2? \n");
$task3 = readline("Давайле запишем на сегодня задачу №3? \n");
$taskTime3 = (int)readline("Сколько времени собираетель потратить на задачу №3? \n");
$sumTime = $taskTime1 + $taskTime2 + $taskTime3;
echo "\n$userName, сегодня у вас запланировано 3 приоритетных задачи на день:\n";
echo "- $task1 ({$taskTime1}ч)\n";
echo "- $task2 ({$taskTime2}ч)\n";
echo "- $task3 ({$taskTime3}ч)\n";
echo "Примерное время выполнения плана = {$sumTime}ч\n";