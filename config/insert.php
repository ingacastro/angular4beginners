<?php
//insert.php
include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validation_error = '';
$product_name = '';
$description = '';

if(empty($form_data->product_name)){
	$error[] = 'Product Name is Required';
}else{
	$product_name = $form_data->product_name;
}

if(empty($form_data->description)){
	$error[] = 'Description is Required';
}else{
	$description = $form_data->description;
}

if(empty($error)){
	if($form_data->action == 'Insert'){
		$data = array(
		   ':product_name'  => $product_name,
		   ':description'  => $description
		);
		$query = "INSERT INTO product (product_name, description)
			VALUES (:product_name, :description)";
		$statement = $connect->prepare($query);
		if($statement->execute($data)){
			$message = 'Data Inserted';
		}
	}else{
		$validation_error = implode(", ", $error);
	}

	$output = array(
		'error'  => $validation_error,
		'message' => $message
	);

	echo json_encode($output);
}
?>