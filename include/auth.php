<?php
// Здесь должна быть ваша логика для проверки логина и пароля
// Для примера, используем жестко заданные данные
$users = [
  'admin' => 'password123',
  'testuser' => '123456',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        // Аутентификация успешна, перенаправляем на страницу приветствия
        header("Location: dashboard.php");
        exit();
    } else {
        // Неверные данные, перенаправляем обратно с ошибкой
        header("Location: index.html?error=invalid_credentials");
        exit();
    }
} else {
    // Если кто-то пытается зайти на страницу auth.php напрямую, перенаправляем на главную
   header("Location: index.html");
   exit();
}
?>
