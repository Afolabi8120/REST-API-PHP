<?php
	
	class Student {

		protected $pdo;

		function __construct($pdo){
			$this->pdo = $pdo;
		}

		public function print(){
			echo "Hello World";
		}

		public function validateInput($var){
			$var = htmlspecialchars($var);
			$var = trim($var);
			$var = stripcslashes($var);
			return $var;
		}

		public function create_data($name,$email,$mobile){
			$stmt = $this->pdo->prepare("INSERT INTO tblstudent (name,email,mobile) VALUES(:name,:email,:mobile)");
			$stmt->bindParam(":name", $name, PDO::PARAM_STR);
			$stmt->bindParam(":email", $email, PDO::PARAM_STR);
			$stmt->bindParam(":mobile", $mobile, PDO::PARAM_STR);
			$stmt->execute();

			return true;
		}

		public function get_all_data(){
			$stmt = $this->pdo->prepare("SELECT * FROM tblstudent");
			$stmt->execute();

			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function get_single_data($id){
			$stmt = $this->pdo->prepare("SELECT * FROM tblstudent WHERE id = :id");
			$stmt->bindParam(":id", $id, PDO::PARAM_INT);
			$stmt->execute();

			return $stmt->fetch(PDO::FETCH_OBJ);
		}

	}

?>