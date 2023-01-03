<!--
Предварительно стилилизацию выполнил внури тегов, планирую проработать оформление в свободное время
-->

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Главная - Менеджер задач</title>
</head>

<body style="background: #e3e3e3; padding: 12px; height: 100vw;">
    <header>
        <?php include "menu.php" ?>
    </header>
    <main style="background: #ffc761; padding: 12px; height: 100%;  margin:5px; border-radius: 10px;">
        <h1>Менеджер задач (TODO)</h1>
        <h3>Задание к уроку №6</h3>
        <ol>
            <li>
                <p>Доработайте механизм авторизации. Разместите на главной странице кнопку “Войти”, отображаемую только если пользователь не авторизован. Перенесите логику “Выхода” в SecurityController. Сделайте отображение ссылки “Выйти” только для тех случаев, если пользователь авторизован в системе;</p>
            </li>
            <li>
                <p>Разработайте страницу работы с задачами TODO-списка, доступную только авторизованным пользователям. Подготовьте отдельный файл представления (view), контроллер (TaskController) и два класса модели: TaskProvider и сущность Task. В сущности Task реализуйте свойства isDone (bool) и description (string). В TaskProvider разработайте два метода: getUndoneList – для получения списка невыполненных задач и addTask для добавления. Сохраняйте задачи в сессию авторизованного пользователя. В файле представления выведите список текущих задач с кнопкой выполнения (используйте тег &lt;a&gt; с передачей GET-параметров), а также подготовьте форму для их добавления.</p>
            </li>
        </ol>
    </main>
</body>

</html>