<?php
    include "php_code/connection.php";

///////////////////////////////////////////////////////////////////////////////////////////////

//Information of Mission section
    $idm =21;
    $query1 ="SELECT title, information FROM  content_table WHERE id_content ='{$idm}'";
    $result1 = mysqli_query($con, $query1);
    $resultCheck1 = mysqli_num_rows($result1);

///////////////////////////////////////////////////////////////////////////////////////////////

//Information of Vision section
    $idv =22;
    $query2 ="SELECT title, information FROM  content_table WHERE id_content ='{$idv}'";
    $result2 = mysqli_query($con, $query2);
    $resultCheck2 = mysqli_num_rows($result2);

///////////////////////////////////////////////////////////////////////////////////////////////

//Information of Goals section
    $idg =23;
    $query3 ="SELECT title, information FROM  content_table WHERE id_content ='{$idg}'";
    $result3 = mysqli_query($con, $query3);
    $resultCheck3 = mysqli_num_rows($result3);
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
        <link rel="stylesheet" type="text/css" href="style/reset.css">
        <link rel="stylesheet" type="text/css" href="style/about.css">
        
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
                    <li class="menu-item"><a> Classes </a>
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
            
            
<!-- hero Picture ==================================================== -->
            <div class="hero-image">
                    
            </div> 
            
            
<!-- mission =========================================================== -->     
            <section class="mission">
                <div class="prag">
                    <?php 
                     if($resultCheck1>=1){
                        while ($row1 = mysqli_fetch_assoc($result1)){ 
                    ?>
                    <h1 style="color:#ff5869">Our Mission</h1>
                    <p style="color: #5d7273"><?php echo $row1['information']; ?></p>
                    <?php
                    } }
                    ?>
                </div>
            </section>
            
            
<!-- vision ========================================================= -->
            <section class="vision">
                <div id="vi-p">
                    <?php 
                     if($resultCheck2>=1){
                        while ($row2 = mysqli_fetch_assoc($result2)){ 
                    ?>
                    <h1 style="color: #ff5869; margin-left: 20px; ">Our Vision</h1>
                    <p><?php echo $row2['information']; ?></p>
                    <?php
                    } }
                    ?>
                </div>
                <div id="vi-i">
                    <img src="images/vision.png">
                </div> 
            </section>
            
            
<!-- goals =========================================================== -->
            <section class="goal">
              <div id="goal-i">
                  <img src="images/goal.png">
              </div>
              <div id="goal-p">
                  <?php 
                     if($resultCheck3>=1){
                        while ($row3 = mysqli_fetch_assoc($result3)){ 
                    ?>
                  <h1 style="color: #ff5869; margin-left: 20px; ">Our Goals</h1>
                  <p style="color: #00a0a8"><?php echo $row3['information']; ?>
                  </p>
                  <?php
                    } }
                  ?>
              </div>
                     
            </section> 
            
            
<!-- last picture ================================================== -->
            <section class="last-pic">
                <div  class="picpic">
                    <img src="images/schoolsub.png">
                </div>
    
            </section>
 
            
<!-- Footer ========================================================= -->
            
            <section id="wsfooter">
                <p> Elementary School </p>
            
            </section>
        
            
        
        
        </div>
    </body>
</html>