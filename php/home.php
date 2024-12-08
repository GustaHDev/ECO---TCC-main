<?php
session_start();
$userName = $_SESSION["name"];
$userPicture = $_SESSION["picture"]
  ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">

  <title>Página inicial</title>
</head>

<!-- --------------------------------------------------------------------------
                                   MENU 
------------------------------------------------------------------------------- -->

<header>

  <nav>

    <ul>
      <li>
        <div class="logo">
          <button class="tab-btn active" content-id="home">
            <img src="../imagens/menu/jungle-logo 2.png" alt="Jungle-logo">
          </button>
        </div>
      </li>
      <li><button class="tab-btn forum" content-id="forum">FÓRUM</button></li>
      <li><?php print_r("<p class = 'userName'> $userName </p>") ?></li>
      <li>
        <?php print_r("<img class='userPicture' src='$userPicture'/>") ?>
      </li>
    </ul>

  </nav>

</header>

<body>

  <!-- --------------------------------------------------------------------------
                                  CONTEUDO
------------------------------------------------------------------------------- -->

  <div class="tab-content fade">

    <!-- --------------------------------------------------------------------------
                                    HOME 
  ------------------------------------------------------------------------------- -->
  <div class="content" id="home">
      <div class="parallax" id="image-1">
      </div>
      <div class="conteudo">
        <p>
          Adentre agora mesmo neste mundo de aventuras em busca da restauração do planeta!
          <a href="https://junglebr.itch.io/eco">Clique aqui para jogar!</a>
        </p>
      </div>
      <div class="parallax" id="image-2">
      </div>
      <div class="conteudo">
        <p>
          Os Ecos da Terra te esperam! Resolva enigmas e os ajude a transformar o mundo!
          <a href="https://junglebr.itch.io/eco">Clique aqui e comece a jogar!</a>
        </p>
      </div>
      <div class="parallax" id="image-3">
        <div class="content-title">
          <a href="https://junglebr.itch.io/eco"><span class="title">Jogue agora mesmo!</span></a>
        </div>
      </div>
    </div>



    <!-- --------------------------------------------------------------------------
    FÓRUM 
    ------------------------------------------------------------------------------- -->

    <div class="content" id="forum">
      <div class="forum-content">

        <div class="addNewPost">
          <button class="newPost" onclick="window.location.href='forum.php'">Publicar</button>
        </div>

        <div class="post">
          <?php
          include "config.php";
          // Selecionar todas as mensagens
          $sql = "SELECT m.*, u.name, u.picture FROM posts m JOIN users u ON m.user_id = u.id ORDER BY id DESC";
          $result = $mysqli->query($sql);

          while ($row = $result->fetch_assoc()) {
            echo "<div style='margin: 20px; border: 2px solid #B0D2C7; padding: 5px'>";
            echo "<p class='userName' style='width: 75%; position: relative;'>Publicado por: " . $row['name'] . "</p>";
            echo "<img class='userPicture' style = 'position: relative; top: -80px; left: 80%' src='" . $row['picture'] . "' alt='Foto de perfil'>";
            echo "<div style = 'background-color: #ccc;'>";
            echo "<h2 id='postTitle'>" . $row['title'] . "</h2>";
            echo "<p id='postContent'>" . $row['content'] . "</p>";
            echo "</div>";
            echo "</div>";
          }
          ?>
        </div>

      </div>
    </div>


    <!-- --------------------------------------------------------------------------
                                        LOGIN
      ------------------------------------------------------------------------------- -->


    <div id="modal" class="hide">
      <div class="modal-header">
        <h2>Faça seu login</h2>
        <button id="close-modal">X</button>
      </div>
      <div class="modal-body">
        <form action="php/login.php" method="POST" value="">

          <div class="input-box">
            <input type="email" name="email" id="email" placeholder="digite seu email" required>
          </div>

          <div class="input-box">
            <input type="password" name="password" id="password" placeholder="digite sua senha" required>
          </div>

          <div class="continue-button">
            <button type="submit" name="submit">Entrar</button>
          </div>
          <div class="link-cadastro">
            <span>Ou caso você ainda não tenha um cadastro: <a href="php/cadastro.php">Clique aqui!</a></span>
          </div>
        </form>
      </div>
    </div>


  </div>

  <div class="rodape">
    <div id="rodape">
      <a href="about.php">Sobre | </a>
      <a href="contact.php">Contato</a>
    </div>
  </div>

  <script src="../js/javascript.js"></script>
</body>

</html>