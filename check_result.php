<?php
session_start();
// Будем считать, что поле всегда заполненное и не проверяем :)

if((int)$_POST['number'] === $_SESSION['random_number']){
    $_SESSION['result'] = 'right';
}else{
    $_SESSION['result'] = 'not_right';
}
header('Location: /');