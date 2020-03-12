<?php
$user = new stdClass();
$user->name = 'Petar Stoyanov';
$title = 'Profile: '.$user->name;
$cssArray = ['main.css', 'profile.css'];
$jsArray = ['main.js', 'profile.js'];
require_once 'header.php';
?>
<?php //hidden elements ?>
<div id="add-note">
    <h4>Add a note:</h4>
    <form method="post" action="#">
        <textarea name="note-text" id="note-text" placeholder="Add a note about the user"></textarea>
        <button type="submit">Add</button>
    </form>
</div>

<div id="leave-history">
    <h3>Leave history</h3>
    <section>
        <p>
            03.03.2020 - 10.03.2020
            <span class="sick-leave">[sick-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="paid-leave">[paid-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="special-leave">[special-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="sick-leave">[sick-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="paid-leave">[paid-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="special-leave">[special-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="sick-leave">[sick-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="paid-leave">[paid-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="special-leave">[special-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="sick-leave">[sick-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="paid-leave">[paid-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="special-leave">[special-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="sick-leave">[sick-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="paid-leave">[paid-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="special-leave">[special-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="sick-leave">[sick-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="paid-leave">[paid-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="special-leave">[special-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="sick-leave">[sick-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="paid-leave">[paid-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="special-leave">[special-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="sick-leave">[sick-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="paid-leave">[paid-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="special-leave">[special-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="sick-leave">[sick-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="paid-leave">[paid-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="special-leave">[special-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="sick-leave">[sick-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="paid-leave">[paid-leave]</span>
        </p>
        <p>
            03.03.2020 - 10.03.2020
            <span class="special-leave">[special-leave]</span>
        </p>
    </section>
</div>
<?php //end hidden elements ?>


<div class="main-content">
<div class="flex-wrapper">

    <div class="profile-overview">
        <header>
            <div class="flex-wrapper">
                <img src="./img/static/profile.jpg" alt="profile picture">
                <section class="basic-info">
                    <h2>Petar Stoyanov</h2>
                    <p>
                        <span class="job-position">web developer, </span>
                        <span class="office-location">Plovdiv, Bulgaria</span>
                    </p>
                    <p> <span class="employee-since">Employee since: 13.11.2018</span></p>
                </section>
            </div>
        </header>
        <section class="overview-details">
            <div class="flex-wrapper">
                <span class="overview-heading">Email:</span>
                <span class="overview-content">p.stoyanov@mycompany.net</span>
                <span class="overview-heading">Phone:</span>
                <span class="overview-content">+359888777555</span>
                <span class="overview-heading">Skype:</span>
                <span class="overview-content">fakeskype331</span>
                <span class="overview-heading">Location:</span>
                <span class="overview-content">Room 3, Bastun #, Plovdiv, Bulgaria</span>
            </div>
        </section>
        <section class="section-text text-missing">
        </section>
    </div>

    <div class="section-content user-leave">
        <a href="#" id="new-leave-button" class="edit-button new-leave">+</a>
        <header>
            <h3 class="section-title">User leaves</h3>
        </header>
        <section class="section-text future-leaves">
        <div class="flex-wrapper">
           <p>
               03.03.2020 - 10.03.2020
               <span class="sick-leave">[sick-leave]</span>
           </p>
            <aside class="leave sick-leave">
                <a href="#" class="action approve"></a>
                <a href="#" class="action deny"></a>
            </aside>

            <p>
               10.03.2020 - 13.03.2020
               <span class="paid-leave">[paid-leave]</span>
           </p>
            <aside class="paid-leave">
                <a href="#" class="action approve"></a>
                <a href="#" class="action deny"></a>
            </aside>


        </div>
        </section>
        <section class="section-text past-leaves">
        <div class="flex-wrapper">
            <p>
                03.03.2020 - 10.03.2020
                <span class="sick-leave">[sick-leave]</span>
            </p>
            <aside class="leave sick-leave">
                <a href="#" class="action approve"></a>
                <a href="#" class="action deny"></a>
            </aside>

            <p>
                10.03.2020 - 13.03.2020
                <span class="paid-leave">[paid-leave]</span>
            </p>
            <aside class="paid-leave">
                <a href="#" class="action approve"></a>
                <a href="#" class="action deny"></a>
            </aside>
        </div>
        </section>
    </div>
</div>

    <div class="section-content full-info">
        <a href="#" id="edit-profile" class="edit-button edit-profile">e</a>
        <header>
            <h3 class="section-title">Detailed information</h3>
        </header>
        <section class="section-text text-today">
        <div class="flex-wrapper">
            <div class="details-wrapper flex-wrapper">
                <section class="main-info">
                    <h2>Job details</h2>
                    <span class="details-heading">Salary</span>
                    <span class="details-info">1300 BGN</span>
                    <span class="details-heading">Department</span>
                    <span class="details-info">Development</span>
                    <span class="details-heading">Team Leader</span>
                    <span class="details-info">Linus Torvalds</span>
                    <span class="details-heading">Group Leader</span>
                    <span class="details-info">John Carmack</span>
                    <span class="details-heading">Reporting to:</span>
                    <span class="details-info">John Carmack</span>
                    <span class="details-heading">Office</span>
                    <span class="details-info">Plovdiv, Bulgaria</span>
                    <span class="details-heading">Room</span>
                    <span class="details-info">Room 3</span>

                </section>
                <aside class="history">
                    <h3>History</h3>
                    <span>13.11.2018 - 05.02.2019 Intern Web Developer</span>
                    <span>05.02.2019 - 05.08.2019 Junior Web Developer</span>
                    <span>05.02.2019 - Web Developer</span>
                </aside>

                <section class="notes">
                    <a href="#" id="add-note-link" class="edit-button add-note">+</a>
                    <h4>Notes:</h4>
                    <span class="note">
                        A bit lazy, has habbit of procrastinating. John
                    </span>
                    <span class="note">
                        Can handle stress. John
                    </span>
                    <span class="note">
                        Gets easily distracted. Talks too much. Linus
                    </span>
                </section>

            </div>
            <div class="others-wrapper">
                <div class="personal">
                    <h2>Personal</h2>
                    <span class="others-heading">Marial status:</span>
                    <span class="others-text">married</span>
                    <span class="others-heading">Spouse:</span>
                    <span class="others-text">Wifey Wifova</span>
                    <span class="others-heading">Close relative</span>
                    <span class="others-text">Wifey Wifova</span>
                    <span class="others-heading">Relative Phone</span>
                    <span class="others-text">+359888777666</span>
                </div>
                <div class="extras">
                    <h2>Extras</h2>
                    <span class="others-heading">Hobbies:</span>
                    <span class="others-text">Football, cycling, gaming</span>
                    <span class="others-heading">Blood Group:</span>
                    <span class="others-text">B+</span>
                    <span class="others-heading">Religion:</span>
                    <span class="others-text">not telling</span>
                    <span class="others-heading">Orientation:</span>
                    <span class="others-text">not sharing</span>
                    <span class="others-heading">Nationality:</span>
                    <span class="others-text">Bulgarian</span>
                </div>
            </div>
        </div>
        </section>
    </div>
</div>


<?php require_once 'footer.php'; ?>
