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
            <div class="codrops-top" id="codrops-top1" style="width:100%; border: solid 1px black;">
                <header style="width:100%;">
                    <div id="menu_logo" style="margin-left: 20px;">
                        <div id="logo">
                            <a href="index.php"><img src="photo/logo1-2.png"></a>
                        </div><!--end of logo-->
                        <div id="menu" style="margin-top: 19px;">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</li></a>
                                    <li><a href="gallery.php" id="galery_click">Gallery</li></a>
                                    <li><a href="contact.php" style="border-bottom-style:solid; 
                                        border-bottom-color: #efb21a;
                                        border-width:5px;
                                        height: 35px;">Contact</li></a>
                                    <li><a href="#">Store</li></a>
                                </ul>
                            </nav>
                        </div><!--end of menu-->
                    </div><!--end of menu_logo-->  
                </header> <!--end of header--> 
                 
            </div><!--/ Codrops top bar -->
            
            
            <div id="content_contact">
               <?php
                $conn=mysql_pconnect("localhost","root");
                $dbconn=mysql_select_db("ilo_gabelia");
                $select=mysql_query("select * from contact");
                $raodenoba=mysql_num_rows($select);

                for ($i=0; $i < $raodenoba; $i++) { 
                   $rows=mysql_fetch_array($select);
                   $About=$rows["About"];
                   $Address=$rows["Address"];
                   $Phone=$rows["Phone"];
                   $Email=$rows["Email"];
                }

                
                
                echo "<div id='main'>";
                        echo "<div id='form4' style='margin-left:65vh;'>";
                        if(isset($_GET["shetyobineba"])){$msg=$_GET["shetyobineba"]; echo $msg;}
                            echo "<form action='contact_admin_act.php' method='post' class ='form-group'>";
                            echo "<div id='cont1'>";
                            echo "<h3 class='con'>Contact Details</h3>";
                            echo "</div>";
                            echo "<textarea rows = '7' cols='78' name='About' class='con_text' class = 'form-control' 
                             style='color: black; text-align:left;' placeholder='About'>";
                             echo $About;
                            echo "</textarea>"."<br />";
                            
                            echo "<div id='info'>";
                                echo "<div id='image_text'>";
                                    
                                    echo "<input type='text' name='Address' placeholder='Address' value=\"$Address\" class = 'form-control' value='$Address' >";
                                echo "</div>";
                                echo "<div id='image_text'>";
                                    
                                    echo "<input type='text' name='Phone' value=\"$Phone\" class = 'form-control' placeholder='Phone'>";
                                echo "</div>";
                                echo "<div id='image_text'>";
                                    
                                    echo "<input type='text' name='Email' value=\"$Email\" class = 'form-control' placeholder='Email'>".'<br />';
                                    echo "<input type='submit' value='Update' class = 'btn btn-primary' style='width:100%;'>";
                                echo "</div>";

                            echo "</div>";
                            echo "</form>";//end of form
                        echo "</div>";//
                        
                echo "</div>";

                ?>
            </div><!--end of content_contact-->
        </div><!--end of container-->
        <footer style="background-color:#2b2c30;"><p class="footer" style="color:white; font-size: 113%;">Copyright</p></footer>
    </body>
</html>