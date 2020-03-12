$(document).ready(function(){
    var blackOverlay = $('#black-overlay');
    var historyModal = $('#history-modal');

    $('aside.company-history').click(function(){
        blackOverlay.toggle();
        historyModal.toggle();
    });

    blackOverlay.click(function(){
        blackOverlay.hide();
        historyModal.hide();
    });
});