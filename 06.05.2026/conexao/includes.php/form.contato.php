<?php
require_once "config.inc.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["salvar"])) {
    $nome = trim($_POST["nome"] ?? '');
    $email = trim($_POST["email"] ?? '');

    $stmt = $pdo->prepare('INSERT INTO contato (nome,email) VALUES (:nome,:email)');
    $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
    ]);

    header("Location: ./");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Nome</label>
            <input type="text" name="nome" required>

            <br>

            <label>Email</label>
            <input type="text" name="email" required>

            <br>

    <input type="submit" name="salvar" value="1">
    </form>
</body>
</html>