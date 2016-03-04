<?php  
$conn=mysql_pconnect("localhost","root");
$dbconn=mysql_select_db("ilo_gabelia");
if(isset($_FILES['photo']))
 {
   $photo=$_FILES['photo'];
   $file_type=$_FILES['photo']['type'];
   $file_name=$_FILES['photo']['name'];
   $file_temp_name=$_FILES['photo']['tmp_name'];
   $file_size=$_FILES['photo']['size'];

   if($file_type=="image/jpeg")
   {
    $new_file_name="images/fulls/f_".time("U").".jpg";
    $new_img_name="f_".time("U").".jpg";
    $upl_img=move_uploaded_file($file_temp_name, $new_file_name);
    
	}
	}
	
	$insert=mysql_query("insert into gallery(img_link) values('$new_file_name')");
	$msg="photo added successfully";
	header("Location:gallery_admin.php?alert=$msg");


?>