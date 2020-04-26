<?php
//insert.php
include('database_connection.php');
$form_data = json_decode(file_get_contents("php://input"));
$error = '';
$message = '';
$validation_error = '';
$error = [];
$q = "SELECT invoke_number
	FROM invoke
	WHERE id_invoke =".$form_data->id_invoke;
$sta = $connect->prepare($q);
$sta->execute();
$result = $sta->fetchAll();
switch($form_data->action){
	case 'Delivered':
		$query = "UPDATE invoke 
			SET delivered = 1, delivered_date = NOW() 
			WHERE invoke_number =".$result[0]['invoke_number'];
		$msg = 'Data Delivered!';

	break;
	
	case 'Process':
		$query = "UPDATE invoke 
		SET process = 1, process_date = NOW() 
		WHERE invoke_number =".$result[0]['invoke_number'];
		$msg = 'Data Processed!';
	break;
}
$statement = $connect->prepare($query);
if($statement->execute($data)){
	$message = $msg;
}else{
	$validation_error = implode(", ", $error);
}
$output = array(
	'error'  => $validation_error,
	'message' => $message
);

echo json_encode($output);