<?php
    include "php_code/connection.php";
    
    if(isset($_POST['login_btn'])){
        $uname = mysqli_real_escape_string($con,$_POST['user']);
        $password = mysqli_real_escape_string($con,$_POST['pass']);
        
        if ($uname != "" && $password != ""){
            
            $sql_query = "select count(*) as cntUser from admin where admin_name='".$uname."' and password='".$password."'";
            $result = mysqli_query($con,$sql_query);
            $row = mysqli_fetch_array($result);
            $count = $row['cntUser'];
            if($count > 0){
                $_SESSION['uname'] = $uname;
                header('Location: admin_pages/adminhomepage.php');
            }
            else{
                echo "Invalid username or password";
            }
        }
    } ?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Basic Html5 -->
        <meta charset="utf-8">
        <meta name="author" content="Layn and shahed">
        <meta name="description" content="school web site">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- My Code -->
        <title>Login </title>
        <link rel="stylesheet" type="text/css" href="style/reset.css">
        <link rel="stylesheet" type="text/css" href="style/login.css">
        
    </head>
    
    
<!-- Body ============================================================= -->  
    <body>         
        <div id="container">
        
            
<!-- Main menu ======================================================= -->
            <nav id="menu">
                <h1 id="logo"><b>Elementary School</b></h1>
                <ul class="menu-all"><b>
                    <li class="menu-item"><a href="login.php"> Login</a></li>
                    <li class="menu-item1">|</li>
                    <li class="menu-item"><a href="contact.php"> Contact</a></li>
                    <li class="menu-item1">|</li>
                    <li class="menu-item"><a href="gallery.php"> Gallery</a></li>
                    <li class="menu-item1">|</li>
                    <li class="menu-item"><a href="#"> Classes </a>
                        <div class="sub-contant">
                            <div class="sub-drop">
                                <ul> 
                                    <li><a href="class1.php"> First Grade</a></li>
                                    <li><a href="class2.php"> Second Grade</a></li>
                                    <li><a href="class3.php"> Third Grade</a></li>

                                </ul>
                            </div>
                        </div>
                    
                    </li>
                    <li class="menu-item1">|</li>
                    <li class="menu-item"><a href="about.php"> About School</a></li>
                    <li class="menu-item1">|</li>
                    <li class="menu-item"><a href="Home_Page.php"> Home</a></li></b>
                           
                </ul>
            </nav>
            
            
<!-- login ====================================================================== -->    
            <div class="LoginBox">
                <h1 style="text-align: center;"> Login </h1>
                <form  method="post" action="">
                    <h2 class="name-pass">User Name:</h2>
                    <input type="text" name="user" id="user" class="inputs" placeholder="Enter your name">
                    <h2 class="name-pass">Password: </h2>
                    <input type="password" name="pass" id="pass" class="inputs" placeholder="Enter Password">
                    <button class="btn-login" name="login_btn" id="login_btn">Login</button>
                </form>
            </div>
  
            
<!-- Footer ========================================================= -->       
            <section id="wsfooter">
                <p> Elementary School </p>
            
            </section>
        
            
        </div>        
    </body>
</html>
    