<?php

	try{
		$conn = new PDO('mysql:host=127.0.0.1; dbname=sqllab' , "root", ""); 
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		mysql:host -> localhost, 
		dbname->sqllab;


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