<?php
session_start();

$_SESSION['random_number'] = rand(1,10);
if(empty($_SESSION['result'])){
    $text_for_user = 'Я загадал число от 1-го до 10-ти, попробуй угадать';
    $show_form = true;
}elseif ($_SESSION['result'] === 'not_right'){
    $text_for_user = 'Ты не угадал, попробуй ещё';
    $show_form = true;
}elseif ($_SESSION['result'] === 'right'){
    $text_for_user = 'Молодец, ты выиграл!';
    $show_form = false;
    unset($_SESSION['result']);
}
include('template.php');