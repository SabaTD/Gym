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
    <style type="text/css">
    ul li a:hover
    {
        color:black;
        text-decoration: none;  
         
    }
    .container1
    {
        width: 100%;
    }
    </style>
    <body id="page">
       
        <div class="container1" id="cont">
            <!-- Codrops top bar -->
            <div class="codrops-top" id="codrops-top1" style="width:100%; border: solid 1px;">
                <header style="width:100%;">
                    <div id="menu_logo">
                        <div id="logo">
                            <a href="index.php"><img src="photo/logo1-2.png"></a>
                        </div><!--end of logo-->
                        <div id="menu" style="margin-left: 122px;">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</li></a>
                                    <li><a href="gallery.php" id="galery_click" style="border-bottom-style:solid; 
                                        border-bottom-color: #efb21a;
                                        border-width:5px;
                                        height: 35px;">Gallery</li></a>
                                    <li><a href="contact.php">Contact</li></a>
                                    <li><a href="store.php">Store</li></a>
                                </ul>
                            </nav>
                        </div><!--end of menu-->
                    </div><!--end of menu_logo-->  
                </header> <!--end of header--> 
                 
            </div><!--/ Codrops top bar -->
            
            
            <div id="content_gallery">
            <?php 

               echo "<div id='gallery_form' style='color:white;'>";
               if(isset($_GET["alert"])){$msg=$_GET["alert"]; echo $msg;}
               echo "<h1 style='font-size:500%; color:white;'>Add Photo</h1>";
               echo "<form action='gallery_admin_action.php' method='post' class ='form-group' enctype='multipart/form-data'>";
                   echo "<input type='file' name='photo' class = 'form-control' style='width:100%;'>"."<br />";
                   echo "<input type='submit' value='Add' class = 'btn btn-primary' style='width:50%; margin-left:10vh;'>";
               echo "</form>";//end of form 
               echo "</div>";


            ?>    
                
                
            </div><!--end of content_gallery-->
        </div><!--end of container-->
        <footer style="background-color:#2b2c30;"><p class="footer" style="color:white;">Copyright</p></footer>
        
    </body>
</html>