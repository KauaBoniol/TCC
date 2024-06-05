<?php
class Painel{

    public static $cargos = [
		'0' => 'Normal',
		'1' => 'Sub Administrador',
		'2' => 'Administrador'];
        
    public static function logado(){
        return isset($_SESSION['login']) ? true : false;
    }
    public static function loggout(){
        session_destroy();
        header('location: login.php');
    }
    public static function redirect($url){
        echo '<script>location.href="'.$url.'"</script>';
        die();
    }
}