<?php
    namespace ITEC\PRESENCIAL\DAW\BDLIST;

    class bd {
        private string $host = "localhost";
        private string $user = "root";
        private string $pass = "1234";
        private string $db = "bdlist";
        private string $port = "3306";
        private string $code = "utf8";
        private $connection = null;
        

        public function __construct($host = "localhost", $user = "root", $pass = "1234", $db = "bdlist", $port = "3306", $code = "utf8") {
            $this->host = $host;
            $this->user = $user;
            $this->pass = $pass;
            $this->db = $db;
            $this->port = $port;
            $this->code = $code;
        
        

            try {
                $this->connection = new \mysqli($this->host, $this->user, $this->pass, $this->db, $this->port);
                if (mysqli_connect_errno()) {
                    throw new Exception("Error de conexión. " );
                    throw new Exception("Error de conexión. " );
                }
            } catch(\Exception $e){
                echo $e->getMessage();
            }
        }

    }

?>