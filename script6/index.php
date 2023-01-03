<?php

    $controller = $_GET['controller'] ?? 'index';

    $router = require "router.php";

    require_once $router[$controller] ?? die('404');
