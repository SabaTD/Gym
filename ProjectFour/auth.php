<?php
//submit-ზე დაჭერის შემდეგ  აქ მოდის ინფორმაცია და მოწმდება. გვყავს თუ არა იუზერი, 
//და სწორად ეწერა თუ არა ამ იუზერს სახელი და პაროლი. თუ სწორია გადავამისამართებთ მთავარ გვერდზე, 
//თუ არასწორია მაშინ ვაბრუნებთ ლოგინის გვერდზე და ვუჩვენებთ რომ სახელი ან პაროლი არასწორია.
ini_set('display_errors', 1);
session_start();

require_once('db.php');

//შევამოწმოთ თუ დააჭირა მომხმარებელმა submit ღილაკზე. 2 ვარიანტით.
//if( $_SERVER['REQUEST_METHOD'] == 'POST')
if(isset($_POST['email']) && isset($_POST['password']) ){

	try{
		$sql = "SELECT COUNT(*) AS total FROM users WHERE email = :email AND password = :password";
		$stmt = $conn->prepare($sql);
		$stml->execute(array(
			':email' => $_POST['email'],
			':password' => sha1($_POST['password'])
		));
		$user = $stmt -> fetchALL(PDO::FETCH_ASSOC);
		print_r($user);
	}

	catch(PDOException $e){
		echo $e -> getMessage();
	}

}
?>