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
        public function set($atribute, $content){
			$this->$atribute = $content;
		}

		public function get($atribute){
			return $this->$atribute;
		}
        public function getEmployees(){
            $sql = "SELECT id,name, category FROM Employee;";
            $registeredEmployees = $this->con->getQueryResult($sql);
            return $registeredEmployees;
        }
        public function addEmployee(){
            $sql = "INSERT Employee(name,category) VALUES ('{$this->name}','{$this->category}')";
            $this->con->simpleQuery($sql);
        }
        public function deleteEmployee(){
            $sql = "DELETE FROM Employee WHERE id = '{$this->id}'";
            $this->con->simpleQuery($sql);
        }

        public function view(){
			$sql = "SELECT id, name, category FROM Employee
					WHERE id = '{$this->id}';";
			$response = $this->con->getQueryResult($sql);
			$row = mysqli_fetch_assoc($response);
			return $row;
		}

        public function edit(){
			$sql = "UPDATE Employee SET name = '{$this->name}', category = '{$this->category}' WHERE id = '{$this->id}';";
			$this->con->simpleQuery($sql);
		}
    }
?>