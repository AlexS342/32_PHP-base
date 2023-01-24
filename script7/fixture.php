<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';

$pdo = include 'db.php';

$pdo->exec('CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
)');

$user = new User('admin');
$user->setName('Главный Админ');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123');


$pdo->exec('CREATE TABLE tasks (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  description VARCHAR(300),
  priority INTEGER NOT NULL,
  isDone INTEGER NOT NULL, 
  dateCreated VARCHAR(100) NOT NULL,
  dateUpdated VARCHAR(100) NOT NULL,
  dateDone VARCHAR(100),
  userId INTEGER NOT NULL
)');

//Пример запроса на добавление задачи
/*
INSERT INTO tasks (description, priority, isDone, dateCreated, dateUpdated, dateDone, userId)
VALUES ('Поиграть с Василисой', 3, 0, '17-01-2023', '17-01-2023', null, 1);
//------------------
INSERT INTO tasks (description, priority, isDone, dateCreated, dateUpdated, dateDone, userId)
VALUES ('Составить дефектную', 2, 0, '17-01-2023', '17-01-2023', null, 1);
*/

//Пример на изменение отметки о выполнении
/*
UPDATE tasks
SET isDone   = 1,
    dateDone = '17-01-2023'
WHERE id = 4;
 */

//Пример запроса на выбор данных по двум критериям
/*
SELECT *
FROM tasks
WHERE id=8 AND userId=1;

SELECT *
FROM tasks
WHERE dateDone IS NOT NULL AND userId=1;    //поле dateDone неравно null

SELECT *
FROM tasks
WHERE dateDone IS NULL AND userId=1;    //поле dateDone равно null
 */

//Пример запроса на удаление
/*
DELETE
FROM tasks
WHERE id = 4;
 */