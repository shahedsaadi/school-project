<?php
    include "php_code/connection.php";


// Timetable/////////////////////////////////////////////////////////////////////

    //information of timetible =sunday=
        $id1t = 'sun1';
        $query1 ="SELECT * FROM  timetable WHERE day_time ='{$id1t}'";
        $result1 = mysqli_query($con, $query1);
        $resultCheck1 = mysqli_num_rows($result1);

    //information of timetible =monday=
        $id2t = 'mon1';
        $query2 ="SELECT * FROM  timetable WHERE day_time ='{$id2t}'";
        $result2 = mysqli_query($con, $query2);
        $resultCheck2 = mysqli_num_rows($result2);

    //information of timetible =tuseday=
        $id3t = 'tue1';
        $query3 ="SELECT * FROM  timetable WHERE day_time ='{$id3t}'";
        $result3 = mysqli_query($con, $query3);
        $resultCheck3 = mysqli_num_rows($result3);

    //information of timetible =wednesday=
        $id4t = 'wed1';
        $query4 ="SELECT * FROM  timetable WHERE day_time ='{$id4t}'";
        $result4 = mysqli_query($con, $query4);
        $resultCheck4 = mysqli_num_rows($result4);

    //information of timetible =thursday=
        $id5t = 'thu1';
        $query5 ="SELECT * FROM  timetable WHERE day_time ='{$id5t}'";
        $result5 = mysqli_query($con, $query5);
        $resultCheck5 = mysqli_num_rows($result5);


// Homework/////////////////////////////////////////////////////////////////////

    //information of homework =sunday=
        $id1h = 'f1';
        $query1h ="SELECT * FROM  homework WHERE id_work ='{$id1h}'";
        $result1h = mysqli_query($con, $query1h);
        $resultCheck1h = mysqli_num_rows($result1h);

    //information of homework =monday=
        $id2h = 'f2';
        $query2h ="SELECT * FROM  homework WHERE id_work ='{$id2h}'";
        $result2h = mysqli_query($con, $query2h);
        $resultCheck2h = mysqli_num_rows($result2h);

    //information of homework =tuseday=
        $id3h = 'f3';
        $query3h ="SELECT * FROM  homework WHERE id_work ='{$id3h}'";
        $result3h = mysqli_query($con, $query3h);
        $resultCheck3h = mysqli_num_rows($result3h);

    //information of homework =wednesday=
        $id4h = 'f4';
        $query4h ="SELECT * FROM  homework WHERE id_work ='{$id4h}'";
        $result4h = mysqli_query($con, $query4h);
        $resultCheck4h = mysqli_num_rows($result4h);

    //information of homework =thursday=
        $id5h = 'f5';
        $query5h ="SELECT * FROM  homework WHERE id_work ='{$id5h}'";
        $result5h = mysqli_query($con, $query5h);
        $resultCheck5h = mysqli_num_rows($result5h);

// Exam/////////////////////////////////////////////////////////////////////

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
        <link rel="stylesheet" type="text/css" href="style/reset.css">
        <link rel="stylesheet" type="text/css" href="style/class.css">
        
    </head>
    
    
<!-- Body ============================================================= -->
    <body>
        <div id="container">
            
            
<!-- Main menu ============================================================= -->
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
            
            
 <!-- Title of bage ======================================================== -->
            <div class="page-title">
                <h1> First Grade </h1>
            </div>
            
            
 <!-- bottuns ============================================================== -->        
            <div class="tab">
                <button class="tablinks" onclick="openpart(event, 'time-table')" id="defaultOpen">Time Table</button>
                <button class="tablinks" onclick="openpart(event, 'home-work')">Homework</button>
                <button class="tablinks" onclick="openpart(event, 'exam-schedule')">Exam Schedule</button>
            </div>
            
            
<!-- Time Table ============================================================ -->
            <div id="time-table" class="tabcontent">
                <div class="divs">
                    <h1 class="tt"> Time Table</h1><br>
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
                            <td class="tt-s" id="s1-1"><?php echo $row1['ta1']; ?></td>
                            <td class="tt-s" id="s1-2"><?php echo $row1['ta2']; ?></td>
                            <td class="tt-s" id="s1-3"><?php echo $row1['ta3']; ?></td>
                            <td class="tt-s" id="s1-4"><?php echo $row1['ta4']; ?></td>
                            <td class="tt-s" id="s1-5"><?php echo $row1['ta5']; ?></td>
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
                            <td class="tt-s" id="s1-1"><?php echo $row2['ta1']; ?></td>
                            <td class="tt-s" id="s1-2"><?php echo $row2['ta2']; ?></td>
                            <td class="tt-s" id="s1-3"><?php echo $row2['ta3']; ?></td>
                            <td class="tt-s" id="s1-4"><?php echo $row2['ta4']; ?></td>
                            <td class="tt-s" id="s1-5"><?php echo $row2['ta5']; ?></td>
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
                            <td class="tt-s" id="s1-1"><?php echo $row3['ta1']; ?></td>
                            <td class="tt-s" id="s1-2"><?php echo $row3['ta2']; ?></td>
                            <td class="tt-s" id="s1-3"><?php echo $row3['ta3']; ?></td>
                            <td class="tt-s" id="s1-4"><?php echo $row3['ta4']; ?></td>
                            <td class="tt-s" id="s1-5"><?php echo $row3['ta5']; ?></td>
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
                            <td class="tt-s" id="s1-1"><?php echo $row4['ta1']; ?></td>
                            <td class="tt-s" id="s1-2"><?php echo $row4['ta2']; ?></td>
                            <td class="tt-s" id="s1-3"><?php echo $row4['ta3']; ?></td>
                            <td class="tt-s" id="s1-4"><?php echo $row4['ta4']; ?></td>
                            <td class="tt-s" id="s1-5"><?php echo $row4['ta5']; ?></td>
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
                            <td class="tt-s" id="s1-1"><?php echo $row5['ta1']; ?></td>
                            <td class="tt-s" id="s1-2"><?php echo $row5['ta2']; ?></td>
                            <td class="tt-s" id="s1-3"><?php echo $row5['ta3']; ?></td>
                            <td class="tt-s" id="s1-4"><?php echo $row5['ta4']; ?></td>
                            <td class="tt-s" id="s1-5"><?php echo $row5['ta5']; ?></td>
                            <?php
                            } }
                            ?>
                          </tr>

                    </table>
                </div>
            </div>
            
            
<!-- Homework ============================================================== -->
            <div id="home-work" class="tabcontent">
                <div class="divs">
                    <h1 class="tt">Homework</h1><br>
                    
                    <!--sunday-->
                    <div>
                        <?php 
                            if($resultCheck1h>=1){
                                while ($row1h = mysqli_fetch_assoc($result1h)){ 
                        ?>
                        <div class="hw-d"><p>Day:  Sunday,  Date:  <?php echo $row1h['date']; ?></p></div>
                        <table class="Tables">
                            <tr>
                                <th class="hw-s">Subject</th>
                                <th class="hw-h"> Home Work </th>       
                            </tr>

                            <tr>
                                <td class="hw-ss"><?php echo $row1h['sub1']; ?></td>
                                <td class="hw-hh"><?php echo $row1h['hw1']; ?></td>
                            </tr>

                            <tr>
                                <td class="hw-ss"><?php echo $row1h['sub2']; ?></td>
                                <td class="hw-hh"><?php echo $row1h['hw2']; ?></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss"><?php echo $row1h['sub3']; ?></td>
                                <td class="hw-hh"><?php echo $row1h['hw3']; ?></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss"><?php echo $row1h['sub4']; ?></td>
                                <td class="hw-hh"><?php echo $row1h['hw4']; ?></td>
                            </tr>

                            <tr>
                                <td class="hw-ss"><?php echo $row1h['sub5']; ?></td>
                                <td class="hw-hh"><?php echo $row1h['hw5']; ?></td>
                            </tr>
                            
                        </table>
                        <?php
                        } }
                        ?>
                    </div>
                
                    <!-- Monday-->
                    <div>
                        <?php 
                            if($resultCheck2h>=1){
                                while ($row2h = mysqli_fetch_assoc($result2h)){ 
                        ?>
                        <div class="hw-d"><p>Day:  Monday,  Date:  <?php echo $row2h['date']; ?></p></div> 
                        <table class="Tables">

                            <tr>
                                <th class="hw-s">Subject</th>
                                <th class="hw-h"> Home Work </th>       
                            </tr>

                            <tr>
                                <td class="hw-ss"><?php echo $row2h['sub1']; ?></td>
                                <td class="hw-hh"><?php echo $row2h['hw1']; ?></td>
                            </tr>

                            <tr>
                                <td class="hw-ss"><?php echo $row2h['sub2']; ?></td>
                                <td class="hw-hh"><?php echo $row2h['hw2']; ?></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss"><?php echo $row2h['sub3']; ?></td>
                                <td class="hw-hh"><?php echo $row2h['hw3']; ?></td>
                            </tr> 

                            <tr>
                                <td class="hw-ss"><?php echo $row2h['sub4']; ?></td>
                                <td class="hw-hh"><?php echo $row2h['hw4']; ?></td>
                            </tr>

                            <tr>
                                <td class="hw-ss"><?php echo $row2h['sub5']; ?></td>
                                <td class="hw-hh"><?php echo $row2h['hw5']; ?></td>
                            </tr>
                        </table>
                        <?php
                        } }
                        ?>
                    </div>
                    
                    <!--Tuseday-->
                    <div>
                        <?php 
                            if($resultCheck3h>=1){
                                while ($row3h = mysqli_fetch_assoc($result3h)){ 
                        ?>
                        <div class="hw-d"><p>Day:  Tuseday,  Date:  <?php echo $row3h['date']; ?></p></div>
                        <table class="Tables">
                        <tr>
                            <th class="hw-s">Subject</th>
                            <th class="hw-h"> Home Work </th>       
                        </tr>

                        <tr>
                            <td class="hw-ss"><?php echo $row3h['sub1']; ?></td>
                            <td class="hw-hh"><?php echo $row3h['hw1']; ?></td>
                        </tr>

                        <tr>
                            <td class="hw-ss"><?php echo $row3h['sub2']; ?></td>
                            <td class="hw-hh"><?php echo $row3h['hw2']; ?></td>
                        </tr> 

                        <tr>
                            <td class="hw-ss"><?php echo $row3h['sub3']; ?></td>
                            <td class="hw-hh"><?php echo $row3h['hw3']; ?></td>
                        </tr>

                        <tr>
                            <td class="hw-ss"><?php echo $row3h['sub4']; ?></td>
                            <td class="hw-hh"><?php echo $row3h['hw4']; ?></td>
                        </tr>

                        <tr>
                            <td class="hw-ss"><?php echo $row3h['sub5']; ?></td>
                            <td class="hw-hh"><?php echo $row3h['hw5']; ?></td>
                        </tr>

                     </table>
                        <?php
                        } }
                        ?>
                    </div>
                    
                    <!--Wednesday-->
                    <div>
                        <?php 
                            if($resultCheck4h>=1){
                                while ($row4h = mysqli_fetch_assoc($result4h)){ 
                        ?>
                        <div class="hw-d"><p>Day:  Wednesday,  Date:  <?php echo $row4h['date']; ?></p></div>
                        <table class="Tables">
                        <tr>
                            <th class="hw-s">Subject</th>
                            <th class="hw-h"> Home Work </th>       
                        </tr>

                        <tr>
                            <td class="hw-ss"><?php echo $row4h['sub1']; ?></td>
                            <td class="hw-hh"><?php echo $row4h['hw1']; ?></td>
                        </tr>

                        <tr>
                            <td class="hw-ss"><?php echo $row4h['sub2']; ?></td>
                            <td class="hw-hh"><?php echo $row4h['hw2']; ?></td>
                        </tr> 

                        <tr>
                            <td class="hw-ss"><?php echo $row4h['sub3']; ?></td>
                            <td class="hw-hh"><?php echo $row4h['hw3']; ?></td>
                        </tr> 

                        <tr>
                            <td class="hw-ss"><?php echo $row4h['sub4']; ?></td>
                            <td class="hw-hh"><?php echo $row4h['hw4']; ?></td>
                        </tr>

                        <tr>
                            <td class="hw-ss"><?php echo $row4h['sub5']; ?></td>
                            <td class="hw-hh"><?php echo $row4h['hw5']; ?></td>
                        </tr> 

                     </table>
                        <?php
                        } }
                        ?>
                    </div>
                    
                    <!--Thursday-->
                    <div>
                        <?php 
                            if($resultCheck5h>=1){
                                while ($row5h = mysqli_fetch_assoc($result5h)){ 
                        ?>
                        <div class="hw-d"><p>Day:  Thursday,  Date:  <?php echo $row5h['date']; ?></p></div>
                        <table class="Tables">
                        <tr>
                            <th class="hw-s">Subject</th>
                            <th class="hw-h"> Home Work </th>       
                        </tr>

                        <tr>
                            <td class="hw-ss"><?php echo $row5h['sub1']; ?></td>
                            <td class="hw-hh"><?php echo $row5h['hw1']; ?></td>
                        </tr>

                        <tr>
                            <td class="hw-ss"><?php echo $row5h['sub2']; ?></td>
                            <td class="hw-hh"><?php echo $row5h['hw2']; ?></td>
                        </tr> 

                        <tr>
                            <td class="hw-ss"><?php echo $row5h['sub3']; ?></td>
                            <td class="hw-hh"><?php echo $row5h['hw3']; ?></td>
                        </tr> 

                        <tr>
                            <td class="hw-ss"><?php echo $row5h['sub4']; ?></td>
                            <td class="hw-hh"><?php echo $row5h['hw4']; ?></td>
                        </tr>

                        <tr>
                            <td class="hw-ss"><?php echo $row5h['sub5']; ?></td>
                            <td class="hw-hh"><?php echo $row5h['hw5']; ?></td>
                        </tr> 

                     </table>
                        <?php
                        } }
                        ?>
                    </div>
                     
                </div>
            </div>
            
            
<!-- Exams schedule ======================================================== -->
            <div id="exam-schedule" class="tabcontent">
                <div class="divs">
                    
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
                            <td class="ex-day"><?php echo $rowe1['day']; ?></td>
                            <td class="ex-sub"><?php echo $rowe1['grade1']; ?></td>
                            <td class="ex-dat"><?php echo $rowe1['date']; ?></td>
                            <?php
                                } }
                            ?>
                        </tr>

                        <tr>
                            <?php 
                            if($resultChecke2>=1){
                                while ($rowe2 = mysqli_fetch_assoc($resulte2)){
                            ?>
                            <td class="ex-day"><?php echo $rowe2['day']; ?></td>
                            <td class="ex-sub"><?php echo $rowe2['grade1']; ?></td>
                            <td class="ex-dat"><?php echo $rowe2['date']; ?></td>
                            <?php
                                } }
                            ?>
                        </tr>

                        <tr>
                            <?php 
                            if($resultChecke3>=1){
                                while ($rowe3 = mysqli_fetch_assoc($resulte3)){
                            ?>
                            <td class="ex-day"><?php echo $rowe3['day']; ?></td>
                            <td class="ex-sub"><?php echo $rowe3['grade1']; ?></td>
                            <td class="ex-dat"><?php echo $rowe3['date']; ?></td>
                            <?php
                                } }
                            ?>
                        </tr>

                        <tr>
                            <?php 
                            if($resultChecke4>=1){
                                while ($rowe4 = mysqli_fetch_assoc($resulte4)){
                            ?>
                            <td class="ex-day"><?php echo $rowe4['day']; ?></td>
                            <td class="ex-sub"><?php echo $rowe4['grade1']; ?></td>
                            <td class="ex-dat"><?php echo $rowe4['date']; ?></td>
                            <?php
                                } }
                            ?>
                        </tr>

                        <tr>
                            <?php 
                            if($resultChecke5>=1){
                                while ($rowe5 = mysqli_fetch_assoc($resulte5)){
                            ?>
                            <td class="ex-day"><?php echo $rowe5['day']; ?></td>
                            <td class="ex-sub"><?php echo $rowe5['grade1']; ?></td>
                            <td class="ex-dat"><?php echo $rowe5['date']; ?></td>
                            <?php
                                } }
                            ?>
                        </tr>

                    </table>
                </div>
            </div>       
            
            
<!-- Footer ================================================================= -->
            <section id="wsfooter">
                <p> Elementary School </p>
            
            </section>

            
<!-- script ==================================================================== -->
            <script>
                function openpart(evt, PartName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";}
                    
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");}
                    
                    document.getElementById(PartName).style.display = "block";
                    evt.currentTarget.className += " active";}
                
                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
            </script>
 
            
        </div>
    </body>
</html>
            