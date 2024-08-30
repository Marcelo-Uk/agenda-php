<?php

    include_once __DIR__ . '../../config/dbconfig.php';

    class Database {

        private $servername;
        private $username;
        private $password;
        private $dbname;
        private $conn;

        function __construct(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) {
            $this->servername = DB_HOST;
            $this->username = DB_USERNAME;
            $this->password = DB_PASSWORD;
            $this->dbname = DB_NAME;
        }

        function connect(){
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            
            if ($this->conn->connect_error) {
                die('Falha Catastrófica com Banco de Dados! Fudeu Tudo!!! Corra para as Colinas!'. $this->conn->connect_error);
            }

            return $this->conn;
        }

        function closeConnection(){
            if($this->conn){
                mysqli_close($this->conn);
            }
        }

    }
?>