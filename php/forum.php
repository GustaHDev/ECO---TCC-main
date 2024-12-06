<?php
include "config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $content = $_POST['content'];
  $userId = $_SESSION['id']; // Assumindo que o ID do usuário está em uma sessão

  // Inserir a mensagem
  $sql = "INSERT INTO posts (title, content, user_id) VALUES ('$title', '$content', $userId)";
  if ($mysqli->query($sql) === TRUE) {
    print_r("<script>alert('Mensagem publicada com sucesso!')</script");
  } else {
    print_r("<script>alert('Erro ao publicar mensagem!')</script");
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fórum</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/cadastro.css">
</head>

<body>
<button class="voltar" onclick="window.location.href='home.php'">Voltar</button>
  <form action="forum.php" method="POST">
    <h1> Escreva uma mensagem </h1>

    <div class="mb-3">
      <label class="form-label">Título: </label>
      <input type="text" id="title" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Mensagem: </label>
      <textarea class="form-control" id="content" name="content" style="height: 100px;" required></textarea>
    </div>

    <div class="mb-3">
      <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </form>

  <script src="../bootstrap/js/bootstrap.min.js-"></script>
</body>

</html>