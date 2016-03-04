<?php
$conn=mysql_pconnect("localhost","root");
$dbconn=mysql_select_db("sawyobi");
if(isset($_POST["Qvekategoria"])){ $Qvekategoria=$_POST["Qvekategoria"]; }
if(isset($_POST["record_id"])){$record_id=$_POST["record_id"];}
if(isset($_POST["Status"])){$Status=$_POST["Status"];}
if(isset($_POST["Fasi"])){$Fasi=$_POST["Fasi"];}
if(isset($_POST["Raodenoba"])){$Raodenoba=$_POST["Raodenoba"];}
if($Qvekategoria=='')
{
	$msg="ქვეკატეგორიაში არ დაემატა";
	header("Location:index.php?shetyobineba1=$msg");

}
else
{
//echo "<script type='text/javascript'>alert('registracia warmatebit dasrulda');</script>";
$ins=mysql_query("insert into qvekategoriebi(sawy_id,qve_dasaxeleba, fasi,raodenoba, statusi) values('$record_id', 
	'$Qvekategoria','$Fasi','$Raodenoba','$Status')");
$msg="ქვეკატეგორიაში წარმატებით დაემატა";
	header("Location:index.php?shetyobineba1=$msg");
//$upd=mysql_query("update registration_form Name='$saxeli' where chanaweris_id='1'");

}

?>