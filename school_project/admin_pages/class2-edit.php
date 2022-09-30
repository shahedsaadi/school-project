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

// Timetable/////////////////////////////////////////////////////////////////////

    // update timetible
        if(isset($_POST['timetable'])){
            $id1t = 'sun2';
            $sun1 = trim($_POST['s1']);
            $sun2 = trim($_POST['s2']);
            $sun3 = trim($_POST['s3']);
            $sun4 = trim($_POST['s4']);
            $sun5 = trim($_POST['s5']);
            $sql="UPDATE timetable set ta1='{$sun1}', ta2='{$sun2}', ta3='{$sun3}', ta4='{$sun4}', ta5='{$sun5}' WHERE day_time ='{$id1t}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();

            $id2t = 'mon2';
            $mon1 = trim($_POST['m1']);
            $mon2 = trim($_POST['m2']);
            $mon3 = trim($_POST['m3']);
            $mon4 = trim($_POST['m4']);
            $mon5 = trim($_POST['m5']);
            $sql="UPDATE timetable set ta1='{$mon1}', ta2='{$mon2}', ta3='{$mon3}', ta4='{$mon4}', ta5='{$mon5}' WHERE day_time ='{$id2t}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            
            $id3t = 'tue2';
            $tue1 = trim($_POST['t1']);
            $tue2 = trim($_POST['t2']);
            $tue3 = trim($_POST['t3']);
            $tue4 = trim($_POST['t4']);
            $tue5 = trim($_POST['t5']);
            $sql="UPDATE timetable set ta1='{$tue1}', ta2='{$tue2}', ta3='{$tue3}', ta4='{$tue4}', ta5='{$tue5}' WHERE day_time ='{$id3t}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            
            $id4t = 'wed2';
            $wed1 = trim($_POST['w1']);
            $wed2 = trim($_POST['w2']);
            $wed3 = trim($_POST['w3']);
            $wed4 = trim($_POST['w4']);
            $wed5 = trim($_POST['w5']);
            $sql="UPDATE timetable set ta1='{$wed1}', ta2='{$wed2}', ta3='{$wed3}', ta4='{$wed4}', ta5='{$wed5}' WHERE day_time ='{$id4t}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            
            $id5t = 'thu2';
            $thu1 = trim($_POST['r1']);
            $thu2 = trim($_POST['r2']);
            $thu3 = trim($_POST['r3']);
            $thu4 = trim($_POST['r4']);
            $thu5 = trim($_POST['r5']);
            $sql="UPDATE timetable set ta1='{$thu1}', ta2='{$thu2}', ta3='{$thu3}', ta4='{$thu4}', ta5='{$thu5}' WHERE day_time ='{$id5t}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();
        }


    //information of timetible =sunday=
        $id1t = 'sun2';
        $query1 ="SELECT * FROM  timetable WHERE day_time ='{$id1t}'";
        $result1 = mysqli_query($con, $query1);
        $resultCheck1 = mysqli_num_rows($result1);

    //information of timetible =monday=
        $id2t = 'mon2';
        $query2 ="SELECT * FROM  timetable WHERE day_time ='{$id2t}'";
        $result2 = mysqli_query($con, $query2);
        $resultCheck2 = mysqli_num_rows($result2);

    //information of timetible =tuseday=
        $id3t = 'tue2';
        $query3 ="SELECT * FROM  timetable WHERE day_time ='{$id3t}'";
        $result3 = mysqli_query($con, $query3);
        $resultCheck3 = mysqli_num_rows($result3);

    //information of timetible =wednesday=
        $id4t = 'wed2';
        $query4 ="SELECT * FROM  timetable WHERE day_time ='{$id4t}'";
        $result4 = mysqli_query($con, $query4);
        $resultCheck4 = mysqli_num_rows($result4);

    //information of timetible =thursday=
        $id5t = 'thu2';
        $query5 ="SELECT * FROM  timetable WHERE day_time ='{$id5t}'";
        $result5 = mysqli_query($con, $query5);
        $resultCheck5 = mysqli_num_rows($result5);



// Homework/////////////////////////////////////////////////////////////////////

 /////////////SUNDAY///////////////
    // update Homework =sunday=
        if(isset($_POST['savesun'])){
            $id1h = 's1';
            $date1 = trim($_POST['suDate']);
            $sub1 = trim($_POST['su1']);
            $hw1 = trim($_POST['hw1']);
            $sub2 = trim($_POST['su2']);
            $hw2 = trim($_POST['hw2']);
            $sub3 = trim($_POST['su3']);
            $hw3 = trim($_POST['hw3']);
            $sub4 = trim($_POST['su4']);
            $hw4 = trim($_POST['hw4']);
            $sub5 = trim($_POST['su5']);
            $hw5 = trim($_POST['hw5']);
            $sql="UPDATE homework set date='{$date1}', sub1='{$sub1}', hw1='{$hw1}', sub2='{$sub2}', hw2='{$hw2}',  sub3='{$sub3}', hw3='{$hw3}',  sub4='{$sub4}', hw4='{$hw4}',  sub5='{$sub5}', hw5='{$hw5}' WHERE id_work ='{$id1h}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();}

  //information of homework =sunday=
        $id1h = 's1';
        $query1h ="SELECT * FROM  homework WHERE id_work ='{$id1h}'";
        $result1h = mysqli_query($con, $query1h);
        $resultCheck1h = mysqli_num_rows($result1h);


/////////////MONDAY///////////////
    // update Homework =monday=
        if(isset($_POST['savemon'])){
            $id2h = 's2';
            $date2 = trim($_POST['moDate']);
            $sub1 = trim($_POST['mosu1']);
            $hw1 = trim($_POST['mohw1']);
            $sub2 = trim($_POST['mosu2']);
            $hw2 = trim($_POST['mohw2']);
            $sub3 = trim($_POST['mosu3']);
            $hw3 = trim($_POST['mohw3']);
            $sub4 = trim($_POST['mosu4']);
            $hw4 = trim($_POST['mohw4']);
            $sub5 = trim($_POST['mosu5']);
            $hw5 = trim($_POST['mohw5']);
            $sql="UPDATE homework set date='{$date2}', sub1='{$sub1}', hw1='{$hw1}', sub2='{$sub2}', hw2='{$hw2}', sub3='{$sub3}', hw3='{$hw3}', sub4='{$sub4}', hw4='{$hw4}', sub5='{$sub5}', hw5='{$hw5}' WHERE id_work ='{$id2h}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();}

    //information of homework =monday=
        $id2h = 's2';
        $query2h ="SELECT * FROM  homework WHERE id_work ='{$id2h}'";
        $result2h = mysqli_query($con, $query2h);
        $resultCheck2h = mysqli_num_rows($result2h);


/////////////TUSEDAY///////////////
    // update Homework =tuesday=
        if(isset($_POST['savetue'])){
            $id3h = 's3';
            $date3 = trim($_POST['tuDate']);
            $sub1 = trim($_POST['tusu1']);
            $hw1 = trim($_POST['tuhw1']);
            $sub2 = trim($_POST['tusu2']);
            $hw2 = trim($_POST['tuhw2']);
            $sub3 = trim($_POST['tusu3']);
            $hw3 = trim($_POST['tuhw3']);
            $sub4 = trim($_POST['tusu4']);
            $hw4 = trim($_POST['tuhw4']);
            $sub5 = trim($_POST['tusu5']);
            $hw5 = trim($_POST['tuhw5']);
            $sql="UPDATE homework set date='{$date3}', sub1='{$sub1}', hw1='{$hw1}', sub2='{$sub2}', hw2='{$hw2}', sub3='{$sub3}', hw3='{$hw3}', sub4='{$sub4}', hw4='{$hw4}', sub5='{$sub5}', hw5='{$hw5}' WHERE id_work ='{$id3h}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();}

    //information of homework =tuseday=
        $id3h = 's3';
        $query3h ="SELECT * FROM  homework WHERE id_work ='{$id3h}'";
        $result3h = mysqli_query($con, $query3h);
        $resultCheck3h = mysqli_num_rows($result3h);


/////////////WEDNESDAY///////////////
    // update Homework =wednesday=
        if(isset($_POST['savewed'])){
            $id4h = 's4';
            $date4 = trim($_POST['weDate']);
            $sub1 = trim($_POST['wesu1']);
            $hw1 = trim($_POST['wehw1']);
            $sub2 = trim($_POST['wesu2']);
            $hw2 = trim($_POST['wehw2']);
            $sub3 = trim($_POST['wesu3']);
            $hw3 = trim($_POST['wehw3']);
            $sub4 = trim($_POST['wesu4']);
            $hw4 = trim($_POST['wehw4']);
            $sub5 = trim($_POST['wesu5']);
            $hw5 = trim($_POST['wehw5']);
            $sql="UPDATE homework set date='{$date4}', sub1='{$sub1}', hw1='{$hw1}', sub2='{$sub2}', hw2='{$hw2}', sub3='{$sub3}', hw3='{$hw3}', sub4='{$sub4}', hw4='{$hw4}', sub5='{$sub5}', hw5='{$hw5}' WHERE id_work ='{$id4h}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();}

    //information of homework =wednesday=
        $id4h = 's4';
        $query4h ="SELECT * FROM  homework WHERE id_work ='{$id4h}'";
        $result4h = mysqli_query($con, $query4h);
        $resultCheck4h = mysqli_num_rows($result4h);


/////////////THURSDAY///////////////
    // update Homework =thursday=
        if(isset($_POST['savethu'])){
            $id5h = 's5';
            $date5 = trim($_POST['thDate']);
            $sub1 = trim($_POST['thsu1']);
            $hw1 = trim($_POST['thhw1']);
            $sub2 = trim($_POST['thsu2']);
            $hw2 = trim($_POST['thhw2']);
            $sub3 = trim($_POST['thsu3']);
            $hw3 = trim($_POST['thhw3']);
            $sub4 = trim($_POST['thsu4']);
            $hw4 = trim($_POST['thhw4']);
            $sub5 = trim($_POST['thsu5']);
            $hw5 = trim($_POST['thhw5']);
            $sql="UPDATE homework set date='{$date5}', sub1='{$sub1}', hw1='{$hw1}', sub2='{$sub2}', hw2='{$hw2}', sub3='{$sub3}', hw3='{$hw3}', sub4='{$sub4}', hw4='{$hw4}', sub5='{$sub5}', hw5='{$hw5}' WHERE id_work ='{$id5h}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();}
    //information of homework =thursday=
        $id5h = 's5';
        $query5h ="SELECT * FROM  homework WHERE id_work ='{$id5h}'";
        $result5h = mysqli_query($con, $query5h);
        $resultCheck5h = mysqli_num_rows($result5h);


// Exam/////////////////////////////////////////////////////////////////////

    // update Homework =thursday=
        if(isset($_POST['saveexam'])){
            
            $ide1 = '1';
            $day1 = trim($_POST['eday1']);
            $subject1 = trim($_POST['es1']);
            $datee1 = trim($_POST['edate1']);
            $sql="UPDATE exam_schedule set day='{$day1}', date='{$datee1}', grade2='{$subject1}' WHERE id_exam ='{$ide1}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            
            $ide2 = '2';
            $day2 = trim($_POST['eday2']);
            $subject2 = trim($_POST['es2']);
            $datee2 = trim($_POST['edate2']);
            $sql="UPDATE exam_schedule set day='{$day2}', date='{$datee2}', grade2='{$subject2}' WHERE id_exam ='{$ide2}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            
            $ide3 = '3';
            $day3 = trim($_POST['eday3']);
            $subject3 = trim($_POST['es3']);
            $datee3 = trim($_POST['edate3']);
            $sql="UPDATE exam_schedule set day='{$day3}', date='{$datee3}', grade2='{$subject3}' WHERE id_exam ='{$ide3}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            
            $ide4 = '4';
            $day4 = trim($_POST['eday4']);
            $subject4 = trim($_POST['es4']);
            $datee4 = trim($_POST['edate4']);
            $sql="UPDATE exam_schedule set day='{$day4}', date='{$datee4}', grade2='{$subject4}' WHERE id_exam ='{$ide4}'";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            
            $ide5 = '5';
            $day5 = trim($_POST['eday5']);
            $subject5 = trim($_POST['es5']);
            $datee5 = trim($_POST['edate5']);
            $sql="UPDATE exam_schedule set day='{$day5}', date='{$datee5}', grade2='{$subject5}' WHERE id_exam ='{$ide5}'";
            $stmt = $con->prepare($sql);
            $stmt->execute(); 
        }


    //exam1
        $ide1 = '1';
        $querye1 ="SELECT * FROM  exam_schedule WHERE id_exam ='{$ide1}'";
        $resulte1 = mysqli_query($con, $querye1);
        $resultChecke1 = mysqli_num_rows($resulte1);

    //exam2
        $ide2 = '2';
        $querye2 ="SELECT * FROM  exam_schedule WHERE id_exam ='{$ide2}'";
        $resulte2 = mysqli_query($con, $querye2);
        $resultChecke2 = mysqli_num_rows($resulte2);

    //exam3
        $ide3 = '3';
        $querye3 ="SELECT * FROM  exam_schedule WHERE id_exam ='{$ide3}'";
        $resulte3 = mysqli_query($con, $querye3);
        $resultChecke3 = mysqli_num_rows($resulte3);

    //exam4
        $ide4 = '4';
        $querye4 ="SELECT * FROM  exam_schedule WHERE id_exam ='{$ide4}'";
        $resulte4 = mysqli_query($con, $querye4);
        $resultChecke4 = mysqli_num_rows($resulte4);

    //exam5
        $ide5 = '5';
        $querye5 ="SELECT * FROM  exam_schedule WHERE id_exam ='{$ide5}'";
        $resulte5 = mysqli_query($con, $querye5);
        $resultChecke5 = mysqli_num_rows($resulte5);

  
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
        <link rel="stylesheet" type="text/css" href="../style/classes-edit.css">
        
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

 
                        
<!-- Page Title =========================================================== -->
            <div class="page-title">
                <h1> Second Grade </h1>
            </div>
          
            
<!-- Time Table ============================================================ -->
            <div id="time-table">
                <div class="divs">
                    <h1 class="tt"> Time Table</h1><br>
                    <form method="post" action="">
                    <table class="Tables">
                          <tr>
                            <th class="tt-h" style="background-color: #caea7b ; color: #97c520">Days</th>
                            <th class="tt-h" style="background-color: #f9b8d5 ; color: #d31269"> 1 </th>
                            <th class="tt-h" style="background-color: #bce6f6 ; color: #1c99ca"> 2 </th>
                            <th class="tt-h" style="background-color: #f8c0ba ; color: #d12715"> 3 </th>
                            <th class="tt-h" style="background-color: #eac8e1 ; color: #a63f8b"> 4 </th>
                            <th class="tt-h" style="background-color: #fff6b3 ; color: #e6cb00"> 5 </th>
                          </tr>
                        
                        <!-- Sunday ===== -->
                          <tr>
                            <?php 
                            if($resultCheck1>=1){
                                while ($row1 = mysqli_fetch_assoc($result1)){ 
                            ?>
                            <td class="tt-d">SUNDAY</td>
                            <td class="tt-s" id="s1-1">
                                <input type="text" name="s1" id="s1" class="cells" value="<?php echo $row1['ta1']; ?>"></td>
                            <td class="tt-s" id="s1-2">
                                <input type="text" name="s2" id="s2" class="cells" value="<?php echo $row1['ta2']; ?>"></td>
                            <td class="tt-s" id="s1-3">
                                <input type="text" name="s3" id="s3" class="cells" value="<?php echo $row1['ta3']; ?>"></td>
                            <td class="tt-s" id="s1-4">
                                <input type="text" name="s4" id="s4" class="cells" value="<?php echo $row1['ta4']; ?>"></td>
                            <td class="tt-s" id="s1-5">
                                <input type="text" name="s5" id="s5" class="cells" value="<?php echo $row1['ta5']; ?>"></td>
                            <?php
                            } }
                            ?>
                          </tr>
                        
                         <!-- Monday ===== -->
                          <tr>
                            <?php 
                            if($resultCheck2>=1){
                                while ($row2 = mysqli_fetch_assoc($result2)){ 
                            ?>
                            <td class="tt-d">MONDAY</td>
                            <td class="tt-s" id="m1-1">
                                <input type="text" name="m1" id="m1" class="cells" value="<?php echo $row2['ta1']; ?>"></td>
                            <td class="tt-s" id="m1-2">
                                <input type="text" name="m2" id="m2" class="cells" value="<?php echo $row2['ta2']; ?>"></td>
                            <td class="tt-s" id="m1-3">
                                <input type="text" name="m3" id="m3" class="cells" value="<?php echo $row2['ta3']; ?>"></td>
                            <td class="tt-s" id="m1-4">
                                <input type="text" name="m4" id="m4" class="cells" value="<?php echo $row2['ta4']; ?>"></td>
                            <td class="tt-s" id="m1-5">
                                <input type="text" name="m5" id="m5" class="cells" value="<?php echo $row2['ta5']; ?>"></td>
                            <?php
                            } }
                            ?>
                          </tr>
                          
                        <!-- Tuseday ===== -->
                          <tr>
                            <?php 
                            if($resultCheck3>=1){
                                while ($row3 = mysqli_fetch_assoc($result3)){ 
                            ?>
                            <td class="tt-d">TUESDAY</td>
                            <td class="tt-s" id="t1-1">
                                <input type="text" name="t1" id="t1" class="cells" value="<?php echo $row3['ta1']; ?>"></td>
                            <td class="tt-s" id="t1-2">
                                <input type="text" name="t2" id="t2" class="cells" value="<?php echo $row3['ta2']; ?>"></td>
                            <td class="tt-s" id="t1-3">
                                <input type="text" name="t3" id="t3" class="cells" value="<?php echo $row3['ta3']; ?>"></td>
                            <td class="tt-s" id="t1-4">
                                <input type="text" name="t4" id="t4" class="cells" value="<?php echo $row3['ta4']; ?>"></td>
                            <td class="tt-s" id="t1-5">
                                <input type="text" name="t5" id="t5" class="cells" value="<?php echo $row3['ta5']; ?>"></td>
                            <?php
                            } }
                            ?>
                          </tr>
                        
                        <!-- Wednesday ===== -->
                          <tr>
                            <?php 
                            if($resultCheck4>=1){
                                while ($row4 = mysqli_fetch_assoc($result4)){ 
                            ?>
                            <td class="tt-d">WEDNESDAY</td>
                            <td class="tt-s" id="w1-1">
                                <input type="text" name="w1" id="w1" class="cells" value="<?php echo $row4['ta1']; ?>"></td>
                            <td class="tt-s" id="w1-2">
                                <input type="text" name="w2" id="w2" class="cells" value="<?php echo $row4['ta2']; ?>"></td>
                            <td class="tt-s" id="w1-3">
                                <input type="text" name="w3" id="w3" class="cells" value="<?php echo $row4['ta3']; ?>"></td>
                            <td class="tt-s" id="w1-4">
                                <input type="text" name="w4" id="w4" class="cells" value="<?php echo $row4['ta4']; ?>"></td>
                            <td class="tt-s" id="w1-5">
                                <input type="text" name="w5" id="w5" class="cells" value="<?php echo $row4['ta5']; ?>"></td>
                            <?php
                            } }
                            ?>
                          </tr>
                        
                        <!-- Thursday ===== -->
                          <tr>
                            <?php 
                            if($resultCheck5>=1){
                                while ($row5 = mysqli_fetch_assoc($result5)){ 
                            ?>
                            <td class="tt-d">THURSDAY</td>
                            <td class="tt-s" id="r1-1">
                                <input type="text" name="r1" id="r1" class="cells" value="<?php echo $row5['ta1']; ?>"></td>
                            <td class="tt-s" id="r1-2">
                                <input type="text" name="r2" id="r2" class="cells" value="<?php echo $row5['ta2']; ?>"></td>
                            <td class="tt-s" id="r1-3">
                                <input type="text" name="r3" id="r3" class="cells" value="<?php echo $row5['ta3']; ?>"></td>
                            <td class="tt-s" id="r1-4">
                                <input type="text" name="r4" id="r4" class="cells" value="<?php echo $row5['ta4']; ?>"></td>
                            <td class="tt-s" id="r1-5">
                                <input type="text" name="r5" id="r5" class="cells" value="<?php echo $row5['ta5']; ?>"></td>
                            <?php
                            } }
                            ?>
                          </tr>
                    </table>
                    <div class="bts-set"><input type="submit" class="btns" name="timetable" id="timetable" value="Save">
                        </div>
                    </form>
                </div>
            </div>
            
            
<!-- Homework ============================================================== -->
            <div id="HomeWork">
                <div class="divs">
                <h1 class="tt">Homework</h1><br>
   
                    <!--sunday-->
                    <form method="post" action="">
                        <?php
                        if($resultCheck1h>=1){
                            while ($row1h = mysqli_fetch_assoc($result1h)){ 
                        ?>
                        <div class="day-date">
                            <p class="dd-set">Day: Sunday, Date: </p>
                            <input type="date" class="dd-set1" name="suDate" id="suDate" value="<?php echo $row1h['date']; ?>">
                        </div>
                        <table class="Tables">
                            <tr>
                                <th class="hw-s">Subject</th>
                                <th class="hw-h"> Home Work </th>       
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="su1" id="su1" class="HWcells" value="<?php echo $row1h['sub1']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="hw1" id="hw1" class="HW-cells" value="<?php echo $row1h['hw1']; ?>"></td>
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="su2" id="su2" class="HWcells" value="<?php echo $row1h['sub2']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="hw2" id="hw2" class="HW-cells" value="<?php echo $row1h['hw2']; ?>"></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="su3" id="su3" class="HWcells" value="<?php echo $row1h['sub3']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="hw3" id="hw3" class="HW-cells" value="<?php echo $row1h['hw3']; ?>"></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="su4" id="su4" class="HWcells" value="<?php echo $row1h['sub4']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="hw4" id="hw4" class="HW-cells" value="<?php echo $row1h['hw4']; ?>"></td>
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="su5" id="su5" class="HWcells" value="<?php echo $row1h['sub5']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="hw5" id="hw5" class="HW-cells" value="<?php echo $row1h['hw5']; ?>"></td>
                            </tr> 

                         </table>
                        <div class="bts-set">
                            <input type="submit" class="btns" name="savesun" id="savesun" value="Save">
                        </div>
                        <?php
                            } }
                        ?>
                    </form>
                    
                    
                    <!--monday-->
                    <form method="post" action="">
                        <?php 
                            if($resultCheck2h>=1){
                                while ($row2h = mysqli_fetch_assoc($result2h)){ 
                        ?>
                        <div class="day-date">
                            <p class="dd-set">Day: Monday, Date: </p>
                            <input type="date" class="dd-set1" name="moDate" id="moDate" value="<?php echo $row2h['date']; ?>">
                        </div>
                        <table class="Tables">
                            <tr>
                                <th class="hw-s">Subject</th>
                                <th class="hw-h"> Home Work </th>       
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="mosu1" id="mosu1" class="HWcells" value="<?php echo $row2h['sub1']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="mohw1" id="mohw1" class="HW-cells" value="<?php echo $row2h['hw1']; ?>"></td>
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="mosu2" id="mosu2" class="HWcells" value="<?php echo $row2h['sub2']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="mohw2" id="mohw2" class="HW-cells" value="<?php echo $row2h['hw2']; ?>"></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="mosu3" id="mosu3" class="HWcells" value="<?php echo $row2h['sub3']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="mohw3" id="mohw3" class="HW-cells" value="<?php echo $row2h['hw3']; ?>"></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="mosu4" id="mosu4" class="HWcells" value="<?php echo $row2h['sub4']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="mohw4" id="mohw4" class="HW-cells" value="<?php echo $row2h['hw4']; ?>"></td>
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="mosu5" id="mosu5" class="HWcells" value="<?php echo $row2h['sub5']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="mohw5" id="mohw5" class="HW-cells" value="<?php echo $row2h['hw5']; ?>"></td>
                            </tr> 

                         </table>
                        <div class="bts-set">
                            <input type="submit" class="btns" name="savemon" id="savemon" value="Save">
                        </div>
                        <?php
                                }}
                        ?>
                    </form> 
                    
                    
                    <!--tuseday-->
                    <form method="post" action="">
                        <?php 
                            if($resultCheck3h>=1){
                                while ($row3h = mysqli_fetch_assoc($result3h)){ 
                        ?>
                        <div class="day-date">
                            <p class="dd-set">Day: Tuseday, Date: </p>
                            <input type="date" class="dd-set1" name="tuDate" id="tuDate" value="<?php echo $row3h['date']; ?>">
                        </div>
                        <table class="Tables">
                            <tr>
                                <th class="hw-s">Subject</th>
                                <th class="hw-h"> Home Work </th>       
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="tusu1" id="tusu1" class="HWcells" value="<?php echo $row3h['sub1']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="tuhw1" id="tuhw1" class="HW-cells" value="<?php echo $row3h['hw1']; ?>"></td>
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="tusu2" id="tusu2" class="HWcells" value="<?php echo $row3h['sub2']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="tuhw2" id="tuhw2" class="HW-cells" value="<?php echo $row3h['hw2']; ?>"></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="tusu3" id="tusu3" class="HWcells" value="<?php echo $row3h['sub3']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="tuhw3" id="tuhw3" class="HW-cells" value="<?php echo $row3h['hw3']; ?>"></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="tusu4" id="tusu4" class="HWcells" value="<?php echo $row3h['sub4']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="tuhw4" id="tuhw4" class="HW-cells" value="<?php echo $row3h['hw4']; ?>"></td>
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="tusu5" id="tusu5" class="HWcells" value="<?php echo $row3h['sub5']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="tuhw5" id="tuhw5" class="HW-cells" value="<?php echo $row3h['hw5']; ?>"></td>
                            </tr> 

                         </table>
                        <div class="bts-set">
                            <input type="submit" class="btns" name="savetue" id="savetue" value="Save">
                        </div>
                        <?php
                        } }
                        ?>
                    </form>
                    
                    
                    <!--wednesday-->
                    <form method="post" action="">
                        <?php 
                            if($resultCheck4h>=1){
                                while ($row4h = mysqli_fetch_assoc($result4h)){ 
                        ?>
                        <div class="day-date">
                            <p class="dd-set">Day: Wednesday, Date: </p>
                            <input type="date" class="dd-set1" name="weDate" id="weDate" value="<?php echo $row4h['date']; ?>">
                        </div>
                        <table class="Tables">
                            <tr>
                                <th class="hw-s">Subject</th>
                                <th class="hw-h"> Home Work </th>       
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="wesu1" id="wesu1" class="HWcells" value="<?php echo $row4h['sub1']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="wehw1" id="wehw1" class="HW-cells" value="<?php echo $row4h['hw1']; ?>"></td>
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="wesu2" id="wesu2" class="HWcells" value="<?php echo $row4h['sub2']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="wehw2" id="wehw2" class="HW-cells" value="<?php echo $row4h['hw2']; ?>"></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="wesu3" id="wesu3" class="HWcells" value="<?php echo $row4h['sub3']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="wehw3" id="tuhw3" class="HW-cells" value="<?php echo $row4h['hw3']; ?>"></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="wesu4" id="wesu4" class="HWcells" value="<?php echo $row4h['sub4']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="wehw4" id="wehw4" class="HW-cells" value="<?php echo $row4h['hw4']; ?>"></td>
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="wesu5" id="wesu5" class="HWcells" value="<?php echo $row4h['sub5']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="wehw5" id="wehw5" class="HW-cells" value="<?php echo $row4h['hw5']; ?>"></td>
                            </tr> 

                         </table>
                        <div class="bts-set">
                            <input type="submit" class="btns" name="savewed" id="savewed" value="Save">
                        </div>
                        <?php
                        } }
                        ?>
                    </form>
                    
                    
                    <!--Thrusday-->
                    <form method="post" action="">
                        <?php 
                            if($resultCheck5h>=1){
                                while ($row5h = mysqli_fetch_assoc($result5h)){ 
                        ?>
                        <div class="day-date">
                            <p class="dd-set">Day: Thursday, Date: </p>
                            <input type="date" class="dd-set1" name="thDate" id="thDate" value="<?php echo $row5h['date']; ?>">
                        </div>
                        <table class="Tables">
                            <tr>
                                <th class="hw-s">Subject</th>
                                <th class="hw-h"> Home Work </th>       
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="thsu1" id="thsu1" class="HWcells" value="<?php echo $row5h['sub1']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="thhw1" id="thhw1" class="HW-cells" value="<?php echo $row5h['hw1']; ?>"></td>
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="thsu2" id="thsu2" class="HWcells" value="<?php echo $row5h['sub2']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="thhw2" id="thhw2" class="HW-cells" value="<?php echo $row5h['hw2']; ?>"></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="thsu3" id="thsu3" class="HWcells" value="<?php echo $row5h['sub3']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="thhw3" id="thhw3" class="HW-cells" value="<?php echo $row5h['hw3']; ?>"></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="thsu4" id="thsu4" class="HWcells" value="<?php echo $row5h['sub4']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="thhw4" id="thhw4" class="HW-cells" value="<?php echo $row5h['hw4']; ?>"></td>
                            </tr>

                            <tr>
                                <td class="hw-ss">
                                    <input type="text" name="thsu5" id="thsu5" class="HWcells" value="<?php echo $row5h['sub5']; ?>"></td>
                                <td class="hw-hh">
                                    <input type="text" name="thhw5" id="thhw5" class="HW-cells" value="<?php echo $row5h['hw5']; ?>"></td>
                            </tr> 

                         </table>
                        <div class="bts-set">
                            <input type="submit" class="btns" name="savethu" id="savethu" value="Save">
                        </div>
                        <?php
                        } }
                        ?>
                    </form>
                    
                    
                </div>
            </div>

            
<!-- Exams schedule ======================================================== -->
            <div id="ExamSchedule">
                <div class="divs">
                    <form method="post" action="">
                        <h1 class="tt">Exams schedule</h1>
                        <br>
                        <table class="Tables">
                           <tr>
                               <th class="es-day">Day</th>
                               <th class="es-s">Subject</th>
                               <th class="es-date">Date</th>
                            </tr>

                            <tr>
                                <?php 
                                if($resultChecke1>=1){
                                    while ($rowe1 = mysqli_fetch_assoc($resulte1)){
                                ?>
                                <td class="ex-day">
                                    <input type="text" name="eday1" id="eday1" class="HWcells" value="<?php echo $rowe1['day']; ?>"></td>
                                <td class="ex-sub">
                                    <input type="text" name="es1" id="es1" class="cells" value="<?php echo $rowe1['grade2']; ?>"></td>
                                <td class="ex-dat">
                                    <input type="date" name="edate1" id="edate1" class="dd-ES" value="<?php echo $rowe1['date']; ?>"></td>
                                <?php
                                    } }
                                ?>
                            </tr>


                            <tr>
                                <?php 
                                if($resultChecke2>=1){
                                    while ($rowe2 = mysqli_fetch_assoc($resulte2)){
                                ?>
                                <td class="ex-day">
                                    <input type="text" name="eday2" id="eday2" class="cells" value="<?php echo $rowe2['day']; ?>"></td>
                                <td class="ex-sub">
                                    <input type="text" name="es2" id="es2" class="cells" value="<?php echo $rowe2['grade2']; ?>"></td>
                                <td class="ex-dat">
                                    <input type="date" name="edate2" id="edate2" class="dd-ES" value="<?php echo $rowe2['date']; ?>"></td>
                                <?php
                                    } }
                                ?>
                            </tr>


                            <tr>
                                <?php 
                                if($resultChecke3>=1){
                                    while ($rowe3 = mysqli_fetch_assoc($resulte3)){
                                ?>
                                <td class="ex-day">
                                    <input type="text" name="eday3" id="eday3" class="cells" value="<?php echo $rowe3['day']; ?>"></td>
                                <td class="ex-sub">
                                    <input type="text" name="es3" id="es3" class="cells" value="<?php echo $rowe3['grade2']; ?>"></td>
                                <td class="ex-dat">
                                    <input type="date" name="edate3" id="edate3" class="dd-ES" value="<?php echo $rowe3['date']; ?>"></td>
                                <?php
                                    } }
                                ?>
                            </tr>

                            <tr>
                                <?php 
                                if($resultChecke4>=1){
                                    while ($rowe4 = mysqli_fetch_assoc($resulte4)){
                                ?>
                                <td class="ex-day">
                                    <input type="text" name="eday4" id="eday4" class="cells" value="<?php echo $rowe4['day']; ?>"></td>
                                <td class="ex-sub">
                                    <input type="text" name="es4" id="es4" class="cells" value="<?php echo $rowe4['grade2']; ?>"></td>
                                <td class="ex-dat">
                                    <input type="date" name="edate4" id="edate4" class="dd-ES" value="<?php echo $rowe4['date']; ?>"></td>
                                <?php
                                    } }
                                ?>
                            </tr>

                            <tr>
                                <?php 
                                if($resultChecke5>=1){
                                    while ($rowe5 = mysqli_fetch_assoc($resulte5)){
                                ?>
                                <td class="ex-day">
                                    <input type="text" name="eday5" id="eday5" class="cells" value="<?php echo $rowe5['day']; ?>"></td>
                                <td class="ex-sub">
                                    <input type="text" name="es5" id="es5" class="cells" value="<?php echo $rowe5['grade2']; ?>"></td>
                                <td class="ex-dat">
                                    <input type="date" name="edate5" id="edate5" class="dd-ES" value="<?php echo $rowe5['date']; ?>"></td>
                                <?php
                                    } }
                                ?>
                            </tr>

                        </table>
                        <div class="bts-set">
                            <input type="submit" name="saveexam" id="saveexam" class="btns" value="Save">
                        </div>
                    </form>
                </div>
            </div>
                   
            
<!-- Footer ================================================================= --> 
            <section id="wsfooter">
                <p> Elementary School </p>
            
            </section>
            
            
        </div>
    </body>
</html>
                       