<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Игра угадай число</title>
</head>
<body>
<p><?=$text_for_user;?></p>
<?php if($show_form): ?>
<form action="/check_result.php" method="POST">
    <input type="text" required placeholder="Укажите число" name="number"><br><br>
    <button>Отправить</button>
</form>
<?php else: ?>
    <a href="/">Начать игру заново</a>
<?php endif; ?>
</body>
</html>