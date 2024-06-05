<?php
if(isset($_COOKIE['lembrar'])){
		$usuario = $_COOKIE['usuario'];
		$senha = $_COOKIE['senha'];
		$sql = MySql::conectar()->prepare("SELECT * FROM `admin_usuarios` WHERE usuario = ? AND senha = ?");
		$sql->execute(array($usuario,$senha));
		if($sql->rowCount() == 1){
				$info = $sql->fetch();
				$_SESSION['login'] = true;
				$_SESSION['usuario'] = $usuario;
				$_SESSION['id_user'] = $info['id'];
				$_SESSION['senha'] = $senha;
				$_SESSION['cargo'] = $info['cargo'];
				$_SESSION['nome'] = $info['nome']; 
				$_SESSION['img'] = $info['img'];
				Painel::redirect(INCLUDE_PATH_PAINEL);
			
		}
	}
?>

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
       include_once("../classes/MySql.php");
       
        
       if(isset($_POST['acao'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $sql = MySql::conectar()->prepare("SELECT * FROM `admin_usuarios` WHERE usuario = ? AND senha = ?");
        $sql->execute(array($usuario,$senha));if($sql->rowcount() == 1){
            //login realizado com sucesso
            $info = $sql->fetch();
            $_SESSION['login'] = true;
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            $_SESSION['cargo'] = $info['cargo'];
            $_SESSION['nome'] = $nome;
            if(isset($_POST['lembrar'])){
                setcookie('lembrar',true,time()+(60*60*24),'/');
                setcookie('usuario',$usuario,time()+(60*60*24),'/');
                setcookie('senha',$senha,time()+(60*60*24),'/');
                
            }
            include("../classes/Painel.php");
            Painel::redirect("index.php");
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