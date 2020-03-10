<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php foreach ($cssArray as $element) : ?>
        <link rel="stylesheet" href="./css/<?= $element; ?>">
    <?php endforeach; ?>
    <script src="lib/jQuery/jquery-3.4.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/calendar-base@1.0.0/dist/calendarbase.umd.production.min.js"></script>
    <?php /* calendar tutorial: https://www.cssscript.com/calendar-generator-base/ */ ?>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="./js/calendar.js"></script>
    <title><?= $title; ?></title>
</head>
<body>
<header class="main-header">
    <div class="main-logo">
        <a href="index.php">
            <div class="logo"></div>
        </a>
    </div>
    <div class="header-text">
        <h1><?= $title; ?></h1>
    </div>
    <div class="header-icons">
        <a id="toggle-calendar" class="header-icons" href="#" onclick="toggleCalendar()">
            <i class="fas fa-calendar-alt fa-header"></i>
        </a>
        <a class="header-icons" href="communications.php">
            <i class="fas fa-comment-alt fa-header"></i>
            <span class="notifications">4</span>
        </a>
        <a class="header-icons" href="profile.php">
            <i class="fas fa-user fa-header"></i>
        </a>
    </div>
</header>
<div id="calendar">
    <header>
        <a href="#" id="month-backwards"><i class="fas fa-chevron-left"></i></a>
        <span id="selected-month"></span>
        <a href="#" id="month-forward"><i class="fas fa-chevron-right"></i></a>
    </header>
    <div id="calendar-content">
        asd
    </div>
</div>
<div class="site-content">
    <aside class="main-navbar">
        <ul>
            <li>
                <a href="/">Admin</a>
                <ul class="submenu">
                    <li><a href="">Company</a></li>
                    <li><a href="">Teams</a></li>
                    <li><a href="">Employees</a></li>
                </ul>
            </li>
            <li><a href="hope.php">Home</a></li>
            <li><a href="communication.php">Communication</a></li>
            <li><a href="">Company</a></li>
        </ul>
    </aside>