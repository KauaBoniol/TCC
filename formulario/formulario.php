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
    <link rel="stylesheet" href="./formulario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<div class="content">
<body bgcolor="fbe2c9">
    <header>
        
        <nav class="navbar">
            <img class="logo" src="..\imagens\sacolinha.png" alt="">
                <a href="#home" >HOME</a>
                <a href="#produtos" >PRODUTOS</a>
                <a href="#personalize" >PERSONALIZE</a>
                <a href="#contato" >CONTATO</a>
                <a href="#sobrenós" >SOBRE NÓS </a>

            <ol>
                <li><img class="favoritos" src="..\imagens\botao-curtir.png" alt=""></i></a></li>
                <li><img class="usuario" src="..\imagens\usuario.png" alt=""></i></a></li>
                <li><img class="compras" src="..\imagens\carrinho-de-compras.png" alt=""></i></a></li>
            </ol>
        </nav>
    </header>

    <main>
        <div class="faixa-verde">
            <div>
                <p class="destaq">CRIE SUA CONTA ECOLIFE</p>
            </div>
        </div>

        <br>
        <br>

        <div class="container">
            <div class="login-box">
                <h2 align="center">Cadastre-se</h2>
                <form action="./confFormulario.php" method="post" class="form-grid">
                    <div class="form-column">
                        <label for="nome">Nome Completo:</label>
                        <input type="text" id="nome" name="nome" required>
        
                        <label for="cpf">CPF:</label>
                        <input type="text" maxlength="14" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="Ex: 123.456.789-10" required>
        
                        <label for="data_nascimento">Data de Nascimento:</label>
                        <input type="date" id="data_nascimento" name="data_nascimento"  required>
        
                        <label for="sexo">Sexo:</label>
                        <select id="sexo" name="sexo">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outro">Outro</option>
                        </select>
        
                        <label for="cep">CEP:</label>
                        <input type="text" id="cep" name="cep" pattern="\d{5}-\d{3}" maxlength="9" placeholder="Ex: 12345-678" required>
                    </div>
                    <div class="form-column">
                        <label for="endereco">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" required>
        
                        <label for="numero_residencia">Número da Residência:</label>
                        <input type="text" id="numero_residencia" name="numero_residencia" required>
        
                        <label for="telefone">Telefone Celular:</label>
                        <input type="int" id="telefone" name="telefone" maxlength="14"      placeholder="Ex: (12) 12345-6789" required>
                        
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required>
        
                        <label for="password">Senha:</label>
                        <input type="password" id="senha" name="senha" required>

                        <input type="submit" id="submit" name="submit" value="Criar conta">
                    </div>
                    
                </form>
                <hr>
                <br>
                
            </div>
        </div>
    </main>

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