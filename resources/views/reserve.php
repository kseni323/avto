<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'], $_POST['email'])) {
    // Данные для бронирования
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pickup_location = $_POST['pickup_location'];
    $return_location = $_POST['return_location'];
    $pickup_date = $_POST['pickup_date'];
    $return_date = $_POST['return_date'];

    // Подключение к базе данных
    $pdo = new PDO('mysql:host=localhost;dbname=drivegal_avto', 'root', '');
    
    // Вставка данных в таблицу reservations
    $stmt = $pdo->prepare("INSERT INTO reservations (name, email, pickup_location, return_location, pickup_date, return_date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $pickup_location, $return_location, $pickup_date, $return_date]);

    // Отправка письма
    $subject = "Ваше бронирование подтверждено";
    $message = "Здравствуйте $name,\n\nВаше бронирование подтверждено. Для оплаты перейдите по следующей ссылке: https://example.com/payment.\n\nСпасибо!";
    mail($email, $subject, $message);

    // Показ сообщения об успешной отправке
    echo "Бронирование подтверждено. Проверьте почту для дальнейших инструкций.";
}
?>