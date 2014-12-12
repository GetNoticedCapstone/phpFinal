<?php
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if(empty($action)) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}
if(empty($action)) {
    $action = 'about';
}

switch ($action) :
    case 'home':
        header ('Location: ../index.php');
        break;
    case 'about':
    include './about_page.php';
    break;
endswitch;