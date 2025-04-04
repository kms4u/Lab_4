<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['event_name'] = $_POST['event_name'];
    $_SESSION['event_date'] = $_POST['event_date'];
    $_SESSION['event_location'] = $_POST['event_location'];
    header('Location: display.php');
    exit;
}
?>

<form method="post">
    Название события: <input type="text" name="event_name"><br>
    Дата события: <input type="date" name="event_date"><br>
    Место проведения: <input type="text" name="event_location"><br>
    <input type="submit" value="Сохранить">
</form>