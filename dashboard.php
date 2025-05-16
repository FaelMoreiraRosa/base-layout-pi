<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Deu certo</h1>
</body>
</html>

<?php
session_start();

// Se a sessão não estiver ativa, redireciona para a página de login
if (!isset($_SESSION['user_id'])) {
  header('Location: index.php');
  exit();
}

// Caso contrário, você pode acessar as páginas restritas
?>