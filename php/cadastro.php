<?php
include_once 'config.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $picture = $_FILES['picture'];

  if($picture['error']){
    die('Falha ao enviar arquivo');
  }

  if($picture['size'] > 2097152){
    die('Arquivo muito grande! Tente utilizar um menor.');
  }

  $folder = "../archives/";
  $pictureName = $picture["name"];
  $newPictureName = uniqid();
  $extensao = strtolower(pathinfo($pictureName,PATHINFO_EXTENSION));
  $path = $folder . $newPictureName . "." . $extensao;

  if($extensao !="jpg" && $extensao != "png")
  {
    die("Arquivo inválido! Por favor, procure um arquivo válido (png ou jpg)");
  }

  $deu_certo = move_uploaded_file($picture["tmp_name"], $path);

  if($deu_certo){
  $sql = "INSERT INTO users (name, email, password, picture) VALUES ('{$name}', '{$email}', '{$password}', '{$path}')";
  }else{
    echo "Falha ao enviar arquivo";
  }

  $result = $mysqli->query($sql);

  if ($result == true) {
    print_r("<script>alert('cadastrado com sucesso');
    window.location.href = '../index.php'
    </script>");
  } else {
    print_r("<script>alert('não foi possível efetuar o cadastro');</script>");
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/cadastro.css">
</head>

<body>

<button class="voltar" onclick="window.location.href='../index.php'">Voltar</button>
  <form enctype="multipart/form-data" action="cadastro.php" method="POST">
    <h1> Cadastro </h1>

    <div class="mb-3">
      <label class="form-label">Nome: </label>
      <input type="text" id="name" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">E-mail: </label>
      <input type="text" id="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Senha: </label>
      <input type="password" id="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Foto de perfil: </label>
      <input type="file" id="picture" name="picture" accept="image/png, image/jpeg" class="form-control" id="inputGroupFile01">
    </div>

    <div class="mb-3">
      <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </form>

  <script src="../bootstrap/js/bootstrap.min.js-"></script>
</body>

</html>