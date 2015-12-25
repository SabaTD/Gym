<?php

//print_r(PDO::getAvailableDrivers()); //არსებული მონაცემთა ბაზის ტიპები;

try{
	$conn = new PDO('mysql:host=localhost; dbname=sqllab' , "root", ""); //ჰოსტი, ბაზის სახელი, ლოგინი, პაროლი;
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ჩაშენებული ფუნქცია რომელსაც შეუძლია შეცდომის სხვადასხვა ტიპის დაფიქსირება;

	//$title="shekitxvis satauri";
	//$correct_answer=2;

	$stmt = $conn->prepare("INSERT INTO questions(title, correct_answer) VALUES(:title, :correct_answer)");
	$stmt->bindParam(':title', $title);
	$stmt->bindParam(':correct_answer', $correct_answer);

	$stmt->execute(array(
		'title' => 'question title from array 1',
		'correct_answer' => 1
	));

	$stmt->execute(array(
		'title' => 'question title from array 2',
		'correct_answer' => 1
	));
	

}
catch(PDOException $e){
	file_put_contents('error_log.txt', $e->getMessage()); //შეცდომას თუ პოულობს try, ეს ფუნქცია ბეჭდავს; 
}

?>