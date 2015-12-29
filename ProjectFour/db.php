<?php

//print_r(PDO::getAvailableDrivers()); //არსებული მონაცემთა ბაზის ტიპები;

try{
	$conn = new PDO('mysql:host=localhost; dbname=twitter' , "root", ""); //ჰოსტი, ბაზის სახელი, ლოგინი, პაროლი;
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ჩაშენებული ფუნქცია რომელსაც შეუძლია შეცდომის სხვადასხვა ტიპის დაფიქსირება;

}
catch(PDOException $e){
	echo $e->getMessage(); //შეცდომას თუ პოულობს try, ეს ფუნქცია ბეჭდავს; 
	//file_put_contents("eror.txt", $e->getMessage()); //შეცდომას ფაილში ჩაწერს;
}

?>