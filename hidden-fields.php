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
    <form method="post" id="edit-user-form" action="#">
        <fieldset class="basic-info flex-wrapper">
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
                    <option value="plovdiv" selected>plovdiv</option>
                    <option value="london">london</option>
                    <option value="cairo">Cairo</option>
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
                <label for="room">Room:</label>
                <input type="text" name="room" id="room" value="Room 3">
            </div>
            <div class="wrapper">
                <label for="salary">Salary:</label>
                <input type="text" name="salary" id="salary" value="1300 BGN">
            </div>
        </fieldset>
        <fieldset class="personal flex-wrapper">
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
        <fieldset class="extras flex-wrapper">
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