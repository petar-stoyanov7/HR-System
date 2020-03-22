$(document).ready(function(){
    var blackOverlay = $('#black-overlay');
    var companyOverlay = $('#company-overlay');

    var historyModal = $('#history-modal');
    var officeModal = $('#office-details');
    var officeTeamModal = $('#office-team-modal');

    $('aside.company-history').click(function(){
        blackOverlay.toggle();
        historyModal.toggle();
    });

    blackOverlay.click(function(){
        blackOverlay.hide();
        officeModal.hide();
        $('.switchable-modal').hide();
    });

    companyOverlay.click(function(){
        companyOverlay.hide();
        officeTeamModal.hide();
    });

    $('article.office').click(function(){
        blackOverlay.toggle();
        officeModal.toggle();
    });

    $('article.team').click(function(){
        companyOverlay.toggle();
        officeTeamModal.toggle();
    });

    $('#search-employees').on('input', function(){
        searchContents(
            $(this),
            'article.team-member',
            'article.team-member'
        )
    });
});