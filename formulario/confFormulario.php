<?php
 include_once('../config/config.php');

 

 //Verificação se recebeu os dados pelo metodo POST

 if(isset($_POST['submit'])) {

         $nome = $_POST['nome'];
         $cpf = $_POST['cpf'];
         $data_nascimento = $_POST['data_nascimento'];
         $sexo = $_POST['sexo'];
         $cep = $_POST['cep'];


         $endereço = $_POST['endereco'];
         $telefone = $_POST['telefone'];
         $email = $_POST['email'];
         $senha = $_POST['senha'];


         $cadastro = mysqli_query($conexao, "INSERT INTO cliente (nome, cpf, data_nascimento, cep, endereço, telefone, email, senha)
                                values ('$nome', '$cpf', '$data_nascimento', '$cep', '$endereço', '$telefone', '$email', '$senha')");  

header('Location: ../login/login.php');



 }



?>