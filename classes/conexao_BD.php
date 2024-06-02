<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


class MySQL
{
    private static $PDO;

    public static function conectar()
    {
        try {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "eco";
            self::$PDO = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            return self::$PDO;
        } catch (PDOException $e) {
            // Trate qualquer exceção aqui, se necessário
            echo "Erro de conexão: " . $e->getMessage();
            exit(); // Ou trate de outra forma
        }
    }
}


// Para utilizar a conexão:
$PDO = MySQL::conectar();
