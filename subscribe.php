<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['EMAIL'])) {
    $email = $_POST['EMAIL'];

    // Подключение к базе данных
    $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
    
    // Вставка данных в таблицу subscriptions, избегая дублирования
    $stmt = $pdo->prepare("INSERT IGNORE INTO subscriptions (email) VALUES (?)");
    $stmt->execute([$email]);

    // Отправка письма
    $subject = "Спасибо за подписку!";
    $message = "Спасибо, что подписались на нашу рассылку. Вы будете получать самые свежие предложения!";
    mail($email, $subject, $message);

    // Показ сообщения об успешной подписке
    echo "Вы успешно подписаны на рассылку!";
}
?>
