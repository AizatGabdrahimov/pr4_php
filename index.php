<?php
require_once 'cmp/cookie.php';

$cookie = new Cookie();

if (isset($_POST['type'])) {
    $cookie->setType($_POST['type']);
}

$type = $cookie->getType();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Печеньки</h1>

        <div class="cookie-card">
            <h2>Тип печенья: <span id="cookie-type"><?= htmlspecialchars($type) ?></span></h2>
            <form method="POST" action="index.php">
                <input type="text" name="type" placeholder="Введите тип печенья" required>
                <button type="submit">Проверить</button>
            </form>
        </div>
    </div>
</body>

</html>