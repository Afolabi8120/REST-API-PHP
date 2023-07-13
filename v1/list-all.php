<?php
	// include headers
	header("Access-Control-Allow-Origin: *"); // allows all origin e.g. localhost, any domain
	header("Access-Control-Allow-Methods: GET"); // method type
	
	// database connection
	require('../config/database.php');

	if($_SERVER['REQUEST_METHOD'] === "GET"){

		$data = $student->get_all_data();

		if($data){

			http_response_code(200); // 200 means OK
			echo json_encode(
				array(
					"status" => 1,
					"data" => $data
				)
			);

		}else{
			http_response_code(200); // 200 means OK
			echo json_encode(
				array(
					"status" => 1,
					"message" => "No Record Found"
				)
			);
		}

	}else{
		http_response_code(503); // 503 means service unavailable
		echo json_encode(
			array(
				"status" => 0,
				"message" => "Access Denied"
			)
		);
	}


?>
