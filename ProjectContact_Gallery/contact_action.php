<?php  
if(isset($_POST["Name"])){ $Name=$_POST["Name"]; }
if(isset($_POST["Surname"])){ $Surname=$_POST["Surname"];}
if(isset($_POST["Email"])){ $Email=$_POST["Email"];}
if(isset($_POST["Message"])){ $Message=$_POST["Message"];}
if($Name=='' || $Surname=='' || $Email=='' || $Message=='')
{
	$msg="Message not sent, fill all field,please!";
	header("Location:contact.php?shetyobineba=$msg");

}

else
{
	$to = "giokaxura@yahoo.com";
	$subject = "My subject";
	$txt = $Message;
	$headers = "From:".$Email;	
	
	mail($to,$subject,$txt,$headers);
	$msg="Message sent successfully";
	header("Location:contact.php?shetyobineba=$msg");
}

?>