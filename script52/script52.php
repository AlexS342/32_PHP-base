<?php
// Реализуйте два класса: Comment и TaskService. Comment должен содержать свойства author (User), task (Task) и 
// text (string). TaskService должен реализовывать статичный метод addComment(User, Task, text), добавляющий к задаче 
// комментарий пользователя. Отношение между классами задачи и комментария должны быть построены по типу ассоциация, 
// поэтому необходимо добавить соответствующее свойство и методы классу Task.

include_once "User.php";
include_once "Task.php";
include_once "TaskService.php";
include_once "Comment.php";

$man1 = new User('Jon', 32, 'man', 'jon@mail.ru', '8-999-888-77-66');
$man2 = new User('Mary', 27, 'woman', 'mary@mail.ru', '8-111-222-33-44');

$myTask = 'Выполнить домашнее задание';
$priority = 1;

$task1 = new Task($myTask, $priority, $man1);

TaskService::addComment ($man2, $task1, 'Это очень важная задача!');

echo "Задачу: " . $task1->getDescription() . ", ";
echo 'от ' . $task1->getDateCreated()->format('d-m-Y') . ", ";
echo "с приоритетом " . $task1->getPriority() . "\n";
echo "для пользователя " . $task1->getUser()->getName() . ", ";
echo "Прокомментирована пользователем ";
echo ($task1->getComments()[0]->getAuthor()->getName()) . "\n";
echo "\t" . ($task1->getComments()[0]->getText()) . "\n";