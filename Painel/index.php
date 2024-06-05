<?php
	ob_start();
	include('../config.php');
    include('../classes/Painel.php');

	if(Painel::logado() == false){
		include('login.php');
	}else{
		include('logado.php');
	}

	ob_end_flush();

?>