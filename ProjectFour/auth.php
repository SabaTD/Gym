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
		$sql = "SELECT id, username, email FROM users WHERE email = :email AND password = :password";
		$stmt = $conn->prepare($sql);
		$stmt->execute(array(
			':email' => $_POST['email'],
			':password' => sha1($_POST['password'])
		));
		$user = $stmt -> fetchALL(PDO::FETCH_ASSOC);
		
		if($user){
			$_SESSION['is_logged'] = 1;
			$_SESSION['email'] = $user['email'];
			$_SESSION['username'] = $user['username'];
			header('Location: index.php');
 		}

		else{
			$_SESSION['message'] = 'error';
			header('Location: login.php');
		}
	}

	catch(PDOException $e){
		echo $e -> getMessage();
	}

}
?>