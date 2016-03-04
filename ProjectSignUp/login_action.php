<?php
$conn=mysql_pconnect("localhost","root");
$dbconn=mysql_select_db("mydatabase");
if(isset($_POST["Login"])){ $login=$_POST["Login"];}
if(isset($_POST["password"])){ $password=$_POST["password"];}
$select=mysql_query("select * from signup8 where Username='$login' and Password1='$password'");

$raodenoba=mysql_num_rows($select);
if($raodenoba>0)
{
	$msg="შეხვედით სისტემაში";
	header("Location:login.php?alert=$msg");
	
}
else 
{
	$msg="ლოგინი ან პაროლი არასწორია,სცადეთ კიდევ ერთხელ";
	header("Location:login.php?alert=$msg");
}



?>