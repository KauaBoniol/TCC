<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
	<meta name="description" content="">
	<meta name="keyword" content="">
	<meta name="author" content="Adriel,Cauã">
    <title>TCC</title>
    <link rel="stylesheet" href="../css/favoritos.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<div class="content">
<body bgcolor="fbe2c9">
    <header>
        
    <nav class="navbar">
            <img class="logo" src="..\imagens\sacolinha.png" alt="">
                <a href="index.php" >HOME</a>
                <a href="produtos.php" >PRODUTOS</a>
                <a href="#personalize" >PERSONALIZE</a>
                <a href="contato.php" >CONTATO</a>
                <a href="#sobrenós" >SOBRE NÓS </a>

              <ol>
                <li><a href="favoritos.php"><img class="favoritos" src="..\imagens\botao-curtir.png" alt=""></i></a></li>
                <li><a href="login.php"><img class="usuario" src="..\imagens\usuario.png" alt=""></i></a></li>
                <li><a href="produtos.php"><img class="compras" src="..\imagens\carrinho-de-compras.png" alt=""></i></a></li>
            </ol>
        </nav>
    </header>

    <main>
        <div class="faixa-verde">
            <div>
                <p class="destaq">CURTIDOS</p>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container">
            <div class="catalogo">
              <div class="produto">
                <img class="img" src="..\imagens\img1.jpeg" alt="Produto 1">
                <h2>Produto 1</h2>
                <p>Descrição do Produto 1.</p>
                <div class="opcoes">
                  <button>Adicionar aos Favoritos</button>
                  <button>Adicionar ao Carrinho</button>
                  <button>Visualizar Produto</button>
                </div>
              </div>

              <div class="produto">
                <img class="img" src="..\imagens\img2.jpeg" alt="Produto 2">
                <h2>Produto 2</h2>
                <p>Descrição do Produto 2.</p>
                <div class="opcoes">
                  <button>Adicionar aos Favoritos</button>
                  <button>Adicionar ao Carrinho</button>
                  <button>Visualizar Produto</button>
                </div>
              </div>

              <div class="produto">
                <img class="img" src="..\imagens\img3.jpeg" alt="Produto 3">
                <h2>Produto 3</h2>
                <p>Descrição do Produto 3.</p>
                <div class="opcoes">
                  <button>Adicionar aos Favoritos</button>
                  <button>Adicionar ao Carrinho</button>
                  <button>Visualizar Produto</button>
                </div>
              </div>

              <div class="produto">
                <img class="img" src="..\imagens\img4.jpeg" alt="Produto 4">
                <h2>Produto 4</h2>
                <p>Descrição do Produto 4.</p>
                <div class="opcoes">
                  <button>Adicionar aos Favoritos</button>
                  <button>Adicionar ao Carrinho</button>
                  <button>Visualizar Produto</button>
                </div>
              </div>

              <div class="produto">
                <img class="img" src="..\imagens\img5.jpeg" alt="Produto 5">
                <h2>Produto 5</h2>
                <p>Descrição do Produto 5.</p>
                <div class="opcoes">
                  <button>Adicionar aos Favoritos</button>
                  <button>Adicionar ao Carrinho</button>
                  <button>Visualizar Produto</button>
                </div>
              </div>
              <!-- Adicione mais produtos conforme necessário -->
            </div>
            <div class="controles">
              <button id="anterior"><img class="esquerda" src="..\imagens\esquerda.png" alt="Seta esquerda"></button>
              <button id="proximo"><img class="direita" src="..\imagens\direita.png" alt="Seta direita"></button>
            </div>
        </div>
          
          <script src="produtos.js"></script> <!-- Importa o arquivo JavaScript -->

          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        <footer>
            <div class="rodape">
                  <div class="coluna">
                    <div class="item">Minha Conta</div>
                    <div class="item">Termos de Serviço</div>
                    <div class="item">Política de Privacidade</div>
                    <div class="item">Pedidos</div>
                    <div class="item">FAQ</div>
                  </div>
                  <div class="coluna">
                    <div class="item">Tire suas Dúvidas</div>
                    <div class="item">Formas de Pagamento</div>
                    <div class="item">Contato</div>
                    <div class="item">Suporte</div>
                    <div class="item">Feedback</div>
                  </div>
                  <div class="coluna">
                    <div class="item">Sobre Nós</div>
                    <div class="item">Quem somos</div>
                    <div class="item">Privacidade e Segurança</div>
                    <div class="item">Localização</div>
                    <div class="item">Parcerias</div>
                  </div>
            </div>
        </footer>
          </body>
          </html>