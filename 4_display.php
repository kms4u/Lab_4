<?php
session_start();
if (!isset($_SESSION['event_name'])) {
    header('Location: form.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о событии</title>
</head>
<body>
    <h1>Информация о событии</h1>
    <p>Название: <?php echo htmlspecialchars($_SESSION['event_name']); ?></p>
    <p>Дата: <?php echo htmlspecialchars($_SESSION['event_date']); ?></p>
    <p>Место проведения: <?php echo htmlspecialchars($_SESSION['event_location']); ?></p>
</body>
</html>
