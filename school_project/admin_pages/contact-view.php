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

//fetch phoneNo DB
   $idN = 31;
   $queryN ="SELECT information FROM  content_table WHERE id_content ='{$idN}'";
   $resultN = mysqli_query($con, $queryN);
   $resultCheckN = mysqli_num_rows($resultN);

///////////////////////////////////////////////////////////////////////////////////////////////

//fetch E-mail DB
   $idE = 32;
   $queryE ="SELECT information FROM  content_table WHERE id_content ='{$idE}'";
   $resultE = mysqli_query($con, $queryE);
   $resultCheckE = mysqli_num_rows($resultE);

///////////////////////////////////////////////////////////////////////////////////////////////

//fetch Facebook_Link DB
   $idf = 33;
   $queryf ="SELECT information FROM  content_table WHERE id_content ='{$idf}'";
   $resultf = mysqli_query($con, $queryf);
   $resultCheckf = mysqli_num_rows($resultf);

///////////////////////////////////////////////////////////////////////////////////////////////

//fetch Instagram_Link DB
   $idi = 34;
   $queryi ="SELECT information FROM  content_table WHERE id_content ='{$idi}'";
   $resulti = mysqli_query($con, $queryi);
   $resultChecki = mysqli_num_rows($resulti);

///////////////////////////////////////////////////////////////////////////////////////////////

//fetch Twitter_Link DB
   $idT = 35;
   $queryT ="SELECT information FROM  content_table WHERE id_content ='{$idT}'";
   $resultT = mysqli_query($con, $queryT);
   $resultCheckT = mysqli_num_rows($resultT);

///////////////////////////////////////////////////////////////////////////////////////////////

//fetch Snapchat_Link DB
   $idS = 36;
   $queryS ="SELECT information FROM  content_table WHERE id_content ='{$idS}'";
   $resultS = mysqli_query($con, $queryS);
   $resultCheckS = mysqli_num_rows($resultS);

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
        <link rel="stylesheet" type="text/css" href="../style/contact.css">
        
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


<!-- Contact ============================================================= -->
            <section class="contact">
                <h1 class="con-t"><br>Contact Us</h1>
                <div class="contacts">
                    <!-- phone number -->
                    <div class="cont-c">
                        <?php
                        if($resultCheckN>=1){
                            while ($rowN = mysqli_fetch_assoc($resultN)){ 
                        ?>
                        <h3>Call Us</h3>
                        <p><?php echo $rowN['information']; ?></p>
                        <img src="../images/calll.png" class="icons">
                        <?php
                         } }
                        ?>
                    </div>
                    
                    <!-- Email -->
                    <div class="cont-e">
                        <?php
                        if($resultCheckE>=1){
                            while ($rowE = mysqli_fetch_assoc($resultE)){
                        ?> 
                        <h3>Ask Question</h3>
                        <p><?php echo $rowE['information']; ?></p>
                        <img src="../images/email.png" class="icons">
                        <?php
                         } }
                        ?>
                    </div> 
                </div>
               
            </section>
            
            
<!-- social ============================================================ -->
            <section class="social">
                <div class="soocial">
                    <!-- facebook -->
                    <?php
                    if($resultCheckf>=1){
                        while ($rowf = mysqli_fetch_assoc($resultf)){
                            $facebook = $rowf['information'];
                    ?> 
                    <a href='<?php echo $facebook; ?>'><img src="../images/facebook.png" class="soci"></a>
                    <?php
                        } }
                    ?>
                    
                    <!-- instagram -->
                    <?php
                    if($resultChecki>=1){
                        while ($rowi = mysqli_fetch_assoc($resulti)){
                            $instagram = $rowi['information'];
                    ?>
                    <a href='<?php echo $instagram; ?>'><img src="../images/insta.png" class="soci"></a>
                    <?php
                        } }
                    ?>
                    
                    <!-- twitter -->
                    <?php
                    if($resultCheckT>=1){
                        while ($rowT = mysqli_fetch_assoc($resultT)){
                            $twitter = $rowT['information'];
                    ?>
                    <a href='<?php echo $twitter; ?>'><img src="../images/twitter.png" class="soci"></a>
                    <?php
                        } }
                    ?>
                    
                    <!-- snapshat -->
                    <?php
                    if($resultCheckS>=1){
                        while ($rowS = mysqli_fetch_assoc($resultS)){
                            $snap = $rowS['information'];
                    ?>
                    <a href='<?php echo $snap; ?>'><img src="../images/snap.png" class="soci"></a>
                    <?php
                        } }
                    ?>
                </div>                
            </section>
               
            
<!-- Footer ============================================================ -->    
            <section id="wsfooter">
                <p> Elementary School </p>
            
            </section>
        
            
        </div>
    </body>
</html>