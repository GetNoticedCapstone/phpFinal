<?php
require '../model/FFwebService.php';
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
       $football_Info = WebService::getFootballInfo('get_stats', 'player', '');
        include '../player_info_manager/get_stats.php';
        break;
    case 'news':
       $football_Info = WebService::getFootballInfo('league_news', 'schedule', '');  
        include '../player_info_manager/league_news.php';
        break;
    case 'player_info_manager':
        include './player_info_page.php';
        break;

endswitch;
