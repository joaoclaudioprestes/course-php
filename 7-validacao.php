<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $senha = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

  // Array de erros
  $erros = [];

  // Validação dos dados
  if (empty($nome)) {
    $erros[] = "Nome é obrigatório.";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = "Email inválido.";
  }

  if (empty($senha)) {
    $erros[] = "Senha é obrigatória.";
  }

  if (empty($erros)) {
    // Aqui você pode adicionar código para inserir os dados no banco de dados
    echo "<p>Nome: $nome </p>";
    echo "<p>Email: $email </p>";
    echo "<p>Senha: $senha </p>";
  } else {
    foreach ($erros as $erro) {
      echo "<p style='color: red;'>$erro</p>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuário</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    form {
      background-color: #fff;
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="password"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #4caf50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <form action="/submit" method="POST">
    <h2>Cadastro de Usuário</h2>
    <label for="username">Nome de usuário:</label>
    <input type="text" id="username" name="username" class="nome" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" class="email" required>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" class="senha" required>

    <input type="submit" value="Cadastrar" name="btn_cadastrar" class="btn_cadastrar">
  </form>
</body>

</html>