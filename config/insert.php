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
		}else{
			$validation_error = implode(", ", $error);
		}
		$output = array(
			'error'  => $validation_error,
			'message' => $message
		);
		echo json_encode($output);
	}
}

if($form_data->action == 'Edit'){
	$data = array(
		':product_name' => $product_name,
		':description' => $description,
		':id'   => $form_data->id
	);
   $query = "UPDATE product 
	   SET product_name = :product_name, description = :description 
	   WHERE id = :id";
	$statement = $connect->prepare($query);
	if($statement->execute($data)){
		$message = 'Data Edited';
	}
	$output = array(
		'error'  => $validation_error,
		'message' => $message
	);
	echo json_encode($output);
}elseif($form_data->action == 'Delete'){
	$query = "DELETE FROM product WHERE id='".$form_data->id."'";
	$statement = $connect->prepare($query);
	if($statement->execute()){
		$output['message'] = 'Data Deleted';
	}
	$output = array(
		'error'  => $validation_error,
		'message' => $message
	);
	echo json_encode($output);
}elseif($form_data->action == 'fetch_single_data'){
	$query = "SELECT * FROM product WHERE id='".$form_data->id."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row){
		$output['product_name'] = $row['product_name'];
		$output['description'] = $row['description'];
	}
	echo json_encode($output);
}elseif($form_data->action == 'Invoke'){
	$query = "SELECT * FROM users WHERE id=".$form_data->id;
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row){
		$output['first_name'] = $row['first_name'];
		$output['last_name'] = $row['last_name'];
		$output['location'] = $row['location'];
	}
	echo json_encode($output);
}elseif($form_data->action == 'InvokeAccepted'){
	
	$q = "SELECT MAX(id_invoke) as maxi FROM invoke WHERE id_user=".$form_data->cart[0]->idU;
	$statement = $connect->prepare($q);
	$statement->execute();
	$result = $statement->fetchAll();
	if(is_null($result[0]['maxi'])){
		$a = 1;
	}else{
		$a = $result[0]['maxi']+1;
	}
	$invokeNumber = $form_data->cart[0]->idU.$a;
	for($i=0; $i<count($form_data->cart); $i++){
		$query = "INSERT INTO invoke (id_user, id_product, invoke_number)
			VALUES (".$form_data->cart[0]->idU.", ".$form_data->cart[0]->id.", $invokeNumber)";
		$statement = $connect->prepare($query);
		if($statement->execute()){
			$output['message'] = 'Data Inserted!';
			$output['invokenumber'] = $invokeNumber;
		}
	}

	echo json_encode($output);
}
?>