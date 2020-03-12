$(document).ready(function(){
    userForm = $('#edit-user-form');
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
        var inputs = $('#edit-user-form input');
        inputs.each(function(index, currentElement){
            if (
                $(currentElement).val() === '' &&
                $(currentElement).attr('id') !== 'religion' &&
                $(currentElement).attr('id') !== 'orientation'
            ) {
                e.preventDefault();
                var parentDiv = $(currentElement).closest('div.wrapper');
                var span = $('<span class="popup"></span>').text('The field can\'t be empty!');
                parentDiv.prepend(span);
            }
        })
    });
});