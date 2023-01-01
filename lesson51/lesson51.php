<?php
// Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка. Класс должен содержать приватные 
// свойства description, dateCreated, dateUpdated, dateDone, priority (int), isDone (bool) и обязательное user (User). 
// В качества класса пользователя воспользуйтесь разработанным на уроке. Класс Task должен содержать все необходимые 
// для взаимодействия со свойствами методы (getters, setters). При вызове метода setDescription обновляйте значение 
// свойства dateUpdated. Разработайте метод markAsDone, помечающий задачу выполненной, а также обновляющий свойства 
// dateUpdated и dateDone.

// подключаем классы для создания объектов
include_once "Player.php";

//Создаем пользователей и сразу добавляем данные в свойства через функцию __construct
$man1 = new Player('Jon', 32, 'man');
$man2 = new Player('Mary', 23, 'woman');

//Второй способ заполнить данные на прямую (только если свойства публичные)
$man1->email = 'jon@mail.ru';
$man1->phone = '8-999-888-77-66';
$man1->getHallo();

//Третий способ заполнить данные, даже если они приватные
$man2->init('mary@ya.ru', '2-59-58-47');
$man2->getHallo();

$man1->attackUser ($man2);