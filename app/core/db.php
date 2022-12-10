<?php
    class DB {
        private $host = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'travigo2.0';

        protected $db;
        public function connect(){
            try {
                    $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
                    // set the PDO fetch Mode
                    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $this->db=$conn;
                } catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
        }
    }
?>