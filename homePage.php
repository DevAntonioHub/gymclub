<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/homePage.css">
  <script type="text/javascript" src="js/homePage.js" async></script>
  <link rel="stylesheet" href="css/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="icon" href="css/favIconHouse.svg">
  <title>HOMEPAGE</title>
</head>

<body>
  <header>
    <div class="logo">
      <img class="logo-img" src="css/imagens/logoIndex.png" alt="Logo">
    </div>
    <div class="frase">
      <h1 class="frase-h1">Qual sua meta?</h1>
    </div>
    <div class="cart-shopping" onclick="openCart()">
      <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></i>
    </div>
    <div class="account"><i class="fa-regular fa-circle-user"style="color: #ffffff;" onclick="openAccount()"></i>
    </div>
    <div class="nav-right" onclick="openSideMenu()">
      <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
    </div>
  </header>

  <div class="side-menu-container" id="sideMenuContainer">
    <div class="side-menu">
      <div class="side-menu-buttons">
        <button onclick="finalizarMenu()" class="btnCloseNav"><i class="fa-solid fa-x" style="color: #000000;"></i></button>
      </div>
      <div class="side-menu-header">
        <h2>Menu Lateral</h2>
      </div>
      <div class="side-menu-content">
        <div class="menu-header">
            <ul>
                <li><a href="review.php">Avalie o site</a></li>
                <li><a href="https://github.com/antonio221kk" target="_blank">GitHub</a></li>
            </ul>
      </div>
      </div>

    </div>
  </div>
  <!-- Shopping car -->
  <div class="cart-container">
    <div class="cart">
      <div class="cart-header">
        <h2>Carrinho</h2>
        <span class="close-cart" onclick="closeCart()">&times;</span>
      </div>
      <div class="cart-content">
        <!-- Conteúdo do carrinho vai aqui -->
      </div>
      <div class="cart-total">

      </div>
      <div class="cart-buttons">
        <button onclick="finalizar()" class="finalizarCompra">Finalizar Compra</button>
      </div>
    </div>
  </div>

  <section class="org">

    <div class="box">
      <p class="p-treino">Treino Inicial Gym Club</p>
      <a href="api/treinoinicial.pdf" target="_blank" class="btn-treino">Treino inicial!</a>
    </div>

    <div class="box-text">
      <p class="p-treino">Desenvolvemos um treino inicial abrangente para novos alunos.
        Para uma experiência ainda mais especial e individualizada,
        consulte um personal de sua confiança.
      </p>
    </div>
  </section>

  <section class="loja">
    <div class="h1-loja">
      <h1>Loja Gym Club</h1>
    </div>
    <div class="search-products">
      <input type="text" placeholder="Pesquisar produto..." name="pesquisarProdutos" id="pesquisar">
    </div>
    <div class="container">

    </div>
  </section>

  <footer>

    <h2>Redes profissionais</h2>
    <a href="https://github.com/Antonio221kk" target="_blank"><i class="fa-brands fa-github" style="color: white;"></i></a> <a href="https://www.linkedin.com/in/antoniomsouza2/" target="_blank"><i class="fa-brands fa-linkedin" style="color: #1226bf;"></i></a>
    <p class="p-footer">Obrigado por nos visitar! Antônio M. Souza - 2023</p>
  </footer>
</body>
</body>

</html>