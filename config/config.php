<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Eco";
$conexao = new mysqli($servername, $username, $password, $dbname);

if($conexao->connect_errno){
    echo"Não foi possivel se conectar ao bd";
}
else{
    echo "Conexão realizada com sucesso";
}



?>