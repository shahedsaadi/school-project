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

// Update Information
if(isset($_POST['btn_cont'])){
    
    // update phoneNo
    $idph =31;
    $phone1 = trim($_POST['1-phone']);
    $sql="UPDATE content_table set  information='{$phone1}' WHERE id_content ='{$idph}'";
        $stmt = $con->prepare($sql);
        $stmt->execute();
    
    // update E-mail
    $idem =32;
    $email1 = trim($_POST['1-email']);
    $sql="UPDATE content_table set  information='{$email1}' WHERE id_content ='{$idem}'";
        $stmt = $con->prepare($sql);
        $stmt->execute();
    
    // update Facebook_Link
    $idface =33;
    $face1 = trim($_POST['1-face']);
    $sql="UPDATE content_table set  information='{$face1}' WHERE id_content ='{$idface}'";
        $stmt = $con->prepare($sql);
        $stmt->execute();

    // update Instagram_Link
    $idinsta =34;
    $insta1 = trim($_POST['1-insta']);
    $sql="UPDATE content_table set  information='{$insta1}' WHERE id_content ='{$idinsta}'";
        $stmt = $con->prepare($sql);
        $stmt->execute();
    
    // update Twitter_Link
     $idtwir =35;
     $twir1 = trim($_POST['1-twir']);
     $sql="UPDATE content_table set  information='{$twir1}' WHERE id_content ='{$idtwir}'";
        $stmt = $con->prepare($sql);
        $stmt->execute();
    
    // update Snapchat_Link
    $idsnap =36;
    $snap1 = trim($_POST['1-snap']);
    $sql="UPDATE content_table set  information='{$snap1}' WHERE id_content ='{$idsnap}'";
        $stmt = $con->prepare($sql);
        $stmt->execute();

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
        <link rel="stylesheet" type="text/css" href="../style/contact-edit.css">
        
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

 
<!-- main Table ==================================================== -->
             <section class="All">
                 <h1>Contact Edit</h1>
                 <form method="post" action="">
                 <div class="Contact">
                     <table class="table">
                         
                         <tr class="head">
                             <th class="headercell"> Title</th>
                             <th class="headerC"> Information</th>
                         </tr>
                         
                         <tr class="tableContent">
                             <?php
                             if($resultCheckN>=1){
                               while ($rowN = mysqli_fetch_assoc($resultN)){ 
                            ?>   
                             <td  class="First">Phone Number</td>
                             <td class="Second"><input type="text" class="cell" name="1-phone" value= "<?php echo $rowN['information']; ?>"></td>
                                                                                                
                             <?php
                                } }
                            ?>
                            
                         </tr>
                          
                         
                         <tr class="tableContent">
                             <?php
                             if($resultCheckE>=1){
                               while ($rowE = mysqli_fetch_assoc($resultE)){ 
                            ?>   
                             <td class="First"> E-mail </td>
                             <td class="Second"><input type="text" class="cell" name="1-email" value="<?php echo $rowE['information']; ?>"></td>
                             
                             <?php
                                } }
                            ?>
                         </tr>
                         
                         
                         <tr class="tableContent">
                             <?php
                             if($resultCheckf>=1){
                               while ($rowf = mysqli_fetch_assoc($resultf)){ 
                            ?>   
                             <td class="First"> Facebook Link </td>
                             <td class="Second"><input type="text" class="cell" name="1-face" value="<?php echo $rowf['information']; ?>"></td>
                             <?php
                                } }
                            ?>
                         </tr>
                         
                         
                         <tr class="tableContent">
                             <?php
                             if($resultChecki>=1){
                               while ($rowi = mysqli_fetch_assoc($resulti)){ 
                            ?>  
                             <td class="First"> Instagram Link </td>
                             <td class="Second"><input type="text" class="cell" name="1-insta" value="<?php echo $rowi['information']; ?>"></td>
                             <?php
                                } }
                            ?>
                         </tr>
                         
                         
                         <tr class="tableContent">
                              <?php
                             if($resultCheckT>=1){
                               while ($rowT = mysqli_fetch_assoc($resultT)){ 
                            ?>
                             <td class="First"> Twitter Link </td>
                             <td class="Second"><input type="text" class="cell" name="1-twir" value="<?php echo $rowT['information']; ?>"></td>
                             <?php
                                } }
                            ?>
                         </tr>
                         
                         
                         <tr class="tableContent">
                            <?php
                             if($resultCheckS>=1){
                               while ($rowS = mysqli_fetch_assoc($resultS)){ 
                            ?>
                             <td class="First"> Snapchat Link </td>
                             <td class="Second"><input type="text" class="cell" name="1-snap" value="<?php echo $rowS['information']; ?>"></td>
                            <?php
                                } }
                            ?> 
                         </tr>
                     </table>
                     
                     
                     
                     <div class="cont-b">
                         <input type="submit" value="Save" class="btnC" name="btn_cont" id="btn_cont">
                     </div>
                 </div>
                 </form>
            </section>
            
                      
<!-- Footer ========================================================= -->  
            <section id="wsfooter">
                <p> Elementary School </p>
            
            </section>
            
            
        </div>
    </body>
</html>
            
            
            
            
            
            
           