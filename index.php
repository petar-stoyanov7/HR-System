<?php
if (!empty($_GET['date'])) {
    $date = new DateTime($_GET['date']);
} else {
    $date = new DateTime('now');
}
$title = 'Home Page - ' . $date->format('l jS F Y');
$cssArray = ['main.css', 'home.css'];
$jsArray = ['main.js', 'home.js'];
require_once 'header.php';
?>
<div class="main-content">
    <div class="flex-wrapper">
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
                <article class="weather-cold">
                    10&deg;C in Plovdiv, Slight rain
                </article>
                <article class="holiday">
                    National holiday in Cairo - Liberation day
                </article>
                <article class="birthdays">
                    5 birthdays today
                </article>
            </section>
        </div>
    </div>

    <div class="section-content news">
        <header>
            <h3 class="section-title">News</h3>
        </header>
        <section class="section-text text-today">
            <article class="message management">
                <span class="title">To all teams:</span>
                Please bear in mind the upcoming public holidays in Cairo and schedule your workflow accordingly! Management
            </article>

            <article class="message broadcast">
                <span class="title">To office Plovdiv:</span>
                Please cease the childish pranks. If we receive one more complaint - management will take direct action!
            </article>

            <article class="message">
                <span class="title">Some crap</span>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa iste laboriosam voluptatibus? Corporis deleniti dolorem id incidunt iure, quia similique. Alias perspiciatis porro quae quos voluptas. Deserunt in repellendus totam.
            </article>

            <article class="message">
                <span class="title">Sarif Erim leaving.</span>
                On 20.02 the community manager Sarif Erim is leaving us. Let’s wish him luck in his future career.
            </article>

            <article class="message">
                <span class="title">New baby in London</span>
                On 17.02 our system engineer Jake Thorn became a father for the first time.
            </article>

            <article class="message">
                <span class="title">New employee in Plovdiv</span>
                Starting 16.02 we have a new web developer in Plovdiv office - David Elenkov.
            </article>

            <article class="message">
                <span class="title">Lorem</span>
                Ipsa iste laboriosam voluptatibus? Corporis deleniti dolorem id incidunt iure, quia similique. Alias perspiciatis porro quae quos voluptas. Deserunt in repellendus totam.
            </article>

            <article class="message">
                <span class="title">Lorem</span>
                Ipsa iste laboriosam voluptatibus? Corporis deleniti dolorem id incidunt iure, quia similique. Alias perspiciatis porro quae quos voluptas. Deserunt in repellendus totam.
            </article>
        </section>
    </div>
</div>


<?php //overlay items ?>
    <div id="birthdays-list" class="switchable-modal">
        <h2>Birthdays today:</h2>
        <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i> John Smith [London, accounting] - 37</a></p>
        <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i> Penka Prychkova [Plovdiv, HR] - ##</a></p>
        <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i> Abdul Masur [Cairo, development] - 32</a></p>
        <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i> Sapun Paun [Cairo, HR] - 44</a></p>
        <p><a href="#" class="profile"><i class="fas fa-user fa-missing"></i> Tupan Velichkov [Plovdiv, design] - 34</a></p>
    </div>
<?php //end overlay items ?>

<?php
require_once 'footer.php';
?>