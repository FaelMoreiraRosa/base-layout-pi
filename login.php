<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=], initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Bazaar Old</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
</head>

<body>
  <?php
  require_once "cabecalho.php";
  ?>
<div class = "menu_login" style="justify-content: center; display: flex; align-items: center; height: auto; padding-top: 10%; padding-bottom: 10%">

<form method="post" action="processa_login.php"><ul>
    <li>
      <h1 style="color: #564031; justify-content: center; display: flex;">ㅤㅤIniciar sessãoㅤㅤㅤㅤ</h1>
  </li>
    <li>
      <label for="username">Usuário:</label>
      <input type="text" id="username" name="username" required placeholder=" digite seu e-mail" aria-label="Search" style="background-color: #ddccba; padding-right: 40%;"/>
    </li>
    <li><br></li>
     <li>
      <label for="password" style="padding-left: 10px;">Senha:</label>
      <input type="password" id="password" name="password" required placeholder=" digite sua senha" aria-label="Search" style="background-color: #ddccba; padding-right: 40%;"/>
      <input type="submit" value="login">
    </li>
  </ul>
</form>
</div>


  <?php
  require_once "rodape.php";
  ?>
</body>

</html>