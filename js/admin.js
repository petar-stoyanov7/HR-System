var drawTeams = function(data){
    var teamForm = $('#new-team-form form.team-edit');
    var container = $('#teams-container');
    $.each(data, function(index, value){
        var formCopy = teamForm.clone();
        var hiddenInput = $('<input>')
            .attr('type', 'hidden')
            .attr('name', 'team-name')
            .val(value)
            .appendTo(formCopy);
        formCopy.find('input[name=team-name]')
            .prop('id', 'office-name-'+index)
            .val(value);
        formCopy.find('textarea[name=team-info]')
            .val('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut exercitationem praesentium vitae voluptatum? Adipisci alias aliquam dolore ea eaque error explicabo fuga laborum maxime, neque nihil nostrum, odio recusandae reiciendis.');
        formCopy.find('button').attr('team-name', value);
        container.append(formCopy);
    });
};

var searchEmployees = function(search, hiddenClass, cellClass) {
    var searchString = search.toLowerCase();
    $('#employees-table tr.' + hiddenClass)
        .show()
        .removeClass(hiddenClass);
    $('#employees-table tr:visible td.' + cellClass).each(function(index, value){
        if ($(value).text().toLowerCase().indexOf(searchString) === -1 ) {
            $(value).closest('tr')
                .addClass(hiddenClass)
                .hide();
        }
    });
}

var generateOfficeData = function(office) {
    var data;
    $.ajax({
        url: 'admin.php',
        type: JSON,
        method: 'post',
        data: {
            'office-name': office
        },
        success: function(response) {
            console.log(response);
            data = JSON.parse(response);
        }
    }).done(function(){
        drawTeams(data);
    });
};

$(function(){
    var editUserForm = $('#edit-user');
    var blackOverlay = $('#black-overlay');

    $('form.office-edit-form button.new').click(function(){
        var office = $(this).closest('form.office-edit-form')
            .find('input[type=hidden]').val();
        blackOverlay.toggle();
        editUserForm.toggle();
        editUserForm.find('input').val('');
        editUserForm.find('select#office').val(office);
    });

    $('form.office-edit-form button.delete').click(function(){
        var parentForm = $(this).closest('form.office-edit-form');
        var office = parentForm.find('input[type=hidden]').val();
        if (confirm('Are you sure you want to delete office ' + office + '?')) {
            parentForm.hide();
            alert('Office ' + office + ' was removed!');
        }
    });

    $('#teams-container').on('click', 'form.team-edit button.new',function() {
        var office = $('#company-offices').val();
        editUserForm.find('input').val('');
        editUserForm.find('select#office').val(office);
        blackOverlay.toggle();
        editUserForm.toggle();
    });

    $('#teams-container').on('click', 'form.team-edit button.delete',function(e) {
        var parentForm = $(e.target).closest('form.team-edit');
        var team = parentForm.find('input[type=hidden]').val();
        if (confirm('Are you sure you want to delete team' + team + '?')) {
            parentForm.hide();
        }
    });

    $('#new-office').click(function(){
        blackOverlay.toggle();
        $('#new-office-form').toggle();
    });

    $('#new-team').click(function(){
        var office = $(this).attr('office-name');
        $('#new-team-form span.office-placeholder').text(office);
        blackOverlay.toggle();
        $('#new-team-form').toggle();
    });

    $('#company-offices').change(function(){
        $('#teams-container').html('');
        var office = $(this).val();
        generateOfficeData(office);
        $('#new-team').toggle().attr('office-name', office);
    });

    $('#employees-search').on('input', function(){
        var searchString = $(this).val();
        searchEmployees(searchString, 'nameHidden', 'employee-name');
    });

    $('#employee-office').change(function(){
        var searchString = $(this).val();
        searchEmployees(searchString, 'officeHidden', 'employee-office');
    });

    $('#employee-team').change(function(){
        var searchString = $(this).val();
        $('select.job-position').hide();
        $('select#' + searchString).show();

        searchEmployees(searchString, 'teamHidden', 'employee-team');
    });

    $('select.job-position').change(function(){
        var searchString = $(this).val();
        searchEmployees(searchString, 'positionHidden', 'employee-position')
    });



});