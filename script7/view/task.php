<?php 
if($_SESSION['username'] === null){
    header("Location: /?controller=404");
    die;
}
?>

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

            <form class="addForm" method="post">

                <h3 class="hd3">Добавить задачу</h3>

                <div class="form-floating addForm-FieldWRP">
                    <input type="text" class="form-control" name="description" id="description" placeholder="Поздравить преподавателя с новым годом">
                    <label for="description">Выполнить домашнее задание</label>
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
                    <a class="btn btn-sm <?php if($_SESSION['showTasks'] === 'allTask'): ?>btn-primary<?php else : ?> btn-outline-primary <?php endif ?>" href="/?controller=task&show=allTask" role="button">Все задачи</a>
                    <a class="btn btn-sm <?php if($_SESSION['showTasks'] === 'notDone'): ?>btn-primary<?php else : ?> btn-outline-primary <?php endif ?>" href="/?controller=task&show=notDone" role="button">Не выполненые</a>
                    <a class="btn btn-sm <?php if($_SESSION['showTasks'] === 'done'): ?>btn-primary<?php else : ?> btn-outline-primary <?php endif ?>" href="/?controller=task&show=done" role="button">Выполненые</a>
                </div>

                <div class="task-list">
                    <?php if(count($dataTask) > 0): ?>
                        <?php foreach($dataTask as $task) : ?>
                            <?php ['id'=>$key, 'description' => $description, 'priority' => $priority, 'isDone' => $isDone, 'dateCreated' => $dateCreated] = $task?>
                                <?php include "itemTask.php"; ?>
                        <?php endforeach ?>
                    <?php else: ?>
                        <div>
                            <div class="alert alert-success" role="alert">
                                <?php if($_SESSION['showTasks'] === 'allTask'): ?><p>У вас нет задач, но вы можете их добавть.</p><?php endif ?>
                                <?php if($_SESSION['showTasks'] === 'notDone'): ?><P>У вас нет невыполненых задач.</p><?php endif ?>
                                <?php if($_SESSION['showTasks'] === 'done'): ?><P>У вас нет выполненых задач.</p><?php endif ?>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>
<!--<pre>-->
<!--    --><?php //=
//    var_dump($_SESSION['tasks'])
//
//    ?>
<!--</pre>-->
    </main>
</body>

</html>
