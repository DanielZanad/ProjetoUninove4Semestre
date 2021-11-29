<?php 
// Definindo namespace
namespace App\Model;

use PDO;

class Conexao{
    private static $instance;

    public static function getConn(){
        if(!isset(self::$instance)){
            // Criando uma instancia nova   
            self::$instance = new PDO('mysql:host=mysqlserver.cm.us-east-1.rds.amazonaws.com;dbname=usuario;charset=utf8','admin','');
        }
        // Retornando a instancia
        return self::$instance;
        
    }
}
?>