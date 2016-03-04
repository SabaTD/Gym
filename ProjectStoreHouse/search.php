<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script type="text/javascript">
	function saerto_jami () 
	{
		var raod=document.getElementById("all").value;
		var fasi=document.getElementById("fasi").value;
		document.getElementById("jami").innerHTML = raod*fasi;
	}
	</script>
</head>
<body>

<?php 
	$conn=mysql_pconnect("localhost","root");
	$dbconn=mysql_select_db("sawyobi");
	$select=mysql_query("select * from sawyobi");
	$raodenoba3=1;
  	$personebis_masivi=mysql_fetch_array($select);
	//$saba =$_GET['qve_dasaxeleba'];
	//echo $saba;
	
			if (isset($_POST["Dasaxeleba"])){$dasaxeleba6=$_POST["Dasaxeleba"];}
			
			//echo $saba;
			echo "<table width=\"100%\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\">";
				for($i=0; $i<1; $i++)
				{
					$news_array = mysql_fetch_array($select);
					
					//$s_name=$news_array['id'];
					
					
					
					//echo $s_id;
					
					@$select1=mysql_query("select * from qvekategoriebi where qve_dasaxeleba='$dasaxeleba6'");

					$raodenoba1=mysql_num_rows($select1);
					if($raodenoba1>0)
					{
					echo "<tr>"."<th>".$news_array['dasaxeleba']."</th>"."<th>"."fasi"."</th>"."<th>"."raodenoba"."</th>"."<th>"."saerto safasuri"."</th>"."<th>"."Sell"."</th>"."</tr>";

					//echo $raodenoba1;
					for ($j=0; $j <1 ; $j++) 
					{ 
						$news_array1 = mysql_fetch_array($select1);
						$id = $news_array1["ID"];
						//echo $news_array1['sawy_id'];
						//echo $id;
						echo "<tr>";
						
						//echo "<td align=\"center\" valign=\"middle\">".$news_array['']."</td>";


						echo "<td align=\"center\" valign=\"middle\">".$news_array1['qve_dasaxeleba']."</td>";
						//echo "<td align=\"center\" valign=\"middle\">".$article_status."</td>";
						echo "<td align=\"center\" valign=\"middle\">".$news_array1['fasi']."</td>";
						
						echo "<form method='post' action='result.php?ID=$id'>";
							echo "<td align=\"center\" valign=\"middle\">"."<input type='text' name='raodenoba' autofocus value='$raodenoba3' id='all' class = 'form-control'  onkeyup ='saerto_jami();'>"."</td>";
							echo "<input type='hidden' name='fasi' value='$news_array1[fasi]' class = 'form-control' id='fasi'>";
							
							echo "<td align=\"center\" valign=\"middle\" id='jami'>".$raodenoba3*$news_array1['fasi']."</td>";
			
						
							echo "<td align=\"center\" valign=\"middle\"  height='70'>"."<input type='submit' value='Sell' class = 'btn btn-primary'>";				
						echo "</form>";
						
					echo "</tr>";


					}
				}
				else if (isset($_GET["shetyobineba"])) {
						$msg=$_GET["shetyobineba"];
						echo $msg;
					}

				else
				{
					echo "ასეთი პროდუქტი არ მოიძებნა";
				}
				
					
			}
			
			echo "</table>";

			?>
</body>
</html>