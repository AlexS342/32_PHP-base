<?php
//// Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка. Класс должен содержать приватные
//// свойства description, dateCreated, dateUpdated, dateDone, priority (int), isDone (bool) и обязательное user (User).
//// В качества класса пользователя воспользуйтесь разработанным на уроке. Класс Task должен содержать все необходимые
//// для взаимодействия со свойствами методы (getters, setters). При вызове метода setDescription обновляйте значение
//// свойства dateUpdated. Разработайте метод markAsDone, помечающий задачу выполненной, а также обновляющий свойства
//// dateUpdated и dateDone.

include_once "User.php";
include_once "Task.php";

$man1 = new User('Jon', 32, 'man', 'jon@mail.ru', '8-999-888-77-66');

$myTask = 'Выпить чай';
$priority = 3;

$task1 = new Task($myTask, $priority, $man1);

$myTask = 'Покушать';
$priority = 2;

$task1->editDescription($myTask);

$task1->editPriority($priority);

$task1->markAsDone();

echo "Description: " . $task1->getDescription() . "\n";
echo 'DateCreated: ' . $task1->getDateCreated()->format('D.d-m-Y-H-i-s') . "\n";
echo 'DateUpdated: ' . $task1->getDateUpdated()->format('D.d-m-Y-H-i-s') . "\n";
echo "Priority: " . $task1->getPriority() . "\n";
echo 'DateDone: ' . $task1->getDateDone()->format('D.d-m-Y-H-i-s') . "\n";
echo "IsDone: " . $task1->getIsDone() . "\n";
echo "UserName: " . $task1->getUser()->getName() . "\n";
echo "\tAge: " . $task1->getUser()->getAge() . "\n";
echo "\tSex: " . $task1->getUser()->getSex() . "\n";
echo "\tEmail: " . $task1->getUser()->getEmail() . "\n";
echo "\tPhone: " . $task1->getUser()->getPhone() . "\n";
echo "\tIsActive: " . $task1->getUser()->getIsActive() . "\n";
echo "\tCreate: " . $task1->getUser()->getCreateDate()->format('D.d-m-Y-H-i-s') . "\n";

