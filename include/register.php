<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Здесь должна быть ваша логика для регистрации нового пользователя

    // Проверка на совпадение паролей
    if ($password !== $confirmPassword) {
       header("Location: register.html?error=password_mismatch");
         exit();
    }
    //Для примера просто выводим данные
    echo "Регистрация прошла успешно!<br>";
    echo "nickname: " . $nickname . "<br>";

    header("Location: dashboard.php");
   exit();

} else {
    // Если кто-то пытается зайти на страницу register.php напрямую, перенаправляем на главную
   header("Location: register.html");
   exit();
}
?>
