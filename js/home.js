$(document).ready(function(){
    var birthdaysContainer = $('#birthdays-list');
    var transparentOverlay = $('#transparent-overlay');
    $('article.birthdays').click(function(){
        transparentOverlay.toggle();
        birthdaysContainer.toggle();
    });

    transparentOverlay.click(function(){
        transparentOverlay.hide();
        birthdaysContainer.hide();
    });
});