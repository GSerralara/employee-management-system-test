<?php namespace Controller;

    use Model\Employee as Employee;
    class EmployeesController{
        private $employee;
        public function __construct()
        {
            $this->employee = new Employee();
        }
        public function index(){
            $data = $this->employee->getEmployees();
            return $data;
        }
        public function edit($id){
			if(!$_POST){
				$this->employee->set("id", $id);
				$data = $this->employee->view();
				return $data;
			}else{
				$this->employee->set("id", $_POST['id']);
				$this->employee->set("name", $_POST['name']);
				$this->employee->set("category", $_POST['category']);
				$this->employee->edit();
				header("Location: " . URL);
			}
		}
        public function add(){
            if($_POST){
                $this->employee->set("name", $_POST['name']);
				$this->employee->set("category", $_POST['category']);
                $this->employee->addEmployee();
                header("Location: " . URL);
            }
        }

        public function delete($id){
			$this->employee->set("id",$id);
			$this->employee->deleteEmployee();
			header("Location: " . URL);
		}
    }
?>