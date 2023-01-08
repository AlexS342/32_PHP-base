<nav class="navbar navbar-light" style="background-color: #82caff;">
        
    <a class="navbar-brand align-baseline logoWPR" href="/"><img class="logo" src="../img/logo.svg" alt="logo"><p>TODO</p></a>
    <a class="nav-link <?php if($page === 'index'): ?>text-dark<?php else: ?>text-secondary<?php endif ?>" aria-current="page" href="/">Главная</a>
    <a class="nav-link <?php if($page === 'task'): ?>text-dark<?php else: ?>text-secondary<?php endif ?> <?php if($username === null): ?>disabled text-white-50<?php endif ?>" <?php if($username === null): ?>tabindex="-1" aria-disabled="true"<?php endif ?> href="/?controller=task">Задачи</a>
    <a class="nav-link <?php if($page === 'security'): ?>text-dark<?php else: ?>text-secondary<?php endif ?> <?php if($username !== null): ?>disabled text-white-50<?php endif ?>" <?php if($username === null): ?>tabindex="-1" aria-disabled="true"<?php endif ?> href="/?controller=security">Авторизация</a>

    <?php if($username !== null): ?>
        <a class="nav-link text-secondary" href="/?controller=security&action=logout">Выйти</a>
    <?php endif ?>
</nav>