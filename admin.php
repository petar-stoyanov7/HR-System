<?php
if (!empty($_POST) && !empty($_POST['office-name'])) {
    $teams = [];
    switch($_POST['office-name']) {
        case 'london':
            $teams =  ['london-1', 'london-2', 'london-3', 'london-4'];
            break;
        case 'corrusant':
            $teams =  ['corrusant-1', 'corrusant-2', 'corrusant-3', 'corrusant-4', 'corrusant-5'];
            break;
        case 'plovdiv':
            $teams =  ['plovdiv-1', 'plovdiv-2'];
            break;
        case 'cairo':
            $teams =  ['cairo-1', 'cairo-2', 'cairo-3'];
            break;
        default:
            $teams = ['chereshka', 'vafla', 'muhal'];
            break;
    }
    echo json_encode($teams, JSON_FORCE_OBJECT);
    die();
}
$offices = ['Plovdiv', 'London', 'Cairo', 'Corrusant'];
$teams = ['management', 'HR', 'development', 'design', 'design', 'support'];
$subTeams = [
    'management' => ['manager', 'director', 'PM'],
    'HR' => ['Human Resource', 'Director HR', 'Office Assitant'],
    'development' => ['developer', 'junior dev', 'development GL', 'development TL'],
    'design' => ['designer', 'junior design', 'design GL', 'design TL'],
    'support' => ['lvl1 support', 'lvl2 support', 'lvl3 support', 'support TL']
];
$company = new stdClass();
$company->name = 'Mycompany';
$title = 'Admin panel: '.$company->name;
$cssArray = ['main.css', 'admin.css'];
$jsArray = ['main.js', 'admin.js'];
require_once 'header.php';


?>

<div class="main-content admin-panel">
    <div id="company" class="admin-panel-section">
        <h3>Company:</h3>
        <form method="post" action="#">
            <div class="flex-wrapper">
            <fieldset class="flex-third">
                <legend>Basic info</legend>
                <div class="form-wrapper">
                    <label for="company-name">Company Name: </label>
                    <input type="text" name="company-name" id="company-name" value="Mycompany">
                </div>
                <div class="form-wrapper">
                    <label for="ceo">CEO:</label>
                    <select name="ceo" id="ceo">
                        <option>Luke Skywalker</option>
                        <option>Manager1</option>
                        <option>Manager2</option>
                        <option>Manager3</option>
                        <option>Manager4</option>
                    </select>
                </div>
                <div class="form-wrapper">
                    <label for="ceo">CTO:</label>
                    <select name="cto" id="cto">
                        <option>Anakin Skywalker</option>
                        <option>Manager1</option>
                        <option>Manager2</option>
                        <option>Manager3</option>
                        <option>Manager4</option>
                    </select>
                </div>
                <div class="form-wrapper">
                    <label for="company-address">Address: </label>
                    <input type="text" id="company-address" name="company-address" value="#2213, B72S221, Sector N3, Corrusant ">
                </div>
                <div class="form-wrapper">
                    <label for="company-website">Website: </label>
                    <input type="text" id="company-website" name="company-website" value="company.net">
                </div>

            </fieldset>

            <fieldset class="flex-two-thirds">
                <legend>History</legend>
                <textarea name="company-website">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut pharetra justo, eleifend aliquam nisi. Maecenas condimentum rhoncus felis, eget vulputate erat ullamcorper eu. Nunc ullamcorper diam id urna dapibus egestas rhoncus eu libero. Cras sed ornare mauris. Proin blandit ante sed tellus viverra volutpat. Etiam nisi libero, vulputate vitae mauris eget, tempor posuere tortor. Nulla et felis leo. Sed nibh lectus, iaculis nec facilisis eu, sagittis ac eros. Nulla consectetur nisi sit amet nunc iaculis, et rhoncus odio consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris ante mi, ultricies nec faucibus a, molestie at ex. Aenean luctus felis erat, nec commodo mi bibendum eu. Quisque accumsan leo tincidunt, tincidunt turpis non, sollicitudin dolor. Cras efficitur commodo enim vitae fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam purus tortor, porta ac nulla a, convallis commodo lacus. Donec ut suscipit nisl, quis faucibus enim. Mauris aliquet, ante sit amet condimentum aliquet, diam felis malesuada turpis, eu aliquam risus mi quis orci. Sed in auctor turpis. Aenean pellentesque quam erat, ut dapibus nisl mollis iaculis. Curabitur et ligula purus. Quisque fermentum risus eu eros rhoncus facilisis. Nunc non massa nec diam maximus tempor. Nullam sodales dui non mi laoreet, eget ullamcorper turpis maximus. Suspendisse ipsum dui, finibus eu magna ac, tempor porta dolor. Vivamus congue sem nec ipsum interdum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida sem eget diam auctor egestas vel in lectus. Etiam ac urna tristique, pellentesque justo a, tempor sem. Nam vitae justo ante. Etiam felis eros, finibus tincidunt sodales vel, hendrerit et mauris. Quisque euismod magna sit amet ultrices imperdiet. Sed gravida nunc hendrerit, tincidunt ligula in, dapibus ex. In eleifend elementum tortor nec accumsan. Curabitur laoreet placerat felis ut dignissim. Sed nec justo a eros bibendum molestie id eget lorem. Ut posuere, eros vitae dignissim consequat, tellus urna posuere ante, vitae pharetra purus sem quis arcu. Mauris non sapien porta metus interdum ultricies eget non libero. Quisque sed orci ipsum. Nunc id dolor malesuada, hendrerit dolor vel, porta quam. Fusce volutpat pulvinar massa, vitae fermentum urna pulvinar ut. Nulla congue libero ligula, et rutrum velit interdum in. Sed mollis diam ac venenatis ultrices. Pellentesque molestie, mi id euismod feugiat, enim ligula consectetur nibh, a dapibus odio ante ac dolor. Donec blandit, ex non dapibus blandit, tellus nibh finibus nisl, in pretium eros turpis eu lacus. Vestibulum scelerisque dui suscipit nibh rutrum, et aliquam sapien commodo. Fusce accumsan congue dignissim. Nulla vestibulum arcu quis magna convallis scelerisque. Maecenas dictum elit elit, et tincidunt ligula euismod vel. Nam scelerisque imperdiet rutrum. Suspendisse nec lectus ac ante malesuada sollicitudin eu vitae arcu. Suspendisse accumsan nulla vel lorem ultricies, eu tincidunt orci tincidunt. Nulla hendrerit accumsan ipsum a fringilla. Nam quis ligula ut lectus varius bibendum. Aenean porttitor porttitor sagittis. Pellentesque eget leo molestie, pharetra lectus vitae, auctor urna. Cras in nulla nunc. Nunc tempor aliquam quam id consequat.</textarea>
            </fieldset>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>

    <div id="offices" class="admin-panel-section">
        <h3>Offices:</h3>
        <div class="flex-wrapper">

            <form id="office-1" action="#" method="post" class="flex-quarter office-edit-form">
                <input type="hidden" name="office-name" value="london">
                <div class="form-wrapper">
                    <label for="office-name">Office Name:</label>
                    <input type="text" name="office-name" id="office-name" value="London">
                </div>
                <div class="form-wrapper">
                    <label for="office-country">Country:</label>
                    <input type="text" name="office-country" id="office-country" value="United Kingdom">
                </div>
                <div class="form-wrapper">
                    <label for="office-city">City:</label>
                    <input type="text" name="office-city" id="office-city" value="London">
                </div>
                <div class="form-wrapper">
                    <label for="office-address">Address:</label>
                    <input type="text" name="office-address" id="office-address" value="#3 Bohem st London ">
                </div>
                <div class="form-wrapper">
                    <label for="office-head">Manager: </label>
                    <select name="office-head" id="office-head">
                        <option value="">Jonathan Davies</option>
                        <option value="">Employee 1</option>
                        <option value="">Employee 2</option>
                        <option value="">Employee 3</option>
                        <option value="">Employee 4</option>
                        <option value="">....</option>
                    </select>
                </div>
                <div class="form-wrapper">
                    <label for="office-manager">Office Manager: </label>
                    <select name="office-manager" id="office-manager">
                        <option value="">Alexander Bell</option>
                        <option value="">Employee 1</option>
                        <option value="">Employee 2</option>
                        <option value="">Employee 3</option>
                        <option value="">Employee 4</option>
                        <option value="">....</option>
                    </select>
                </div>
                <button type="submit">Save</button>
                <button type="button" class="new">Add employee</button>
                <button type="button" class="delete">Delete office</button>
            </form>

            <form id="office-2" action="#" method="post" class="flex-quarter office-edit-form">
                <input type="hidden" name="office-name" value="plovdiv">
                <div class="form-wrapper">
                    <label for="office-name">Office Name:</label>
                    <input type="text" name="office-name" id="office-name" value="Plovdiv">
                </div>
                <div class="form-wrapper">
                    <label for="office-country">Country:</label>
                    <input type="text" name="office-country" id="office-country" value="Bulgaria">
                </div>
                <div class="form-wrapper">
                    <label for="office-city">City:</label>
                    <input type="text" name="office-city" id="office-city" value="Plovdiv">
                </div>
                <div class="form-wrapper">
                    <label for="office-address">Address:</label>
                    <input type="text" name="office-address" id="office-address" value="Stochna Gara">
                </div>
                <div class="form-wrapper">
                    <label for="office-head">Manager: </label>
                    <select name="office-head" id="office-head">
                        <option value="">Sotir Strahilov</option>
                        <option value="">Employee 1</option>
                        <option value="">Employee 2</option>
                        <option value="">Employee 3</option>
                        <option value="">Employee 4</option>
                        <option value="">....</option>
                    </select>
                </div>
                <div class="form-wrapper">
                    <label for="office-manager">Office Manager: </label>
                    <select name="office-manager" id="office-manager">
                        <option value="">Totka Vutkova</option>
                        <option value="">Employee 1</option>
                        <option value="">Employee 2</option>
                        <option value="">Employee 3</option>
                        <option value="">Employee 4</option>
                        <option value="">....</option>
                    </select>
                </div>
                <button type="submit">Save</button>
                <button type="button" class="new">Add employee</button>
                <button type="button" class="delete">Delete office</button>
            </form>

            <form id="office-3" action="#" method="post" class="flex-quarter office-edit-form">
                <input type="hidden" name="office-name" value="cairo">
                <div class="form-wrapper">
                    <label for="office-name">Office Name:</label>
                    <input type="text" name="office-name" id="office-name" value="Cairo">
                </div>
                <div class="form-wrapper">
                    <label for="office-country">Country:</label>
                    <input type="text" name="office-country" id="office-country" value="Egypt">
                </div>
                <div class="form-wrapper">
                    <label for="office-city">City:</label>
                    <input type="text" name="office-city" id="office-city" value="Cairo">
                </div>
                <div class="form-wrapper">
                    <label for="office-address">Address:</label>
                    <input type="text" name="office-address" id="office-address" value="#22 Bahur St. Cairo">
                </div>
                <div class="form-wrapper">
                    <label for="office-head">Manager: </label>
                    <select name="office-head" id="office-head">
                        <option value="">Muhammed Abdal</option>
                        <option value="">Employee 1</option>
                        <option value="">Employee 2</option>
                        <option value="">Employee 3</option>
                        <option value="">Employee 4</option>
                        <option value="">....</option>
                    </select>
                </div>
                <div class="form-wrapper">
                    <label for="office-manager">Office Manager: </label>
                    <select name="office-manager" id="office-manager">
                        <option value="">Fatih Terim</option>
                        <option value="">Employee 1</option>
                        <option value="">Employee 2</option>
                        <option value="">Employee 3</option>
                        <option value="">Employee 4</option>
                        <option value="">....</option>
                    </select>
                </div>
                <button type="submit">Save</button>
                <button type="button" class="new">Add employee</button>
                <button type="button" class="delete">Delete office</button>
            </form>

            <form id="office-4" action="#" method="post" class="flex-quarter office-edit-form">
                <input type="hidden" name="office-name" value="corrusant">
                <div class="form-wrapper">
                    <label for="office-name">Office Name:</label>
                    <input type="text" name="office-name" id="office-name" value="Corrusant">
                </div>
                <div class="form-wrapper">
                    <label for="office-country">Country:</label>
                    <input type="text" name="office-country" id="office-country" value=Galactic Republic">
                </div>
                <div class="form-wrapper">
                    <label for="office-city">City:</label>
                    <input type="text" name="office-city" id="office-city" value="Corrusant City">
                </div>
                <div class="form-wrapper">
                    <label for="office-address">Address:</label>
                    <input type="text" name="office-address" id="office-address" value="#2213, B72s221, Sector N3, Corrusant">
                </div>
                <div class="form-wrapper">
                    <label for="office-head">Manager: </label>
                    <select name="office-head" id="office-head">
                        <option value="">Mace Windu</option>
                        <option value="">Employee 1</option>
                        <option value="">Employee 2</option>
                        <option value="">Employee 3</option>
                        <option value="">Employee 4</option>
                        <option value="">....</option>
                    </select>
                </div>
                <div class="form-wrapper">
                    <label for="office-manager">Office Manager: </label>
                    <select name="office-manager" id="office-manager">
                        <option value="">R2D2</option>
                        <option value="">Employee 1</option>
                        <option value="">Employee 2</option>
                        <option value="">Employee 3</option>
                        <option value="">Employee 4</option>
                        <option value="">....</option>
                    </select>
                </div>
                <button type="submit">Save</button>
                <button type="button" class="new">Add employee</button>
                <button type="button" class="delete">Delete office</button>
            </form>
        </div>

        <button class="new-entry" id="new-office">New Office</button>
    </div>

    <div id="teams" class="admin-panel-section">
        <h3>Teams </h3>
        <form>
            <label for="company-offices">Select office:</label>
            <select id="company-offices">
                <option value="-">--Select Office--</option>
                <option value="corrusant">Corrusant</option>
                <option value="plovdiv">Plovdiv</option>
                <option value="cairo">Cairo</option>
                <option value="london">London</option>
            </select>
        </form>

        <div id="teams-container" class="flex-wrapper"></div>

        <button class="new-entry" id="new-team">New team</button>
    </div>

    <div id="employees" class="admin-panel-section">
        <h3>Employees </h3>
        <table id="employees-table">
            <tr>
                <th>Name</th>
                <th>e-mail:</th>
                <th>Office</th>
                <th>Team</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="employees-search" placeholder="search">
                </td>
                <td>
                    <input type="text" id="employees-search" placeholder="search">
                </td>
                <td>
                    <select id="employee-office">
                        <option value="">--select--</option>
                        <?php foreach($offices as $office) : ?>
                            <option value="<?= $office; ?>"><?= $office ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td>
                    <select id="employee-team">
                        <option value="">-- select --</option>
                        <?php foreach($teams as $team) : ?>
                            <option value="<?= $team; ?>"><?= $team; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td>
                    <?php foreach($subTeams as $index => $team) : ?>
                        <select class="job-position" id="<?= $index ?>">
                            <option value="">--select position --</option>
                            <?php foreach($team as $position) : ?>
                                <option value="<?= $position; ?>"><?= $position ?></option>
                            <?php endforeach; ?>
                        </select>
                    <?php endforeach; ?>
                </td>
            </tr>
            <?php for ($i = 0; $i < 421; $i++) : ?>
            <tr>
                <td class="employee-name">Team Member #<?= $i; ?></td>
                <td class="employee-email">team.m<?=$i;?>@mycompany.net</td>
                <td class="employee-office"><?= $offices[rand(0, count($offices) - 1)]; ?></td>
                <?php
                $teamIndex = rand(0, count($teams) -1);
                $team = $teams[$teamIndex];
                ?>
                <td class="employee-team"><?= $teams[$teamIndex]; ?></td>
                <td class="employee-position"><?= $subTeams[$team][rand(0, count($subTeams[$team]) - 1)]?></td>
                <td class="employee-actions">
                    <button type="button" class="edit">e</button>
                    <button type="button" class="delete">x</button>
                </td>
            </tr>
            <?php endfor; ?>
        </table>
    </div>
</div>

<div id="new-team-form" class="switchable-modal">
    <h3>New team in office <span class="office-placeholder"></span></h3>
    <form class="team-edit">
        <div class="form-wrapper">
            <label for="team-name">Name:</label>
            <input type="text" id="team-name" name="team-name">
        </div>
        <div class="form-wrapper">
            <textarea name="team-info"></textarea>
        </div>
        <button type="submit">Save</button>
        <button type="button" class="new">New employee</button>
        <button type="button" class="delete">Delete Team</button>
    </form>
</div>

<div id="new-office-form" class="switchable-modal">
    <h3>New office:</h3>
    <form id="office-new" action="#" method="post" class="office-edit-form">
        <input type="hidden" name="office-name">
        <div class="form-wrapper">
            <label for="office-name">Office Name:</label>
            <input type="text" name="office-name" id="office-name">
        </div>
        <div class="form-wrapper">
            <label for="office-country">Country:</label>
            <input type="text" name="office-country" id="office-country">
        </div>
        <div class="form-wrapper">
            <label for="office-city">City:</label>
            <input type="text" name="office-city" id="office-city">
        </div>
        <div class="form-wrapper">
            <label for="office-address">Address:</label>
            <input type="text" name="office-address" id="office-address">
        </div>
        <button type="submit">Save</button>
    </form>
</div>



<?php require_once 'footer.php'; ?>
