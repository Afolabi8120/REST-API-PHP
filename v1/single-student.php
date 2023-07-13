<?php
	// include headers
	header("Access-Control-Allow-Origin: *"); // allows all origin e.g. localhost, any domain
	header("Content-type: application/json; Charset: UTF-8"); // data which we are getting inside request
	header("Access-Control-Allow-Methods: GET"); // method type
	
	// database connection
	require('../config/database.php');

	if($_SERVER['REQUEST_METHOD'] === "GET"){

		$param = json_decode(file_get_contents("php://input"));

		// getting student id
		$id = $student->validateInput($param->id);

		if(!empty($id)){

			$student_data = $student->get_single_data($id);
			
			if(!empty($student_data)){
				http_response_code(200); // 200 means OK
				echo json_encode(array(
					"status" => 1,
					"data" => $student_data
				));
			}else{
				http_response_code(404); // 404 means service unavailable
				echo json_encode(array(
					"status" => 0,
					"message" => "No Record Found"
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
