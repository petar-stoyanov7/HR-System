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