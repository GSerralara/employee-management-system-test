<?php namespace Model;

	class Category{

		private $id;
		private $category;
		private $con;

		public function __construct(){
			$this->con = new Connector();
		}

		public function set($atribute, $content){
			$this->$atribute = $content;
		}

		public function get($atribute){
			return $this->$atribute;
		}

		public function showCategories(){
			$sql = "SELECT id,category FROM Category;";
			$data = $this->con->getQueryResult($sql);
			return $data;
		}

		public function add(){
			$sql = "INSERT INTO Category (category) VALUES ('{$this->category}');";
			$this->con->simpleQuery($sql);;
		}

		public function delete(){
			$sql = "DELETE FROM Category WHERE id = '{$this->id}';";
			$this->con->simpleQuery($sql);
		}

		public function edit(){
			$sql = "UPDATE Category SET category = '{$this->category}' WHERE id = '{$this->id}';";
			$this->con->simpleQuery($sql);
		}

		public function view(){
			$sql = "SELECT * FROM Category WHERE id = '{$this->id}'";
			$data = $this->con->getQueryResult($sql);
			$row = mysqli_fetch_assoc($data);
			return $row;
		}

	}

?>