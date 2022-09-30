<?php
    include "../php_code/connection.php";

    //logout button code
    if(!isset($_SESSION['uname'])){
        header('Location: ../login.php');
    }

    if(isset($_POST['but_logout'])){
        session_destroy();
        header('Location: ../login.php');
    }

?>

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
        <title>School </title>
        <link rel="stylesheet" type="text/css" href="../style/reset.css">
        <link rel="stylesheet" type="text/css" href="../style/adminHomePage.css">
        
    </head>
    
    
<!-- Body ============================================================= -->
    <body>
        <div id="container">
            
            
<!-- Main menu ======================================================= -->  
            <nav id="menu">
                <h1 id="logo"><b>Elementary School</b></h1>
                <ul class="menu-all"><b>
                    <li class="menu-item"><form class="logout_form" method='post' action=""><input type="submit" value="Logout" class="logout_btn" name="but_logout"></form></li>
                    <li class="menu-item1">|</li>
                    <li class="menu-item"><a href="contact-view.php"> Contact</a></li>
                    <li class="menu-item1">|</li>
                    <li class="menu-item"><a href="gallery-view.php"> Gallery</a></li>
                    <li class="menu-item1">|</li>
                    <li class="menu-item"><a> Classes </a>
                        <div class="sub-contant">
                            <div class="sub-drop">
                                <ul> 
                                    <li><a href="class1-view.php"> First Grade</a></li>
                                    <li><a href="class2-view.php"> Second Grade</a></li>
                                    <li><a href="class3-view.php"> Third Grade</a></li>

                                </ul>
                            </div>
                        </div>
                    
                    </li>
                    <li class="menu-item1">|</li>
                    <li class="menu-item"><a href="about-view.php"> About School</a></li>
                    <li class="menu-item1">|</li>
                    <li class="menu-item"><a href="home_page-view.php"> Home</a></li></b>
                           
                </ul>
            </nav>
           
            
<!-- the bages will editing ============================================ -->
            <section class="all">
                <h1>Home Bage Of Admin</h1>
                <div class="theTable">
                    <table class="adminHome">
                        <tr class="header">
                            <th class="headerCells">Bages</th>
                            <th></th>
                            <th></th>
                        </tr>
                        
                        <tr class="table-content">
                            <td  class="FirstCols">Home Bage</td>
                            <td><a href="home_page-view.php" class="othersColls">View</a></td>
                            <td><a href="home-page-edit.php" class="othersColls">Edit</a></td>
                        </tr>
                        
                        <tr class="table-content">
                            <td  class="FirstCols">About School</td>
                            <td><a href="about-view.php" class="othersColls">View</a></td>
                            <td><a href="about-edit.php" class="othersColls">Edit</a></td>
                        </tr>
                        
                        <tr class="table-content">
                            <td  class="FirstCols">First Grade Class</td>
                            <td><a href="class1-view.php" class="othersColls">View</a></td>
                            <td><a href="class1-edit.php" class="othersColls">Edit</a></td>
                        </tr>
                        
                        <tr class="table-content">
                            <td  class="FirstCols">Second Grade Class</td>
                            <td><a href="class2-view.php" class="othersColls">View</a></td>
                            <td><a href="class2-edit.php" class="othersColls">Edit</a></td>
                        </tr>
                        
                        <tr class="table-content">
                            <td  class="FirstCols">Third Grade Class</td>
                            <td><a href="class3-view.php" class="othersColls">View</a></td>
                            <td><a href="class3-edit.php" class="othersColls">Edit</a></td>
                        </tr>
                        
                        <tr class="table-content">
                            <td  class="FirstCols">Contact</td>
                            <td><a href="contact-view.php" class="othersColls">View</a></td>
                            <td><a href="contact-edit.php" class="othersColls">Edit</a></td>
                        </tr>
                        
                    </table>                    
                </div>
            </section>
           
            
<!-- Footer ============================================================ -->
            <section id="wsfooter">
                <p> Elementary School </p>
            
            </section>
            
            
        </div>
    </body>
</html>