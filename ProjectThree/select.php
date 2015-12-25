<?php

	try{
		$conn = new PDO('mysql:host=localhost; dbname=sqllab' , "root", ""); 
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

		$stmt = $conn->query("SELECT * FROM question");
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		while ($row = $stmt ->fetch()) {
			print_r($row);
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	//sss
?>