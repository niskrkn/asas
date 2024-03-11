<?php
// Заранее заданные логин и пароль
$correct_username = "user";
$correct_password = "password";

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем введенные пользователем логин и пароль
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    // Проверяем совпадение введенных данных с заранее заданными
    if ($entered_username === $correct_username && $entered_password === $correct_password) {
        echo "Добро пожаловать, $correct_username!";
    } else {
        echo "Ошибка входа. Пожалуйста, проверьте введенные данные.";
    }
}
?>