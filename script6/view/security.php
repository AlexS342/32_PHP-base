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
    <title>Авторизация - Менеджер задач</title>
</head>

<body style="background: #e3e3e3; padding: 12px; height: 100vw;">
    <header>
        <?php include "menu.php"; ?>
    </header>
    <main style="background: #ffc761; padding: 12px; height: 100%; margin:5px; border-radius: 10px;">
        <form method="post">
            <h3><?= $pageName ?></h3>
            <label for="username">Имя пользователя</label>
            <input type="text" name="username" id="username" placeholder="admin">
            <label for="password">Имя пользователя</label>
            <input type="password" name="password" id="password" placeholder="123">
            <button class="btn btn-primary" type="submit">Войти</button>
            <a href="/">на главную</a>
        </form>
    </main>
</body>

</html>