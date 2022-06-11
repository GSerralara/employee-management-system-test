<?php namespace Model;

    class Connector{
        private $conConfig = array(
            "host" => "localhost",
            "user" => "root",
            "pass" => "Admin",
            "db" => "uplay"
        );
        private $con;
        public function __construct(){
            $this->con = new \mysqli($this->conConfig['host'],
            $this->conConfig['user'], $this->conConfig['pass'],
            $this->conConfig['db']);
        }
        public function simpleQuery($sql){
            $this->con->query($sql);
        }
        public function getQueryResult($sql){
            $data = $this->con->query($sql);
            return $data;
        }
    }
?>