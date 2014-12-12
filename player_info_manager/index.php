<?php
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if(empty($action)) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}
if(empty($action)) {
    $action = 'player_info_manager';
}

switch ($action) :
    case 'home':
        header ('Location: ../index.php');
        break;
    case 'stats':
        include '../player_info_manager/get_stats.php';
        break;
    case 'news':
        include '../player_info_manager/league_news.php';
        break;
    case 'player_info_manager':
        include './player_info_page.php';
        break;

endswitch;
