<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <head>
        <meta charset="UTF-8" /> 
        <title>Ilia Gabelia Photography - Contact</title>
        <link rel="icon" href="photo/logo1-2.png"> 
        <link rel="stylesheet" type="text/css" href="style/demo.css" />
        <link rel="stylesheet" type="text/css" href="style/style.css" />
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script type="text/javascript" src="script/jquery.js"></script>
        <script type="text/javascript" src="script/myScript.js"></script>
    </head>
    <body id="page">
       
        <div class="container" id="cont">
          
            
            
            <div id="content_gallery" style="background:transparent;">
                <?php  
                        echo "<div id='form3'>";
                            echo "<h2 style='margin-left:-18vh;'>Log in</h2>";
                            //if(isset($_GET["shetyobineba"])){$msg=$_GET["shetyobineba"]; echo "<center>".$msg."<center>";}

                            echo "<form action='admin_action.php' method='post' class ='form-group'>";
                                echo "<input type='text' name='Login' class = 'form-control' placeholder='Login' style='width:70%;'>"."<br />";
                                echo "<input type='text' name='Password' class = 'form-control' placeholder='Password' style='width:70%;'>"."<br/>";
                                echo "<input type='submit' value='Login' class = 'btn btn-primary' style='width:30%; margin-left:-18vh;'>";
                            echo "</form>";//end of form
                        echo "</div>"; 
                ?>      
                
                
                
            </div><!--end of content_gallery-->
        </div><!--end of container-->
        
        
    </body>
</html>