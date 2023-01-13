<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/menu.css">
    <link rel="stylesheet" href="../style/home.css">
    <title>Главная - Менеджер задач</title>
</head>

<body>
    <header>
        <?php include "menu.php" ?>
    </header>
    <main>
        <h1 class="hd1">Менеджер задач (TODO)</h1>

        <ol class="home">
            <li class="home-item">
                <h3 class="hd3"> Цветовая схема задач </h3>
            </li>
            <li>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill"/>
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                </svg>
                <div>
                    Выполненая задача
                </div>
            </div>
            </li>
            <li>
                <div class="alert alert-primary  d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill"/>
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </symbol>
                    </svg>
                    <div>
                        Не выполненая задача с низким приоритетом
                    </div>
                </div>
            </li>
            <li>
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Не выполненая задача со средним приоритетом
                    </div>
                </div>
            </li>
            <li>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill"/>
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </symbol>
                    </svg>
                    <div>
                        Не выполненая задача с высоким приоритетом
                    </div>
                </div>
            </li>
        </ol>

        <ol class="home">
            <li class="home-item">
                <h3 class="hd3">
                    Задание к уроку №6
                </h3>
            </li>
            <li class="home-item">
                <p class="home-itemP">
                    Доработайте механизм авторизации. Разместите на главной странице 
                    кнопку “Войти”, отображаемую только если пользователь не авторизован. 
                    Перенесите логику “Выхода” в SecurityController. Сделайте отображение 
                    ссылки “Выйти” только для тех случаев, если пользователь авторизован 
                    в системе.
                </p>
            </li>
            <li class="home-item">
                <p class="home-itemP">
                    Разработайте страницу работы с задачами TODO-списка, доступную только 
                    авторизованным пользователям. Подготовьте отдельный файл представления 
                    (view), контроллер (TaskController) и два класса модели: TaskProvider 
                    и сущность Task. В сущности Task реализуйте свойства isDone (bool) и 
                    description (string). В TaskProvider разработайте два метода: 
                    getUndoneList – для получения списка невыполненных задач и addTask для 
                    добавления. Сохраняйте задачи в сессию авторизованного пользователя. 
                    В файле представления выведите список текущих задач с кнопкой 
                    выполнения (используйте тег &lt;a&gt; с передачей GET-параметров), а 
                    также подготовьте форму для их добавления.
                </p>
            </li>
            <li class="home-item">
                <h3 class="hd3">
                    Результат проверки Преподавателем
                </h3>
            </li>
            <li class="home-item">
                <p class="home-itemP" style="color:gray; font-size: 12px;">Лучше не подсказку логина пароля, а прямо в value выведите на время проверки, спасибо скажу только.</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">На странице задач, когда их нет куча ворнингов</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">Warning : Undefined array key "task" in model\TaskProvider.php on line 19</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">$_SESSION['task'] еще не существует, а идет попытка чтения по несуществующему ключу, такие ситуации лучше обрабатывать через ?? или isset</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">Даже после добавления задачи куча ворнингов</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">Undefined array key "show"</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">Undefined array key "showTasks"</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">это все в taskController.php</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">Не if($_GET['show'] === 'allTask') а if(isset($_GET['show']) && $_GET['show'] === 'allTask')</p>
                <p class="home-itemP" style="color:green; font-size: 12px;">class TaskProvider сильная зависимость от Task</p>
                <p class="home-itemP" style="color:green; font-size: 12px;">new Task внутри создаете, так менее гибко, чем если бы его снаружи передавали из контроллера.</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">Очень верно всю работу с сессией завернули в TaskProvider, а нет не всю</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">$_SESSION['task'][$_GET['doneTaskID']]->setIsDone(); вот это вижу в контроллере, не дожлно быть работы с сессией с данными вне класса, смысл в нем тогда теряется.</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">array_splice($_SESSION['task'], $_GET['removeTaskID'], 1); вот еще, TaskProvider не доделали, все это внутри должно быть.</p>
                <p class="home-itemP">$_SESSION['showTasks'] = 'allTask'; зря похвалил,</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">unset($_GET, $_POST); зачем это делать, если тут же делаете редирект? После завершения скрипта и так все удалится.</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">В общем внешне не плохо, а внутри архитектурных бардак, если используете классы делайте все через них, смысл тогда в них.</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">if(isset($_SESSION['username'])) вот еще в теле вся основная логика, это тоже плохо архитектурно, отдельно проверка входа, и отдельно основная логика, не надо делать не нужных уровней.</p>
                <p class="home-itemP" style="color:gray; font-size: 12px;">Отличное внешнее оформление, красиво. Внутри придет с опытом.</p>
            </li>
        </ol>


    </main>
</body>

</html>