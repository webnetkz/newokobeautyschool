<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="rgb(88, 139, 221)">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?=$description?>">
    <meta name="keywords" content="<?=$keywords?>">
    <meta name="author" content="TOO WebNet">

    <!-- CODELAB: Add iOS meta tags and icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="newProduct">
    <link rel="apple-touch-icon" href="/images/logo.png">
    <link rel="stylesheet" href="public/styles/allStyle.css">
    <link rel="stylesheet" href="public/styles/buttons.css">
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" href="public/images/mini_logo.png" type="image/png">

    <title><?=$title?></title>

    <script src="public/scripts/main.js"></script>
</head>
<body>
    <button class="btnMenu" onclick="handlerMenu();">Меню</button>
    <header class="headerMenu">
        <menu class="hiddenMenu">
            <nav>
                <a href="index" class="menuItem linkNS">
                    <img src="public/images/logo.webp" alt="logo okobeautyschool" class="imgLogo">
                </a>
                <a href="" class="menuItem linkNS">Курсы визажа</a>
                <a href="" class="menuItem linkNS">Галерея</a>
                <a href="" class="menuItem linkNS">Расписание</a>
                <a href="" class="menuItem linkNS">Контакты</a>
            </nav>
        </menu>
    </header>