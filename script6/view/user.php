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
    <link rel="stylesheet" href="../style/user.css">
    <title>Задачи - Менеджер задач</title>
</head>

<body>

    <header>
        <?php include "menu.php"; ?>
    </header>

    <main>
        <!-- <?php if(isset($_SESSION['username'])) : ?> -->
            <h1 class="hd1">Личный кабинет</h1>
            
            <div class="data">
                <div class="data-photo"><p>P</p></div>
                <h3 class="hd1"><?=$user?></h3>
                <ul class="dataList">
                    <li class="dataList-item">
                        <p class="dataList-itemP1">ID:</p>
                        <p class="dataList-itemP2">12345</p>
                    </li>
                    <li class="dataList-item">
                        <p class="dataList-itemP1">Логин:</p>
                        <p class="dataList-itemP2"><?=$user?></p>
                    </li>
                    <li class="dataList-item">
                        <p class="dataList-itemP1">Имя:</p>
                        <p class="dataList-itemP2">Василий</p>
                    </li>
                    <li class="dataList-item">
                        <p class="dataList-itemP1">Фамилия:</p>
                        <p class="dataList-itemP2">Иванов</p>
                    </li>
                    <li class="dataList-item">
                        <p class="dataList-itemP1">Отчество:</p>
                        <p class="dataList-itemP2">Иванович</p>
                    </li>
                    <li class="dataList-item">
                        <p class="dataList-itemP1">Возрост:</p>
                        <p class="dataList-itemP2">21</p>
                    </li>
                    <li class="dataList-item">
                        <p class="dataList-itemP1">Пол:</p>
                        <p class="dataList-itemP2">мужской</p>
                    </li>
                    <li class="dataList-item">
                        <p class="dataList-itemP1">Дата регистрации:</p>
                        <p class="dataList-itemP2">21/11/2021</p>
                    </li>
                </ul>
            </div>
        <!-- <?php else : ?>
                <div class="alert alert-danger" role="alert">
                    Раздел "Личный кабинет" доступен только зарегистррированым пользователям. Пожалуйста войдите в свой аккаунт.
                </div>
        <?php endif ?> -->
    </main>

</body>

</html>