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
    }
?>