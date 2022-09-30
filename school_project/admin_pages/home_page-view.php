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

///////////////////////////////////////////////////////////////////////////////////////////////

//first ads
    $idA1 = 11;
    $query1 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA1}'";
    $result1 = mysqli_query($con, $query1);
    $resultCheck1 = mysqli_num_rows($result1);

//second ads
    $idA2 = 12;
    $query2 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA2}'";
    $result2 = mysqli_query($con, $query2);
    $resultCheck2 = mysqli_num_rows($result2);

//third ads
    $idA3 = 13;
    $query3 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA3}'";
    $result3 = mysqli_query($con, $query3);
    $resultCheck3 = mysqli_num_rows($result3);

///////////////////////////////////////////////////////////////////////////////////////////////

//about div
    $idA4 = 14;
    $query4 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA4}'";
    $result4 = mysqli_query($con, $query4);
    $resultCheck4 = mysqli_num_rows($result4);

///////////////////////////////////////////////////////////////////////////////////////////////

//Hours
    $idA5 = 15;
    $query5 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA5}'";
    $result5 = mysqli_query($con, $query5);
    $resultCheck5 = mysqli_num_rows($result5);

//location
    $idA6 = 16;
    $query6 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA6}'";
    $result6 = mysqli_query($con, $query6);
    $resultCheck6 = mysqli_num_rows($result6);

//Regestration
    $idA7 = 17;
    $query7 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA7}'";
    $result7 = mysqli_query($con, $query7);
    $resultCheck7 = mysqli_num_rows($result7);

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
        <link rel="stylesheet" type="text/css" href="../style/HomeStyle.css">
        
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
                     
            
<!-- Admin menu ============================================================= -->
            <div id="mySidenav" class="sidenav">
                <a href="adminhomepage.php" id="ِadmin">ِAdmin</a>
                <a href="home-page-edit.php" id="home">Home</a>
                <a href="about-edit.php" id="aboutAmin">About</a>
                <a href="class1-edit.php" id="class1">1st Class</a>
                <a href="class2-edit.php" id="class2">2nd Class</a>
                <a href="class3-edit.php" id="class3">3rd Class</a>
                <a href="contact-edit.php" id="contact">Contact</a>

            </div>

         
<!-- hero Img ======================================================== --> 
            <div id="hero">
            
            </div>
            
                
<!-- Ads section =========================================================== -->
            <section class="ads">
                <h1>The Announcements</h1>
                <div class="aads">
                    
                    <!-- first ads ========== -->
                    <?php 
                     if($resultCheck1>=1){
                        while ($row1 = mysqli_fetch_assoc($result1)){ 
                    ?>
                    <div class="ann" id="ann1">
                        <h2> <?php echo $row1['title']; ?> </h2>
                        <br>
                        <p> <?php echo $row1['information']; ?> </p>
                    </div>
                    <?php
                    } }
                    ?>
                    
                    <!-- second ads ========== -->
                    <?php 
                     if($resultCheck2>=1){
                        while ($row2 = mysqli_fetch_assoc($result2)){ 
                    ?>
                    <div class="ann" id="ann2">
                        <h2><a> <?php echo $row2['title']; ?> </a></h2>
                        <br>
                        <p> <?php echo $row2['information']; ?> </p>
                    </div>
                    <?php
                    } }
                    ?>
                    
                    <!-- third ads ========== -->
                    <?php 
                     if($resultCheck3>=1){
                        while ($row3 = mysqli_fetch_assoc($result3)){ 
                    ?>
                    <div class="ann" id="ann3">
                        <h2><a> <?php echo $row3['title']; ?> </a></h2>
                        <br>
                        <p> <?php echo $row3['information']; ?> </p>
                    </div>
                    <?php
                    } }
                    ?>
                </div>
            </section>
            

<!-- classes ========================================================= -->     
            <section id="classes">
                <h1> The Classes </h1>
                <div class="row">
                    
                <div class="col-3" id="col1">
                    <header class="cla-header"><h2 style="color: #ff5869;"> First Grade </h2></header>
                    <img src="../images/fg.png" class="PicClasses"><br>
                    <button class="bttn" id="btn1"><a href="class1-view.php">View</a></button>
                </div>                
                
                <div class="col-3" id="col2">
                    <header class="cla-header"><h2 style="color: #ffc43a;"> Second Grade</h2></header>
                    <img src="../images/sg.png" class="PicClasses"><br>
                    <button class="bttn" id="btn2"><a href="class2-view.php">View</a></button>
                </div>
                    
                
                <div class="col-3" id="col3">
                    <header class="cla-header"><h2 style="color: #92d14f;"> Third Grade</h2></header>
                    <img src="../images/tg.png" class="PicClasses"><br>
                    <button class="bttn" id="btn3"><a href="class3-view.php">View</a></button>
                </div>
                </div>
            
            </section>
            

<!-- About School Section ============================================ -->     
            <section id="about">
                <?php 
                     if($resultCheck4>=1){
                        while ($row4 = mysqli_fetch_assoc($result4)){ 
                ?>
                <h1> <br> About School <br> </h1>
                <div>
                     <p class="about"><br> <?php echo $row4['information']; ?> <br><br></p> 
                </div>
                <button class="btn"><a href="about-view.php">Read More</a></button>
                <?php
                } }
                ?>
            </section>
        
            
<!-- school info Before Footer ====================================== -->
            <section id="info">
                <div id="inf">
                    
                    <!--Hours ============= --> 
                    <?php 
                     if($resultCheck5>=1){
                        while ($row5 = mysqli_fetch_assoc($result5)){ 
                    ?>
                    <div class="infoo">
                        <h3>Hours</h3>
                        <p> <?php echo $row5['information']; ?> </p>
                    </div>
                    <?php
                     } }
                    ?>
                    
                    <!--Location ============= -->
                    <?php 
                     if($resultCheck6>=1){
                        while ($row6 = mysqli_fetch_assoc($result6)){ 
                    ?>
                    <div class="infoo">
                        <h3>Location</h3>
                        <p> <?php echo $row6['information']; ?> </p>
                    </div>
                    <?php
                     } }
                    ?>

                    <!--Regestration ============= -->
                    <?php 
                     if($resultCheck7>=1){
                        while ($row7 = mysqli_fetch_assoc($result7)){ 
                    ?>
                    <div class="infoo">
                        <h3>Regestration Time</h3>
                        <p> <?php echo $row7['information']; ?> </p>
                    </div>
                    <?php
                     } }
                    ?>
                    
                </div>
            </section>
            
            
<!-- Footer ========================================================= -->     
            <section id="wsfooter">
                <p> Elementary School </p>
            
            </section>
        
            
        </div>   
    </body>
</html>