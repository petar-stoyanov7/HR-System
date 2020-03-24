<div id="calendar" class="switchable-modal">
    <header>
        <a href="#" id="month-backwards"><i class="fas fa-chevron-left"></i></a>
        <span id="selected-month"></span>
        <a href="#" id="month-forward"><i class="fas fa-chevron-right"></i></a>
    </header>
    <div id="calendar-content">
        asd
    </div>
</div>

<div id="new-message" class="switchable-modal">
    <h3>New broadcast request:</h3>
    <form id="new-message-form" class="flex-wrapper">
        <div class="element-wrapper">
            <label for="type">Type</label>
            <select id="type" name="type">
                <option value="normal-broadcast">Normal broadcast</option>
                <option value="warning">Warning</option>
                <option value="important">Important</option>
                <option value="danger">Danger</option>
            </select>
        </div>
        <div class="element-wrapper">
            <label for="office">Office:</label>
            <select id="office" name="office">
                <option value="plovdiv">Plovdiv</option>
                <option value="london">London</option>
                <option value="cairo">Cairo</option>
                <option value="corrusant">Corrusant</option>
                <option value="all" selected>All</option>
            </select>
        </div>
        <div class="element-wrapper">
            <div class="rooms-wrapper" id="wrapper-plovdiv">
                <label for="rooms-plovdiv">Room:</label>
                <select name="rooms-plovdiv" id="rooms-plovdiv">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="rooms-wrapper" id="wrapper-london">
                <label for="rooms-london">Room:</label>
                <select name="rooms-london" id="rooms-london">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="rooms-wrapper" id="wrapper-cairo">
                <label for="rooms-cairo">Room:</label>
                <select name="rooms-cairo" id="rooms-cairo">
                    <option value="101">101</option>
                    <option value="102">102</option>
                    <option value="103">103</option>
                    <option value="104">104</option>
                </select>
            </div>
            <div class="rooms-wrapper" id="wrapper-corrusant">
                <label for="rooms-corrusant">Room:</label>
                <select name="rooms-corrusant" id="rooms-corrusant">
                    <option value="A1001">A1001</option>
                    <option value="A1002">A1002</option>
                    <option value="A1003">A1003</option>
                    <option value="A1004">A1004</option>
                    <option value="A1005">A1005</option>
                    <option value="A1006">A1006</option>
                    <option value="A1007">A1007</option>
                    <option value="A1008">A1008</option>
                </select>
            </div>
        </div>
        <textarea id="text-message" name="text-message" placeholder="type your message"></textarea>
        <button type="submit">Send</button>
    </form>
</div>

<div id="edit-user" class="switchable-modal">
    <h2>Edit User:</h2>
    <form method="post" id="edit-user-form" action="#">
        <fieldset class="basic-info">
            <legend>Basic info</legend>
            <div class="wrapper">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="Petar Stoyanov">
            </div>
            <div class="wrapper">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="p.stoyanov@mycompany.net">
            </div>
            <div class="wrapper">
                <label for="phone-number">Phone:</label>
                <input type="text" name="phone-number" id="phone-number" value="+359888777555">
            </div>
            <div class="wrapper">
                <label for="skype">Skype:</label>
                <input type="text" name="skype" id="skype" value="fakeskype331">
            </div>
            <div class="wrapper">
                <label for="office">Office:</label>
                <select name="office" id="office">
                    <option value="plovdiv" selected>Plovdiv</option>
                    <option value="london">London</option>
                    <option value="cairo">Cairo</option>
                    <option value="corrusant">Corrusant</option>
                </select>
            </div>
            <div class="wrapper">
                <label for="team">Team:</label>
                <select name="team" id="team">
                    <option value="management">management</option>
                    <option value="hr">hr</option>
                    <option value="development" selected>development</option>
                    <option value="design">design</option>
                    <option value="support">support</option>
                </select>
            </div>
            <div class="wrapper">
                <label for="position">Position:</label>
                <select name="position" id="position">
                    <option value="junior dev">junior dev</option>
                    <option value="developer">developer</option>
                    <option value="development GL">development GL</option>
                    <option value="development TL">development TL</option>
                </select>
            </div>
            <div class="wrapper">
                <label for="room">Room:</label>
                <input type="text" name="room" id="room" value="Room 3">
            </div>
            <div class="wrapper">
                <label for="salary">Salary:</label>
                <input type="text" name="salary" id="salary" value="1300 BGN">
            </div>
        </fieldset>
        <fieldset class="personal">
            <legend>Personal</legend>
            <div class="wrapper">
                <label for="marial-status">Marial status:</label>
                <select name="marial-status" id="marial-status">
                    <option value="single">single</option>
                    <option value="married" selected>married</option>
                    <option value="divorced">divorced</option>
                    <option value="widowed">widowed</option>
                    <option value="not-sharing">not sharing</option>
                </select>
            </div>
            <div class="wrapper">
                <label for="spouse">Spouse:</label>
                <input type="text" name="spouse" id="spouse" value="Wifey Wifova">
            </div>
            <div class="wrapper">
                <label for="close-relative">Close relative:</label>
                <input type="text" name="close-relative" id="close-relative" value="Wifey Wifova">
            </div>
            <div class="wrapper">
                <label for="relative-phone">Relative phone:</label>
                <input type="text" name="relative-phone" id="relative-phone" value="+359888777666">
            </div>
        </fieldset>
        <fieldset class="extras">
            <legend>Extras</legend>
            <div class="wrapper">
                <label for="hobbies">Hobbies:</label>
                <input type="text" name="hobbies" id="hobbies" value="Football, cycling, gaming">
            </div>
            <div class="wrapper">
                <label for="blood-group">Blood group:</label>
                <input type="text" name="blood-group" id="blood-group" value="B+">
            </div>
            <div class="wrapper">
                <label for="religion">Religion:</label>
                <input type="text" name="religion" id="religion" value="">
            </div>
            <div class="wrapper">
                <label for="orientation">Orientation:</label>
                <input type="text" name="orientation" id="orientation" value="">
            </div>
            <div class="wrapper">
                <label for="nationality">Nationality:</label>
                <input type="text" name="nationality" id="nationality" value="Bulgarian">
            </div>
        </fieldset>
        <button type="submit">Submit</button>
    </form>
</div>

<div id="new-leave" class="switchable-modal">
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