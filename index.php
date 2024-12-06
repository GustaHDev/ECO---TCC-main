<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">

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
            <img src="imagens/menu/jungle-logo 2.png" alt="Jungle-logo">
          </button>
        </div>
      </li>
      <li><button class="tab-btn forum" content-id="forum">FÓRUM</button></li>
      <li><button id="login">LOGIN</button></li>
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
          <a href="">Clique aqui para baixar!</a>
        </p>
      </div>
      <div class="parallax" id="image-2">
      </div>
      <div class="conteudo">
        <p>
          Os Ecos da Terra te esperam! Resolva enigmas e os ajude a transformar o mundo!
          <a href="">Baixe agora e comece a jogar!</a>
        </p>
      </div>
      <div class="parallax" id="image-3">
        <div class="content-title">
          <span class="title">Baixe agora mesmo!</span>
        </div>
      </div>
    </div>



    <!-- --------------------------------------------------------------------------
    FÓRUM 
    ------------------------------------------------------------------------------- -->

    <div class="content" id="forum">

      <div class="forum-content">
        <h1 style="color: #fff">você precisa estar logado para acessar o fórum!</h1>
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
  <footer style="clear: both;">
    <div class="rodape" style="clear: both">
      <div id="rodape">
        <a href="php/about.php">Sobre | </a>
        <a href="php/contact.php">Contato</a>
      </div>
    </div>
  </footer>
  <script src="js/javascript.js"></script>
</body>

</html>