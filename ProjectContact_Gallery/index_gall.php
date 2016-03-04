<!DOCTYPE HTML>
<!--
	Lens by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Lens by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading-0 is-loading-1 is-loading-2">

		<!-- Main -->
			<div id="main">

				

				<!-- Thumbnail -->
					<section id="thumbnails">
					
						<?php  
						$conn=mysql_pconnect("localhost","root");
						$dbconn=mysql_select_db("ilo_gabelia");
						$select=mysql_query("select * from gallery");
						$raodenoba=mysql_num_rows($select);
						for ($i=0; $i < $raodenoba; $i++) 
						{ 
							$photos=mysql_fetch_array($select);
							
							echo "<article>";
							echo "<a class='thumbnail' href='$photos[img_link]' data-position='top center'><img src='$photos[img_link]' alt='' />"."</a>";
							echo "</article>";
							
						}

						?>
						
						

						
					</section>

				

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>