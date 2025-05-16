<?php
session_start();

$username = $_POST['rafael'];
$password = $_POST['1234'];

// Aqui você verifica as credenciais no seu banco de dados
// e se o usuário existir e a senha for válida.

// Se o usuário e senha forem válidos, você inicia a sessão:
if ($userExists && $senhaValida) {
  $_SESSION['user_id'] = $user_id;  // Armazena o ID do usuário na sessão
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password; // Armazena o nome do usuário na sessão
  header('Location: dashboard.php'); // Redireciona para a página de painel do usuário
  exit();
} else {
  // Se as credenciais forem inválidas, retorna para a página de login
  // com uma mensagem de erro.
  header('Location: index.php?error=1');
  exit();
}
?>