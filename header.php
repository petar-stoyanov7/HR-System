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
    <?php if (!empty($jsArray)) : ?>
    <?php foreach ($jsArray as $element) : ?>
        <script src="./js/<?= $element ?>"></script>
    <?php endforeach; ?>
    <?php endif; ?>
    <?php /* calendar tutorial: https://www.cssscript.com/calendar-generator-base/ */ ?>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="./js/calendar.js"></script>
    <title><?= $title; ?></title>
</head>
<body>
<div id="transparent-overlay"></div>
<div id="black-overlay"></div>
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
<?php //hidden elements ?>
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

<div id="edit-user">
    <h2>Edit User:</h2>
    <form class="edit-user" action="#">
        <fieldset class="basic-info flex-wrapper">
            <legend>Basic info</legend>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="Petar Stoyanov">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="p.stoyanov@mycompany.net">
            <label for="phone-number">Phone:</label>
            <input type="text" name="phone-number" id="phone-number" value="+359888777555">
            <label for="skype">Skype:</label>
            <input type="text" name="skype" id="skype" value="fakeskype331">
            <label for="office">Office:</label>
            <select name="office" id="office">
                <option value="">--select office--</option>
                <option value="plovdiv" selected>plovdiv</option>
                <option value="london">london</option>
                <option value="cairo">Cairo</option>
            </select>
            <label for="team">Team:</label>
            <select name="team" id="team">
                <option value="">--select team--</option>
                <option value="management">management</option>
                <option value="hr">hr</option>
                <option value="development" selected>development</option>
                <option value="design">design</option>
                <option value="support">support</option>
            </select>
            <label for="room">Room:</label>
            <input type="text" name="room" id="room" value="Room 3">
            <label for="salary">Salary:</label>
            <input type="text" name="salary" id="salary" value="1300 BGN">
        </fieldset>
        <fieldset class="personal flex-wrapper">
            <legend>Personal</legend>
            <label for="marial-status">Marial status:</label>
            <select name="marial-status" id="marial-status">
                <option value="">--marial status--</option>
                <option value="single">single</option>
                <option value="married" selected>married</option>
                <option value="divorced">divorced</option>
                <option value="widowed">widowed</option>
                <option value="not-sharing">not sharing</option>
            </select>
            <label for="spouse">Spouse:</label>
            <input type="text" name="spouse" id="spouse" value="Wifey Wifova">
            <label for="close-relative">Close relative:</label>
            <input type="text" name="close-relative" id="close-relative" value="Wifey Wifova">
            <label for="relative-phone">Relative phone:</label>
            <input type="text" name="relative-phone" id="relative-phone" value="+359888777666">
        </fieldset>
        <fieldset class="extras flex-wrapper">
            <legend>Extras</legend>
            <label for="hobbies">Hobbies:</label>
            <input type="text" name="hobbies" id="hobbies" value="Football, cycling, gaming">
            <label for="blood-group">Blood group:</label>
            <input type="text" name="blood-group" id="blood-group" value="B+">
            <label for="religion">Religion:</label>
            <input type="text" name="religion" id="religion" value="">
            <label for="orientation">Orientation:</label>
            <input type="text" name="orientation" id="orientation" value="">
            <label for="nationality">Nationality:</label>
            <input type="text" name="nationality" id="nationality" value="Bulgarian">
        </fieldset>
        <button type="submit">Submit</button>
    </form>
</div>

<div id="new-leave">
    <h4>New leave application</h4>
    <form>
        <label for="type">Type:</label>
        <select id="type" name="type">
            <option value="paid-leave">Paid Leave</option>
            <option value="sick-leave">Sick Leave</option>
            <option value="special-leave">Special Leave</option>
            <option value="nonpaid-leave">Non paid leave</option>
        </select>
        <textarea id="asd" name="asd" placeholder="Brief description"></textarea>
        <button type="submit">Submit</button>
    </form>
</div>
<?php //end of hidden elements ?>
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