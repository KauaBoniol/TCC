<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>
    <link rel="stylesheet" href="../css/Painel/login.css">
</head>
<body>
    <div class="box-login">
        <?php
        include('../classes/conexao_BD.php');
        
       if(isset($_POST['acao'])){
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            $sql = mysql::conectar()->prepare("SELECT * FROM `admin_usuarios` WHERE usuario = :usuario AND senha = :senha");
            $sql->execute(array(':usuario' => $usuario,':senha'=> $senha));
        if($sql->rowcount() == 1){
            //login realizado com sucesso
            $info = $sql->fetch();
            $_SESSION['login'] = true;
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            $_SESSION['cargo'] = $info['cargo'];
            $_SESSION['nome'] = $nome;
            header('location: index.php');
        }    
        else{
            echo '<div class="Erro">Usuario ou senha incorreta</div>';
        }
       }
        ?>

        <form action="" method="POST">
            <input type="text" name="usuario" placeholder="Login" required> 
            <input type="password" name="senha" placeholder="Senha" require> <br>
            <input type="submit" name="acao" value="Logar">
            

        </form>

    </div>
    
</body>
</html>