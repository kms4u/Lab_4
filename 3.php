<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['text'])) {
    $text = $_POST['text'];
    preg_match_all('/\b\w+\s+\w+\b/', $text, $matches);
    $count = count($matches[0]);
    echo "Количество слов с пробелами внутри: " . $count;
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Анализатор текста</title>
</head>
<body>
    <h2>Анализатор текста</h2>
    <form id="textForm" method="post">
        <textarea name="text" rows="5" cols="50" placeholder="Введите текст для анализа"></textarea><br>
        <button type="button" onclick="analyzeText()">Анализировать текст</button>
    </form>
    <div id="result"></div>

    <script>
        function analyzeText() {
            const form = document.getElementById('textForm');
            const formData = new FormData(form);
            const resultDiv = document.getElementById('result');
            
            fetch('', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                resultDiv.innerHTML = data;
            })
            .catch(error => {
                resultDiv.innerHTML = 'Ошибка: ' + error;
            });
        }
    </script>
</body>
</html>