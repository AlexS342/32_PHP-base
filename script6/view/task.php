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
    <title>Задачи - Менеджер задач</title>
</head>

<body style="background: #e3e3e3; padding: 12px; height: 100vw;">

    <header>
        <?php include "menu.php"; ?>
    </header>

    <main style="background: #ffc761; padding: 12px; height: 100%; margin:5px; border-radius: 10px;">

        <?php if(isset($_SESSION['username'])) : ?>
        
            <h3>Добавить задачу</h3>
            <form method="post" style="display: flex; justify-content: space-between; border: 1px solid #ff9e4b; border-radius: 10px; padding: 10px;">
                <div style="flex-grow: 1;">
                    <div style="display: flex; flex-direction: column; margin: 0 0 12px 0;">
                        <label for="discription">Описание задачи</label>
                        <input type="text" name="discription" id="discription" placeholder="Поздравить преподавателя с новым годом" style="">
                    </div>
                    <div style="display: flex; flex-direction: column;">
                        <div>
                            <label for="priority">Приоритет: </label>
                        </div>
                        <div>
                            <span><input name="priority" type="radio" value="1">Низкий</span>
                            <span><input name="priority" type="radio" value="2">Средний</span>
                            <span><input name="priority" type="radio" value="3"checked>Высоки</span>
                        </div>
                    </div>
                </div>
                <div style="display: flex; align-items: flex-end; margin-left: 10px;">
                    <button class="btn btn-primary" type="submit">Добавить</button>
                </div>
            </form>

            <h3>Ваши задачи</h3>
            <a class="<?php if($show === 'allTask' || $show === null): ?>btn btn-success<?php else : ?> btn btn-primary <?php endif ?>" href="/?controller=task&show=allTask" role="button">Все задачи</a>
            <a class="<?php if($show === 'notDone'): ?>btn btn-success<?php else : ?> btn btn-primary <?php endif ?>" href="/?controller=task&show=notDone" role="button">Не выполненые</a>
            <a class="<?php if($show === 'done'): ?>btn btn-success<?php else : ?> btn btn-primary <?php endif ?>" href="/?controller=task&show=done" role="button">Выполненые</a>

            <div style="border: 1px solid black;">
                <?php if(isset($_SESSION['task']) && count($dataTask) > 0): ?>
                    <?php foreach($dataTask as $key => $task) : ?>
                        <?php ['description' => $description, 'priority' => $priority, 'isDone' => $isDone, 'dateCreated' => $dateCreated] = $task?>
                        <div style="display:flex; justify-content: space-between; align-items: center; border: 1px solid black; padding: 8px;">
                            <div>
                                <span>Задача: <?= $description; ?></span>
                                <span>Приоритет: <?= $priority; ?></span>
                                <span>Выполнена: <?php if($isDone): ?> Да <?php else: ?> Нет <?php endif ?></span>
                                <span>Создана: <?= $dateCreated; ?></span>
                            </div>
                            <div>
                                <a href="/?controller=task&doneTask=TRUE&doneTaskID=<?=$key?>"><button>Выполнена</button></a>
                                <a href="/?controller=task&removeTask=TRUE&removeTaskID=<?=$key?>"><button>Удалить</button></a>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else: ?>
                    <div style="display:flex; justify-content: space-between; align-items: center; border: 1px solid black; padding: 8px;">
                        <div class="alert alert-danger" role="alert">
                            <?php if($show === 'allTask' || $show === null): ?><p>У вас нет задач, но вы можете их добавть.</p><?php endif ?>
                            <?php if($show === 'notDone'): ?><P>У вас нет невыполненых задач.</p><?php endif ?>
                            <?php if($show === 'done'): ?><P>У вас нет выполненых задач.</p><?php endif ?>
                        </div>
                    </div>
                <?php endif ?>
            </div>

        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                Раздел "Задачи" доступен только зарегистррированым пользователям. Пожалуйста войдите в свой аккаунт.
            </div>
        <?php endif ?>
    </main>
</body>

</html>
