<?php

class DataBase {
    private $user_name = 'root';
    private $password = 'p@ssw0rd';
    private $base_data = 'pow_proyecto_final';
    private $host_name = 'localhost';
    private $charset = 'utf8';

    
    function connectDataBase () {
      try {
       $connect = "mysql:host=".$this->host_name.";dbname=".$this->base_data.";charset=".$this->charset;
       $option = [
         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_EMULATE_PREPARES => false,
       ];

        $user_data = new PDO($connect, $this->user_name, $this->password, $option);
        
        return $user_data;
      } catch (PDOExption $error) {
        echo "No se pudo conectar" . $error->getMessage();
        exit;
      }
    }
  }
?>


