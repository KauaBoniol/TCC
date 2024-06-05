<?php
    session_start();

    define('INCLUDE_PATH','http://localhost/tcc/');
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'Painel/');
    define('BASE_DIR_PAINEL',__DIR__.'/Painel');
    

    function selecionadoMenu($par){
		/*<i class="fa fa-angle-double-right" aria-hidden="true"></i>*/
		$url = explode('/',@$_GET['url'])[0];
		if($url == $par){
			echo 'class="menu-active"';
		}
	}

    function verificaPermissaoMenu($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		}else{
			echo 'style="display:none;"';
		}
	}