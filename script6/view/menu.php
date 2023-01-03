<!--
Предварительно стилилизацию выполнил внури тегов, планирую проработать оформление в свободное время
-->

<div style="background: #ffae1b; padding: 12px; margin:5px; border-radius: 10px;">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Главная</a>
        </li>
        <?php if($username === null): ?>
        <li class="nav-item">
            <a class="btn btn-primary" href="/?controller=security" role="button">Войти</a>
        </li>
        <?php elseif($username !== null): ?>
        <li class="nav-item">
            <a class="nav-link" href="/?controller=task">Задачи</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-primary" href="/?controller=security&action=logout" role="button">Выйти</a>
        </li>
        <?php endif ?>
    </ul>
</div>
