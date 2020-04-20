<?php
//insert.php
include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validation_error = '';
$product_name = '';
$description = '';

$error = [];

if($form_data->action == 'Process'){
	$query = "UPDATE invoke SET process = 1, process_date = NOW() WHERE id_invoke =".$form_data->id_invoke;
	$statement = $connect->prepare($query);
	if($statement->execute($data)){
		$message = 'Data Processed!';
	}else{
		$validation_error = implode(", ", $error);
	}
	$output = array(
		'error'  => $validation_error,
		'message' => $message
	);
	
}elseif($form_data->action == 'Delivered'){
	$query = "UPDATE invoke SET delivered = 1, delivered_date = NOW() WHERE id_invoke =".$form_data->id_invoke;
	$statement = $connect->prepare($query);
	if($statement->execute($data)){
		$message = 'Data Delivered!';
	}else{
		$validation_error = implode(", ", $error);
	}
	$output = array(
		'error'  => $validation_error,
		'message' => $message
	);
}

echo json_encode($output);