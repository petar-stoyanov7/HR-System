$(document).ready(function(){
    var editButton = $('#edit-profile');
    var noteButton = $('#add-note-link');
    var leaveButton = $('#new-leave-button');

    var blackOverlay = $('#black-overlay');
    var editForm = $('#edit-user');
    var noteForm = $('#add-note');
    var leaveForm = $('#new-leave');
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

    leaveButton.click(function(e){
        e.preventDefault();
        blackOverlay.toggle();
        leaveForm.toggle();
    });

    $('section.past-leaves').click(function(){
        blackOverlay.toggle();
        leaveHistory.toggle();
    });

    /* Hide all on overlay click */
    blackOverlay.click(function(){
        editForm.hide();
        blackOverlay.hide();
        noteForm.hide();
        leaveForm.hide();
        leaveHistory.hide();
    });

});