<?php namespace Model;
    class Employee{
        private $id;
        private $name;
        private $category;
        private $con;
        public function __construct()
        {
            $this->con = new Connector();
        }
        public function getEmployees(){
            $sql = "SELECT name, category FROM Employee;";
            $registeredEmployees = $this->con->getQueryResult($sql);
            return $registeredEmployees;
        }
        public function addEmployee(){
            $sql = "INSERT Employee(name,Category) VALUES ('{$this->name}','{$this->category}')";
            $this->con->simpleQuery($sql);
        }
        public function deleteEmployee(){
            $sql = "DELETE FROM Employee WHERE id = '{$this->id}'";
            $this->con->simpleQuery($sql);
        }
    }
?>