var approveApplication = function(target, isLeave) {
    if (undefined === isLeave || isLeave) {
        var applicationContainer = $(target).closest('div.leave-application');
    } else if (!isLeave) {
        var applicationContainer = $(target).closest('article.pending-broadcast');
    }

    applicationContainer.css('background-color', 'green');
    applicationContainer.hide(300);
};

var denyApplication = function(target, isLeave) {
    if (undefined === isLeave || isLeave) {
        var applicationContainer = $(target).closest('div.leave-application');
    } else if (!isLeave) {
        var applicationContainer = $(target).closest('article.pending-broadcast');
    }
    applicationContainer.css('background-color', 'red');
    applicationContainer.hide(300);
};

$(document).ready(function(e){
    $('span.application-tools a.approve').click(function(e){
        approveApplication(e.currentTarget);
    });
    $('span.application-tools a.deny').click(function(e){
        denyApplication(e.currentTarget);
    });
    $('span.message-tools a.approve').click(function(e){
        approveApplication(e.currentTarget, false);
    });
    $('span.message-tools a.deny').click(function(e){
        denyApplication(e.currentTarget, false);
    });

    $('#search-leave-requests').on('input', function(){
        searchContents(
            $(this),
            'span.application-person',
            'div.leave-application'
        );
    });

    $('#search-message-requests').on('input', function(){
        searchContents(
            $(this),
            'article.pending-broadcast',
            'article.pending-broadcast'
        )
    });
});