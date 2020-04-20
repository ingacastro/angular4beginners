<?php
//fetch_data.php
include('database_connection.php');
$query = "SELECT A.*, B.first_name, B.last_name, B.location
	FROM invoke A, users B 
    WHERE A.id_user=B.id
	ORDER BY A.payment_method";
$statement = $connect->prepare($query);
if($statement->execute()){
	while($row = $statement->fetch(PDO::FETCH_ASSOC)){
		$data[] = $row;
	}
 echo json_encode($data);
}
?>
