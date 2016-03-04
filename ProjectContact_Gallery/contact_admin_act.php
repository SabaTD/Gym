<?php 
$conn=mysql_pconnect("localhost","root");
$dbconn=mysql_select_db("ilo_gabelia");
if(isset($_POST["About"])){ $About=$_POST["About"];}
if(isset($_POST["Address"])){ $Address=$_POST["Address"];}
if(isset($_POST["Phone"])){ $Phone=$_POST["Phone"];}
if(isset($_POST["Email"])){ $Email=$_POST["Email"];}
if($About=='' || $Address=='' || $Phone=='' || $Email=='')
{
	$msg="Info not update, fill all fields";
	header("Location:contact_admin.php?shetyobineba=$msg");
}
else
{
$update=mysql_query("update contact set About='$About', Address='$Address', Phone='$Phone', Email='$Email'");
$msg="Info update successfully";
header("Location:contact_admin.php?shetyobineba=$msg");
}


?>