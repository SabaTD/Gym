<?php
	$conn=mysql_pconnect("localhost","root");
	$dbconn=mysql_select_db("sawyobi");
			if(isset($_POST["Qvekategoria"])){ $Qvekategoria=$_POST["Qvekategoria"]; }
			if(isset($_POST["Fasi"])){ $Fasi=$_POST["Fasi"];}
			if(isset($_POST["Raodenoba"])){ $Raodenoba=$_POST["Raodenoba"];}
			if(isset($_POST["record_id"])){ $record_id=$_POST["record_id"];}
			if($Qvekategoria=='' || $Fasi=='' || $Raodenoba=='' )
			{
				$msg="ჩასწორება ვერ მოხერხდა, შეავსე ყველა ველი";
				header("Location:index.php?record_id=$record_id");

			}
			
			else
			{
			//echo "<script type='text/javascript'>alert('registracia warmatebit dasrulda');</script>";
			$ins=mysql_query("update qvekategoriebi set qve_dasaxeleba='$Qvekategoria',fasi='$Fasi',raodenoba='$Raodenoba' where ID='$record_id'");
			$msg="წარმატებით შეიცვალა მონაცემები";
				header("Location:index.php?shetyobineba=$msg");
			//$upd=mysql_query("update registration_form Name='$saxeli' where chanaweris_id='1'");
			}
?>