<?php

//print_r(PDO::getAvailableDrivers()); //არსებული მონაცემთა ბაზის ტიპები;

try{
	$conn = new PDO('mysql:host=127.0.0.1; dbname=sqllab' , "root", ""); //ჰოსტი, ბაზის სახელი, ლოგინი, პაროლი;
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ჩაშენებული ფუნქცია რომელსაც შეუძლია შეცდომის სხვადასხვა ტიპის დაფიქსირება;

	$conn->query("INSERT INTO rerwer");
}
catch(PDOException $e){
	file_put_contents('error_log.txt', $e->getMessage()); //შეცდომას თუ პოულობს try, ეს ფუნქცია ბეჭდავს; 
}

?>