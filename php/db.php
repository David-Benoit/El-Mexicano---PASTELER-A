<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'MYSQL5021.site4now.net';
        $this->db       = 'db_a53efa_lapatti';
        $this->user     = 'a53efa_lapatti';
        $this->password = "patopatoso2";
        $this->charset  = 'utf8mb4';
    }

    function connect(){

        try{

            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}






?>
