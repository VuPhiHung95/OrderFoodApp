<?php
	require 'config.php';

	$query = "SELECT ID, NameDrink, CostDrink, LinkDrink FROM drink";
	$result = mysqli_query($conn, $query);
	$response = array();

	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
			array_push($response, array("ID" => $row[0], "NameDrinks" => $row[1], 
			"CostDrinks" => $row[2], "LinkDrinks" => $row[3]));
		}	
	}
	echo json_encode($response);
	mysqli_close($conn);
?>