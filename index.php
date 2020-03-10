<?php
if (!empty($_GET['date'])) {
    $date = new DateTime($_GET['date']);
} else {
    $date = new DateTime('now');
}
$title = 'Home Page - ' . $date->format('l jS F Y');
$cssArray = ['main.css', 'home.css'];
require_once 'header.php';
?>

<div class="main-content">
    <div class="section-content missing">
        <header>
            <h3 class="section-title">Who is missing</h3>
        </header>
        <section class="section-text text-missing">
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
            <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp; John Smith [accounting] 01.01 - 31.04 [sick leave]</p>
        </section>
    </div>

    <div class="section-content today">
        <header>
            <h3 class="section-title">Today</h3>
        </header>
        <section class="section-text text-today">
            asdasdasd
        </section>
    </div>

    <div class="section-content news">
        <header>
            <h3 class="section-title">News</h3>
        </header>
        <section class="section-text text-today">
            asdasdasd
        </section>
    </div>
</div>

<?php
require_once 'footer.php';
?>