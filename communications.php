<?php
$title = 'Communications';
$cssArray = ['main.css', 'communications.css'];
$jsArray = ['main.js', 'communications.js'];
require_once 'header.php';
?>

<div class="main-content">
    <div class="flex-wrapper">
        <div class="section-content leave-requests">
            <header>
                <h3 class="section-title">Pending leave requests</h3>
            </header>
            <input class="search-box" type="text" id="search-leave-requests" placeholder="Search requests">
            <section class="section-text text-applications">
                <div class="leave-application flex-wrapper">
                    <span class="application-person">
                        <a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp;
                        John Smith [accounting] 01.01 - 31.04
                        <span class="application-type paid">
                            [paid-leave]
                        </span>
                    </span>
                    <span class="application-tools">
                        <a class="approve"></a>
                        <a class="deny"></a>
                    </span>
                </div>

                <div class="leave-application flex-wrapper">
                    <span class="application-person">
                        <a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp;
                        Dave Jones [accounting] 01.01 - 31.04
                        <span class="application-type non-paid">
                            [non-paid]
                        </span>
                    </span>
                    <span class="application-tools">
                        <a class="approve"></a>
                        <a class="deny"></a>
                    </span>
                </div>

                <div class="leave-application flex-wrapper">
                    <span class="application-person">
                        <a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp;
                        Corry Talor [accounting] 01.01 - 31.04
                        <span class="application-type special">
                            [special-leave]
                        </span>
                    </span>
                    <span class="application-tools">
                        <a class="approve"></a>
                        <a class="deny"></a>
                    </span>
                </div>
                <div class="leave-application flex-wrapper">
                    <span class="application-person">
                        <a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp;
                        Alexander Bell [accounting] 01.01 - 31.04
                        <span class="application-type paid">
                            [paid-leave]
                        </span>
                    </span>
                    <span class="application-tools">
                        <a class="approve"></a>
                        <a class="deny"></a>
                    </span>
                </div>

                <div class="leave-application flex-wrapper">
                    <span class="application-person">
                        <a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp;
                        Graham Sounes [accounting] 01.01 - 31.04
                        <span class="application-type non-paid">
                            [non-paid]
                        </span>
                    </span>
                    <span class="application-tools">
                        <a class="approve"></a>
                        <a class="deny"></a>
                    </span>
                </div>

                <div class="leave-application flex-wrapper">
                    <span class="application-person">
                        <a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp;
                        Terrance Hill [accounting] 01.01 - 31.04
                        <span class="application-type special">
                            [special-leave]
                        </span>
                    </span>
                    <span class="application-tools">
                        <a class="approve"></a>
                        <a class="deny"></a>
                    </span>
                </div>
                <div class="leave-application flex-wrapper">
                    <span class="application-person">
                        <a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp;
                        Benny Hill [accounting] 01.01 - 31.04
                        <span class="application-type paid">
                            [paid-leave]
                        </span>
                    </span>
                    <span class="application-tools">
                        <a class="approve"></a>
                        <a class="deny"></a>
                    </span>
                </div>

                <div class="leave-application flex-wrapper">
                    <span class="application-person">
                        <a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp;
                        Lora Ipsumova [accounting] 01.01 - 31.04
                        <span class="application-type non-paid">
                            [non-paid]
                        </span>
                    </span>
                    <span class="application-tools">
                        <a class="approve"></a>
                        <a class="deny"></a>
                    </span>
                </div>

                <div class="leave-application flex-wrapper">
                    <span class="application-person">
                        <a href="#" class="profile"><i class="fas fa-user fa-missing"></i></a>&nbsp;
                        Maha Kali [accounting] 01.01 - 31.04
                        <span class="application-type special">
                            [special-leave]
                        </span>
                    </span>
                    <span class="application-tools">
                        <a class="approve"></a>
                        <a class="deny"></a>
                    </span>
                </div>


            </section>
        </div>

        <div class="section-content message-requests">
            <a href="#" class="edit-button new-message-link">+</a>
            <header>
                <h3 class="section-title">Pending message requests</h3>
            </header>
            <input class="search-box" type="text" id="search-message-requests" placeholder="Search requests">
            <section class="section-text pending-messages">

                <article class="pending-broadcast normal-broadcast">
                    <span class="message-info">
                        From: Penka, development, Plovdiv
                        ---
                        To: Office Plovdiv
                    </span>
                    <section class="message-text flex-wrapper">
                        <span class="message-content">
                            Join us after 6PM in room 3 for my birthday party
                        </span>
                        <span class="message-tools">
                            <a class="approve"></a>
                            <a class="deny"></a>
                        </span>
                    </section>
                </article>

                <article class="pending-broadcast warning">
                    <span class="message-info">
                        From: Ivan, HR, Plovdiv
                        ---
                        To: Office Plovdiv
                    </span>
                    <section class="message-text flex-wrapper">
                        <span class="message-content">
                            Guys, clean your ashtrays! The whole terrace smells like ****!
                        </span>
                        <span class="message-tools">
                            <a class="approve"></a>
                            <a class="deny"></a>
                        </span>
                    </section>
                </article>

                <article class="pending-broadcast danger">
                    <span class="message-info">
                        From: Management
                        ---
                        To: Office Plovdiv
                    </span>
                    <section class="message-text flex-wrapper">
                        <span class="message-content">
                            A state of emergency has been issued in Bulgaria. All employees are to work from home
                        </span>
                        <span class="message-tools">
                            <a class="approve"></a>
                            <a class="deny"></a>
                        </span>
                    </section>
                </article>

                <article class="pending-broadcast important">
                    <span class="message-info">
                        From: Darina, Design, Plovdiv
                        ---
                        To: Room 3
                    </span>
                    <section class="message-text flex-wrapper">
                        <span class="message-content">
                            Guys, seriously, please keep the volume down, your screams affect work in every other office!
                        </span>
                        <span class="message-tools">
                            <a class="approve"></a>
                            <a class="deny"></a>
                        </span>
                    </section>
                </article>

            </section>
        </div>
    </div>

    <div class="section-content news">
        <header>
            <h3 class="section-title">Company broadcasts</h3>
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

<?php
require_once 'footer.php';
?>
