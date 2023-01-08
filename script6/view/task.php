<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/menu.css">
    <link rel="stylesheet" href="../style/task.css">
    <link rel="stylesheet" href="../style/itemTask.css">
    <title>Задачи - Менеджер задач</title>
</head>

<body>

    <header>
        <?php include "menu.php"; ?>
    </header>

    <main>
        <h1 class="hd1">Задачи</h1>
        <?php if(isset($_SESSION['username'])) : ?>

            <form class="addForm" method="post">

                <h3 class="hd3">Добавить задачу</h3>

                <div class="form-floating addForm-FieldWRP">
                    <input type="text" class="form-control" name="discription" id="discription" placeholder="Поздравить преподавателя с новым годом">
                    <label for="username">Поздравить преподавателя с новым годом</label>
                </div>

                <div class="addForm-groupButton">
                    <div class="addForm-groupButtonPriority">
                        <h5 class="hd5">Приоритет</h5>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="priority" id="btnradio1" value="1" autocomplete="on" checked>
                            <label class="btn btn-outline-primary" for="btnradio1">Низкий</label>
                            <input type="radio" class="btn-check" name="priority" id="btnradio2" value="2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio2">Средний</label>
                            <input type="radio" class="btn-check" name="priority" id="btnradio3" value="3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio3">Высокий</label>
                        </div>
                    </div>
                    <div  class="addForm-ButtonAdd">
                        <button class="btn btn-primary btn-sm" type="submit">Добавить</button>
                    </div>
                </div>
            </form>

            <hr/>

            <div class="task">

                <div class="task-header">
                    <h3 class="hd3">Ваши задачи</h3>
                </div>

                <div class="task-button">
                    <a class="btn btn-sm <?php if($show === 'allTask' || $show === null): ?>btn-primary<?php else : ?> btn-outline-primary <?php endif ?>" href="/?controller=task&show=allTask" role="button">Все задачи</a>
                    <a class="btn btn-sm <?php if($show === 'notDone'): ?>btn-primary<?php else : ?> btn-outline-primary <?php endif ?>" href="/?controller=task&show=notDone" role="button">Не выполненые</a>
                    <a class="btn btn-sm <?php if($show === 'done'): ?>btn-primary<?php else : ?> btn-outline-primary <?php endif ?>" href="/?controller=task&show=done" role="button">Выполненые</a>
                </div>

                <div class="task-list">
                    <?php if(isset($_SESSION['task']) && count($dataTask) > 0): ?>
                        <?php foreach($dataTask as $key => $task) : ?>
                            <?php ['description' => $description, 'priority' => $priority, 'isDone' => $isDone, 'dateCreated' => $dateCreated] = $task?>
                                <?php include "itemTask.php"; ?>
                        <?php endforeach ?>
                    <?php else: ?>
                        <div>
                            <div class="alert alert-success" role="alert">
                                <?php if($show === 'allTask' || $show === null): ?><p>У вас нет задач, но вы можете их добавть.</p><?php endif ?>
                                <?php if($show === 'notDone'): ?><P>У вас нет невыполненых задач.</p><?php endif ?>
                                <?php if($show === 'done'): ?><P>У вас нет выполненых задач.</p><?php endif ?>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        <?php else : ?>
                    <div class="alert alert-danger" role="alert">
                        Раздел "Задачи" доступен только зарегистррированым пользователям. Пожалуйста войдите в свой аккаунт.
                    </div>
        <?php endif ?>
    </main>
</body>

</html>
