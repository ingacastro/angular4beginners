<?php

//register.php

include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));


$message = '';
$validation_error = '';

if(empty($form_data->firstname)){
	$error[] = 'FName is Required';
}else{
	$data[':firstname'] = $form_data->firstname;
}

if(empty($form_data->lastname)){
	$error[] = 'LName is Required';
}else{
	$data[':lastname'] = $form_data->lastname;
}

if(empty($form_data->email)){
	$error[] = 'Email is Required';
}else{
	if(!filter_var($form_data->email, FILTER_VALIDATE_EMAIL)) {
		$error[] = 'Invalid Email Format';
	}else{
		$data[':email'] = $form_data->email;
	}
}

if(empty($form_data->password)){
	$error[] = 'Password is Required';
}else{
	$data[':password'] = password_hash($form_data->password, PASSWORD_DEFAULT);
}

if(empty($form_data->location)){
	$error[] = 'Location is Required';
}else{
	$data[':location'] = $form_data->location;
}

if(empty($error)){
/*$query = "
INSERT INTO users (first_name, last_name, email, password) VALUES (:firstname, :lastname, :email, :password)
";*/
	$query = "INSERT INTO users (first_name, last_name, email, password, location) 
		VALUES ('".$data[':firstname']."', '".$data[':lastname']."', '".$data[':email']."', '".$data[':password']."', '".$data[':location']."')";
	echo $query;
	$statement = $connect->prepare($query);

	if($statement->execute($data)){
		$message = 'Registration Completed';
	}
}else{
	$validation_error = implode(", ", $error);
}

$output = array(
	'error'  => $validation_error,
	'message' => $message
);

echo json_encode($output);

?>