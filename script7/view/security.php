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
    <link rel="stylesheet" href="../style/security.css">
    <title>Авторизация - Менеджер задач</title>
</head>

<body>
    <header>
        <?php include "menu.php"; ?>
    </header>
    <main>
        <form class="security" method="post">
            <div class="security_header">
                <h3 class="hd1">Авторизация</h3>
            </div>
            <?php if($error !== null):?>
                <div class="security_error">
                    <?php if($error === 'registrationUserExists'):?><p>Такой пользователь уже существует</p><?php endif;?>
                    <?php if($error === 'enterUserNotFound'):?><p>Неправильный логин или пароль</p><?php endif;?>
                </div>
            <?php endif;?>
            <div class="security_fieldWRP">
                <div class="security_field">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="username" id="username" placeholder="admin" value="admin">
                        <label for="username">Имя пользователя (value = admin)</label>
                    </div>
                </div>
                <div class="security_field">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="123" value="123">
                        <label for="password">Пароль (value = 123)</label>
                    </div>
                </div>
            </div>
            <div  class="security_button">
                <a href="/"><button class="btn btn-primary" type="button">на главную</button></a>
                <button class="btn btn-primary" formaction="/?controller=security&action=registration" type="submit">Регистрация</button>
                <button class="btn btn-primary" formaction="/?controller=security&action=enter" type="submit">Войти</button>
            </div>
        </form>
    </main>
</body>

</html>
