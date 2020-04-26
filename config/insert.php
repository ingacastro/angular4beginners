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

switch($form_data->action){
	case 'Edit':
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
	break;

	case 'Insert':
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
		}
	break;
	
	case 'Delete':
		$query = "DELETE FROM product WHERE id='".$form_data->id."'";
		$statement = $connect->prepare($query);
		if($statement->execute()){
			$output['message'] = 'Data Deleted';
		}
		$output = array(
			'error'  => $validation_error,
			'message' => $message
		);
	break;
	
	case 'fetch_single_data':
		$query = "SELECT * FROM product WHERE id='".$form_data->id."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row){
			$output['product_name'] = $row['product_name'];
			$output['description'] = $row['description'];
		}
	break;
	
	case 'Invoke':
		$query = "SELECT * FROM users WHERE id=".$form_data->id;
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row){
			$output['first_name'] = $row['first_name'];
			$output['last_name'] = $row['last_name'];
			$output['location'] = $row['location'];
		}
	break;
	
	case 'InvokeAccepted':
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
			$query = "INSERT INTO invoke (id_user, id_product, quantity, invoke_number, amount)
				VALUES (".$form_data->cart[0]->idU.", ".$form_data->cart[$i]->id.", ".$form_data->cart[$i]->count.", $invokeNumber,".$form_data->tot.")";
			$statement = $connect->prepare($query);
			if($statement->execute()){
				$output['message'] = 'Data Inserted!';
				$output['invokenumber'] = $invokeNumber;
			}
		}
	break;
	
	case 'PayAccepted':
		$q = "UPDATE invoke SET payment_method='".$form_data->payment."', pay = 1 WHERE invoke_number='".$form_data->invoke_number."'";
		$statement = $connect->prepare($q);
		if($statement->execute()){
			$output['message'] = 'Payment Method Inserted!';
			$output['invokenumber'] = $invokeNumber;
		}
	break;
}
echo json_encode($output);

?>