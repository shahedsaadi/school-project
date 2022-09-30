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
      
	// update first Ads
	if(isset($_POST['btn_ads1'])){
        $id1 =11;
		$ads1T = trim($_POST['1-ads-title']);
		$ads1P = trim($_POST['1-ads-p']);
        $sql="UPDATE content_table set title='{$ads1T}', information='{$ads1P}' WHERE id_content ='{$id1}'";
        // Prepare statement
        $stmt = $con->prepare($sql);
        // execute the query
        $stmt->execute();}
    //information first ads
        $idA1 = 11;
        $query1 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA1}'";
        $result1 = mysqli_query($con, $query1);
        $resultCheck1 = mysqli_num_rows($result1);


    // update second Ads
	if(isset($_POST['btn_ads2'])){
        $id2 =12;
		$ads2T = trim($_POST['2-ads-title']);
		$ads2P = trim($_POST['2-ads-p']);
        $sql="UPDATE content_table set title='{$ads2T}', information='{$ads2P}' WHERE id_content ='{$id2}'";
        $stmt = $con->prepare($sql);
        $stmt->execute();}
    //information second ads
    $idA2 = 12;
    $query2 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA2}'";
    $result2 = mysqli_query($con, $query2);
    $resultCheck2 = mysqli_num_rows($result2);


    // update third Ads
	if(isset($_POST['btn_ads3'])){
        $id3 =13;
		$ads3T = trim($_POST['3-ads-title']);
		$ads3P = trim($_POST['3-ads-p']);
        $sql="UPDATE content_table set title='{$ads3T}', information='{$ads3P}' WHERE id_content ='{$id3}'";
        $stmt = $con->prepare($sql);
        $stmt->execute();}
    //information third ads
    $idA3 = 13;
    $query3 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA3}'";
    $result3 = mysqli_query($con, $query3);
    $resultCheck3 = mysqli_num_rows($result3);

///////////////////////////////////////////////////////////////////////////////////////////////

    // update about div
	if(isset($_POST['btn_about_home'])){
        $idAbout =14;
		$aboutP = trim($_POST['about_p']);
        $sql="UPDATE content_table set information='{$aboutP}' WHERE id_content ='{$idAbout}'";
        $stmt = $con->prepare($sql);
        $stmt->execute();}
    //information about div
    $idA4 = 14;
    $query4 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA4}'";
    $result4 = mysqli_query($con, $query4);
    $resultCheck4 = mysqli_num_rows($result4);

///////////////////////////////////////////////////////////////////////////////////////////////

    // update hours infoo div
	if(isset($_POST['btn_info_hours'])){
        $idHours =15;
		$infoHours = trim($_POST['info_hours']);
        $sql="UPDATE content_table set information='{$infoHours}' WHERE id_content ='{$idHours}'";
        $stmt = $con->prepare($sql);
        $stmt->execute();}
    //information Hours
    $idA5 = 15;
    $query5 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA5}'";
    $result5 = mysqli_query($con, $query5);
    $resultCheck5 = mysqli_num_rows($result5);


    // update location infoo div
	if(isset($_POST['btn_info_location'])){
        $idLoc =16;
		$infoLoc = trim($_POST['info_location']);
        $sql="UPDATE content_table set information='{$infoLoc}' WHERE id_content ='{$idLoc}'";
        $stmt = $con->prepare($sql);
        $stmt->execute();}
    //information location
    $idA6 = 16;
    $query6 ="SELECT title, information FROM  content_table WHERE id_content ='{$idA6}'";
    $result6 = mysqli_query($con, $query6);
    $resultCheck6 = mysqli_num_rows($result6);


    // update regst infoo div
	if(isset($_POST['btn_info_reges'])){
        $idRegs =17;
		$infoRegs = trim($_POST['info_reges']);
        $sql="UPDATE content_table set information='{$infoRegs}' WHERE id_content ='{$idRegs}'";
        $stmt = $con->prepare($sql);
        $stmt->execute();}
    //information Regestration
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
        <link rel="stylesheet" type="text/css" href="../style/home-edit.css">
   
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
                     
            
      
<!-- hero Img ======================================================== -->
            <div id="hero">
            
            </div>
           
            
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

                 
<!-- Ads section =========================================================== -->
            <section class="ads">
                <h1>The Announcements</h1>
                <div class="aads">
                    <form method="post" action="">
                        <div class="ann" id="ann1">
                            <?php 
                            if($resultCheck1>=1){
                                while ($row1 = mysqli_fetch_assoc($result1)){ 
                            ?>
                            <input type="text" class="adstitle" name="1-ads-title" value="<?php echo $row1['title']; ?>">
                            <textarea rows="6" cols="40" class="adsparag" name="1-ads-p"><?php echo $row1['information']; ?></textarea>
                            <br>
                            <input type="submit" value="Save" class="btns" name="btn_ads1" id="btn_ads1">
                            <?php
                                } }
                            ?>
                        </div>

                        <div class="ann" id="ann2">
                            <?php 
                            if($resultCheck2>=1){
                                while ($row2 = mysqli_fetch_assoc($result2)){ 
                            ?>
                            <input type="text" class="adstitle" name="2-ads-title" value="<?php echo $row2['title']; ?>">
                            <textarea rows="6" cols="40" class="adsparag" name="2-ads-p"><?php echo $row2['information']; ?></textarea>
                            <br>
                            <input type="submit" value="Save" class="btns" name="btn_ads2" id="btn_ads2">
                            <?php
                                } }
                            ?>
                        </div>

                        <div class="ann" id="ann3">
                            <?php 
                            if($resultCheck3>=1){
                                while ($row3 = mysqli_fetch_assoc($result3)){ 
                            ?>
                            <input type="text" class="adstitle" name="3-ads-title" value="<?php echo $row3['title']; ?>">
                            <textarea rows="6" cols="40" class="adsparag" name="3-ads-p"><?php echo $row3['information']; ?></textarea>
                            <br>
                            <input type="submit" value="Save" class="btns" name="btn_ads3" id="btn_ads3">
                            <?php
                                } }
                            ?>
                        </div>
                    </form>
                </div>
            </section>
            

<!-- classes ========================================================= -->       
            <section id="classes">
                <h1> The Classes </h1>
                <div class="row">
                    
                <div class="col-3" id="col1">
                    <header class="cla-header"><h2 style="color: #ff5869;"> First Grade </h2></header>
                    <img src="../images/fg.png" class="PicClasses"><br>
                    <button class="bttn" id="btn1"><a href="class1.php">View</a></button>
                </div>                
                
                <div class="col-3" id="col2">
                    <header class="cla-header"><h2 style="color: #ffc43a;"> Second Grade</h2></header>
                    <img src="../images/sg.png" class="PicClasses"><br>
                    <button class="bttn" id="btn2"><a href="class2.php">View</a></button>
                </div>
                    
                
                <div class="col-3" id="col3">
                    <header class="cla-header"><h2 style="color: #92d14f;"> Third Grade</h2></header>
                    <img src="../images/tg.png" class="PicClasses"><br>
                    <button class="bttn" id="btn3"><a href="class3.php">View</a></button>
                </div>
                </div>
            
            </section>
            

<!-- About School Section ============================================ -->        
            <section id="about">
                <h1> <br> About School <br> </h1>
                <div>
                    <?php
                    if($resultCheck4>=1){
                        while ($row4 = mysqli_fetch_assoc($result4)){
                    ?>
                    <form method="post" action="">
                        <textarea rows="6" cols="40" class="aboutparag" name="about_p"><?php echo $row4['information']; ?></textarea>
                        <br><br>
                        <input type="submit" value="Save" class="btns" name="btn_about_home" id="btn_about_home">
                    </form>
                    <?php
                        } }
                    ?>
                </div>
            </section>
            
                 
<!-- school info Before Footer ====================================== -->  
            <section id="info">
                <div id="inf">
                    <form method="post" action="">
                        <div class="infoo">
                            <?php
                            if($resultCheck5>=1){
                                while ($row5 = mysqli_fetch_assoc($result5)){
                            ?>
                            <h3>Hours</h3>
                            <textarea rows="2" cols="30" class="infoparag" name="info_hours"><?php echo $row5['information']; ?></textarea>
                            <br>
                            <input type="submit" value="Save" class="btns" name="btn_info_hours" id="btn_info_hours">
                            <?php
                                } }
                            ?>
                        </div>
                
                        <div class="infoo">
                            <?php
                            if($resultCheck6>=1){
                                while ($row6 = mysqli_fetch_assoc($result6)){
                            ?>
                            <h3>Location</h3>
                            <textarea rows="2" cols="30" class="infoparag" name="info_location"><?php echo $row6['information']; ?></textarea>
                            <br>
                            <input type="submit" value="Save" class="btns" name="btn_info_location" id="btn_info_location">
                            <?php
                                } }
                            ?>
                        </div>
                        
                        <div class="infoo">
                            <?php
                            if($resultCheck7>=1){
                                while ($row7 = mysqli_fetch_assoc($result7)){
                            ?>
                            <h3>Regestration Time</h3>
                            <textarea rows="2" cols="30" class="infoparag" name="info_reges"><?php echo $row7['information'];?></textarea>
                            <br>
                            <input type="submit" value="Save" class="btns" name="btn_info_reges" id="btn_info_reges">
                            <?php
                                } }
                            ?>
                        </div>
                    </form>
                </div>
            </section>
            
            
<!-- Footer ========================================================= -->       
            <section id="wsfooter">
                <p> Elementary School </p>
            
            </section>
        
            
        </div>
    </body>
</html>