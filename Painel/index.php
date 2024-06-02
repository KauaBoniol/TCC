<?php
  include('../classes/conexao_BD.php');
  include('../classes/Painel.php');

    if(Painel::logado() == false){
        include('login.php');
    }else{
        include('logado.php');
    }
?>