<?php 

session_start();

$title = $_POST['title'];
$options = $_POST['options'];
$correct_answer = $_POST['correct_answer'];

$data = array();
$data['title'] = $title;
$data['options'] = $options;
$data['correct_answer'] = $correct_answer;

$textArray = json_encode($data, JSON_UNESCAPED_UNICODE) . PHP_EOL;

$f = fopen('questions.txt', 'a');
fwrite($f , $textArray);
fclose($f);

$_SESSION['success'] = 1;  //ცვლადი რომლის არსებობასაც ვამოწმებთ ძირითად კოდში და თუ დაკმაყოფილდა პირობა რაიმე ფუნქციას ვქმნით if-ის შჳგნით;

header("Location: quiz.php");

//echo $textArray;

?>