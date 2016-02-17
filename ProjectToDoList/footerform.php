<!DOCTYPE html>
<html>
	<head>
		<title>To Do List</title>
		<meta charset="UTF-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">	
					<script type="text/javascript">
				 	function get_form(){
						var xmlhttp;

						if (window.XMLHttpRequest){
						  xmlhttp=new XMLHttpRequest();
						}

						else{
							xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						}

						xmlhttp.onreadystatechange=function(){
						if (xmlhttp.readyState==4 && xmlhttp.status==200)
							{
						    	document.getElementById("ajax_form").innerHTML=xmlhttp.responseText;
					        }
						}
						xmlhttp.open("POST","headerform.php",true);
						xmlhttp.send();
					}


					function quick_edit_form(x){
						var xmlhttp;
						var div_id="div"+x;
						if (window.XMLHttpRequest){
						  xmlhttp=new XMLHttpRequest();
						}

						else{
							xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						}

						xmlhttp.onreadystatechange=function(){
						if (xmlhttp.readyState==4 && xmlhttp.status==200)
							{
						    	document.getElementById(div_id).innerHTML=xmlhttp.responseText;
					        }
						}
						xmlhttp.open("POST","edit.php?id=$id",true);
						xmlhttp.send();
					}
					</script>
	</head>

	<body onload="get_form();">


<div id="ajax_form"></div>


		<?php 
			
	 		$conn = mysql_connect("localhost", "root", ""); 
	 		$db_select=mysql_select_db("mydatabase");
	 		$result =mysql_query("select * from  mylist order by date desc");
	 		
	 		

			while($row = mysql_fetch_array($result))
			{
				$id = $row["id"];
				echo "<div class = 'div1' id='div".$id."'>";
			    	echo "<div class = 'div2'>"; 

					    echo "<h3 id = 'title1'>".'Title:' . $row['Title']. "</h3>";
					    echo "<h4 id = 'date1'>" ."Adding Date:". $row["Date"]."</h4>" ."</h3>" ."<br>";
			 			//echo "Adding Date:". $row["Date"] ."<br>"."<br>"."<br>";
			 			echo "<br>";
			 			echo "<h4 id = 'description1'>"."Description:". "</h4>" ."<br>" ."<p id = 'p1'>". $row["Description"] ."</p>";
			 			echo "</br>";
			 			echo "<div id = 'div3'>"; 
				 			echo "<a href = \"deleting.php?id=$id\" class = \"btn btn-danger\" >Delete </a>";
				 			echo $id;
				 		    echo "<a href = \"#\" class = \"btn btn-primary\" style='float:left; margin-right:5px;'  onclick=\"quick_edit_form(".$id.");\" >Update </a>";
			 		    echo "</div>";
		 		    echo "</div>";
	 		    echo "</div>";
	 		}

	 		echo "</br>";
	 		echo "</br>";
	 	
	 		mysql_close($conn);
	 		
		?>
	</body>
</html>