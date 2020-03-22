let displayMessageForm = function() {
    $('#black-overlay').toggle();
    $('#new-message').toggle();
};

let displayLeaveForm = function() {
    $('#black-overlay').toggle();
    $('#new-leave').toggle();
};

let hideAllModals = function() {
    $('#black-overlay').hide();
    $('.switchable-modal').hide();
};

let searchContents = function(inputSelector, contentSelector, contentWrapperSelector) {
    $(contentWrapperSelector).show();
    let searchString = inputSelector.val().toLowerCase();
    $(contentSelector).each(function(index, value){
        if ($(value).text().toLowerCase().indexOf(searchString) === -1 ) {
            $(value).closest(contentWrapperSelector).hide();
        }
    });
};

$(document).ready(function(){
    let blackOverlay = $('#black-overlay');
    let userForm = $('#edit-user-form');
    $('#marial-status').change(function(){
        if ($(this).children('option:selected').val() === 'married') {
            $('#spouse').prop('disabled', false);
        } else {
            $('#spouse').val('');
            $('#spouse').prop('disabled', true);
        }
    });
    userForm.on('submit', function(e){
        $('#edit-user-form span.popup').remove();
        let inputs = $('#edit-user-form input');
        inputs.each(function(index, currentElement){
            if (
                $(currentElement).val() === '' &&
                $(currentElement).attr('id') !== 'religion' &&
                $(currentElement).attr('id') !== 'orientation'
            ) {
                e.preventDefault();
                let parentDiv = $(currentElement).closest('div.wrapper');
                let span = $('<span class="popup"></span>').text('The field can\'t be empty!');
                parentDiv.prepend(span);
            }
        })
    });

    $('#office').on('change', function(){
        $('div.rooms-wrapper').hide();
        $('#wrapper-' + $(this).val()).show();
    });

    $('a.new-message-link').click(function(e){
        e.preventDefault();
        displayMessageForm();
    });

    $('a.new-leave-link').click(function(e){
        e.preventDefault();
        displayLeaveForm();
    });

    $('#black-overlay').click(hideAllModals);
});