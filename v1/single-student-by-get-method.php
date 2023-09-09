<?php
	// include headers
	header("Access-Control-Allow-Origin: *"); // allows all origin e.g. localhost, any domain
	header("Access-Control-Allow-Methods: GET"); // method type
	
	// database connection
	require('../config/database.php');

	if($_SERVER['REQUEST_METHOD'] === "GET"){

		$student_id = isset($_GET['id']) ? intval($_GET['id']) : "" ;

		if(!empty($student_id)){

			$student_data = $student->get_single_data($student_id);
			
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
