<?php namespace Controller;

    use Model\Employee as Employee;
    use Model\Category as Category;

    class EmployeesController{

        private $employee;
        private $category;

        public function __construct()
        {
            $this->employee = new Employee();
            $this->category = new Category();
        }

        public function index(){
            $data = $this->employee->getEmployees();
            return $data;
        }

        public function currentCategories(){
			$data = $this->category->showCategories();
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
				$this->employee->set("category", $_POST['id_category']);
				$this->employee->edit();
				header("Location: " . URL);
			}
		}

        public function add(){
            if($_POST){
                $this->employee->set("name", $_POST['name']);
				$this->employee->set("category", $_POST['id_category']);
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
    $employees = new EmployeesController();
?>