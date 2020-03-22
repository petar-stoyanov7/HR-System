$(document).ready(function(){
    var editButton = $('#edit-profile');
    var noteButton = $('#add-note-link');

    var blackOverlay = $('#black-overlay');
    var editForm = $('#edit-user');
    var noteForm = $('#add-note');
    var leaveHistory = $('#leave-history');

    editButton.click(function(e){
        e.preventDefault();
        blackOverlay.toggle();
        editForm.toggle();
    });

    noteButton.click(function(e){
        e.preventDefault();
        blackOverlay.toggle();
        noteForm.toggle();
    });

    $('section.past-leaves').click(function(){
        blackOverlay.toggle();
        leaveHistory.toggle();
    });

    /* Hide all on overlay click */
    blackOverlay.click(function(){
        blackOverlay.hide();
        $('.switchable-modal').hide();
    });

});