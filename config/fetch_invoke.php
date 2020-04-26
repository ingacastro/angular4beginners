<?php
//fetch_invoke.php
include('database_connection.php');
$query = "
	SELECT invoke_number, pay, process, invoke_date, process_date, payment_method,
	amount, delivered_date
    FROM invoke 
    WHERE id_user = $_GET[id] AND pay = $_GET[pay]
    GROUP BY invoke_number
	";
$statement = $connect->prepare($query);

if($statement->execute()){
	while($row = $statement->fetch(PDO::FETCH_ASSOC)){
		$data[] = $row;
	}
	echo json_encode($data);
}
?>