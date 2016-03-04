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
                                    <li><a href="store.php">Store</li></a>
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
                echo "<div id='form2'>";
                    echo "<h3 id = 'description1'>"."<strong>"."<h2 class='sat'>Cont<span class='color'>Act</h2>";
                    
                echo "</div>";
                
                echo "<div id='main'>";
                        echo "<div id='form4'>";
                            echo "<div id='cont1'>";
                            echo "<h3 class='con'>Contact Details</h3>";
                            echo "</div>";
                            echo "<p class='con_text' style='width: 40vh;
                             margin-left:10vh;'>".$About."</p>";
                            echo "<div id='info' style='margin-left: 5vh;'>";
                                echo "<div id='image_text'>";
                                    echo "<img src='photo/home.png' class='image'/>";
                                    echo "<p class='info_text'> Your Address : ".$Address."</p>";
                                echo "</div>";
                                echo "<div id='image_text'>";
                                    echo "<img src='photo/phone.png' class='image'/>";
                                    echo "<p class='info_text'> Phone : ".$Phone."</p>";
                                echo "</div>";
                                echo "<div id='image_text'>";
                                    echo "<img src='photo/email.png' class='image'/>";
                                    echo "<p class='info_text'> Email : ".$Email."</p>";
                                echo "</div>";

                            echo "</div>";
                        echo "</div>";//
                        echo "<div id='form3'>";
                            if(isset($_GET["shetyobineba"])){$msg=$_GET["shetyobineba"]; echo "<center>".$msg."<center>";}
                            echo "<form action='contact_action.php' method='post' class ='form-group'>";
                            echo "<input type='text' name='Name' class = 'form-control' placeholder='Name'>"."<br />";
                            echo "<input type='text' name='Surname' class = 'form-control' placeholder='Surname'>"."<br/>";
                            echo "<input type='email' name='Email' class = 'form-control' placeholder='Email'>"."<br />";
                            echo "<textarea rows = '7' name='Message' maxlength='500' class = 'form-control' placeholder = 'Enter your message, maximum 500 charachter'>";
                            echo "</textarea>"."<br />";
                            echo "<input type='submit' value='Send' class = 'btn btn-primary' style='width:100%;'>";
                            echo "</form>";//end of form
                        echo "</div>";
                echo "</div>";

                ?>
            </div><!--end of content_contact-->
        </div><!--end of container-->
        <footer style="background-color:#2b2c30;"><p class="footer" style="color:white; font-size: 113%;">Copyright </p></footer>
    </body>
</html>