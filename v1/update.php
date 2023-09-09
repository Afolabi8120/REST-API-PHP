<?php
	// include headers
	header("Access-Control-Allow-Origin: *"); // allows all origin e.g. localhost, any domain
	header("Content-type: application/json; Charset: UTF-8"); // data which we are getting inside request
	header("Access-Control-Allow-Methods: POST"); // method type

	// database connection
	require('../config/database.php');

	if($_SERVER['REQUEST_METHOD'] === "POST"){

		$data = json_decode(file_get_contents("php://input"));
		
		// submitted data
		$id = $student->validateInput($data->id);
		$name = $student->validateInput($data->name);
		$email = $student->validateInput($data->email);
		$mobile = $student->validateInput($data->mobile);

		// if variables are empty
		if(empty($id) || empty($name) || empty($email) || empty($mobile)){
			http_response_code(500); // 500 means internal server error
				echo json_encode(array(
					"status" => 0,
					"message" => "All Input Fields are Required"
				));
		}else{

			// save data if true
			if($student->update_student($id,$name,$email,$mobile) === true){
				http_response_code(200); // 200 means ok
				echo json_encode(array(
					"status" => 1,
					"message" => "Student Data Updated Successfully"
				));
					
			}else{ // display an error message if not true
				http_response_code(500); // 500 means internal server error
				echo json_encode(array(
					"status" => 0,
					"message" => "Failed to Update Student Data"
				));
			}

		}

	}else{
		http_response_code(503); // 503 means service unavailable
		echo json_encode(array(
			"status" => 0,
			"message" => "Access Denied"
		));
	}

?>