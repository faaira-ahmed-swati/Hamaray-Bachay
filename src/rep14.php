<html>
    <head>
        <title>Report 14</title>
        <meta charset = "utf-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="report.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body style="background-color:rgb(203, 196, 194);">
        <div id="loading">
            <img src="G.gif" width = "30%"/>
        </div>
        <div class="top">
            <span style="padding-left: 15%;"></span> &#9743; +92456 7689
            <span style="padding-left: 15px;"></span> &#9993; hamaraybachay@alhuda.edu.pk
        </div>
        <div class="MidStrip">      
            <div class="logo">
                <img src="logo.png">
                HAMARAY BACHAY
            </div>
            <nav class="navigation navigation--inline">
                <ul>
                    <li>
                        <a href="HamarayBachayy.html">
                            <div class="TT">Home</div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#">
                            <div class="TT">Notifications</div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#">
                            <div class="TT">Profile</div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="FormBox container">   
            <div class="row">  
                <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class = "col-lg-3 col-md-3 col-sm-3 col-xs-4 SideBox ">    
                    <div class="row">
                        <div class ="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                            <h2>Report 14</h2>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9 GIF">
                            <img src = "admis.gif">
                        </div>
                    </div>
                </div>
                <div class = "col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                    <form class='row' action="" method = "post">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 FormSTD">
                            <div class = "row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 HeadingBox">
                                    <p style="text-align: center;">All info of given Student</p>
                                </div> 
                            </div>
                            <div class = "row">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                    <p style="padding-top: 20%;">Student ID</p>
                                        <input type="number" name="S_ID" placeholder="ID" tabindex="1" />
                                </div>
                            </div>  
                            <div class = "row">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">     
                                    <p>Student Name </p>
                                    <input type="text" name="name" placeholder="Name" tabindex="1" />
                                </div>   
                            </div>
                            <div class = "row">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">     
                                    <p style = "padding-bottom: 20%;"></p>
                                </div>   
                            </div>
                        </div>
                        <div class = "BTN"><input type="submit" name="button" value="Search" /></div>
                    </form>
                </div>
            </div>
        </div>
        <?php
	
            if(isset($_POST["button"]))
            {
                $db_sid = "(DESCRIPTION =
                    (ADDRESS = (PROTOCOL = TCP)(HOST = Turab-PC)(PORT = 1521))
                    (CONNECT_DATA =
                    (SERVER = DEDICATED)
                    (SERVICE_NAME = orcl)
                    )
                )";
                $db_user = "scott"; 
                $db_pass = "1234"; 
                $con = oci_connect($db_user,$db_pass,$db_sid); 
                
                if(isset($_POST["button"]))
                {
                    if($con)
                    { 
                        $sID = $_POST["S_ID"];
                        $s_Name = $_POST["name"];
                        if ($sID == NULL && $s_Name == NULL){
                            echo "<h3>Please Input a Value</h3>";
                        }
                        else{
                            if ($sID == NULL){
                                $Query="select * from student where name = '$s_Name'";
                                $Query_ID = oci_parse($con , $Query);
                                $Execute = oci_execute($Query_ID);
                            }
                            else{
                                $Query="select * from student where student_id = '$sID'";
                                $Query_ID = oci_parse($con , $Query);
                                $Execute = oci_execute($Query_ID);
                            }
                            while($row = oci_fetch_array($Query_ID, OCI_BOTH+OCI_RETURN_NULLS)) 
                            { 
                                $studID = $row['STUDENT_ID'];
                                $mom = $row['MOTHER_ID'];
                                $dad = $row['FATHER_ID'];
                                $guard = $row['GUARDIAN_ID'];
                                //STUD_INFO
                                    echo "<h5>Student Information: </h5>";
                                    echo "<b>Student ID:</b>".$row['STUDENT_ID']."\t"."<b>Mother ID: </b>".$row['MOTHER_ID']."\t"."
                                    <b>FATHER ID: </b>".$row['FATHER_ID']."\t"."<b>GUARD ID: </b>".$row['GUARDIAN_ID']."\t".
                                    "<br><b>NAME: </b>".$row['NAME']."\t"."<b>ADDRESS </b>".$row['ADDRESS']."\t"."<b>GENDER: </b>".$row['GENDER']."\t".
                                    "<br><b>DOB</b>".$row['DOB']."<b>ADMISSION DATE: </b>".$row['DATE_OF_ADMISSION']."\t"."<b>VOUCHER: </b>".$row['VOUCHER_NO']."<br>";
                                    echo "<hr>"; 
                                // SIBLINGS INFO 
                                    $qforS = "select * from student where (mother_id = '$mom' OR father_id = '$dad') AND student_id != '$studID'";
                                    // echo $qforM."<br";
                                    $qidforS = oci_parse($con, $qforS);
                                    oci_execute($qidforS);
                                    echo "<h5>Sibling Information: </h5>";
                                    while ($rowS = oci_fetch_array($qidforS, OCI_BOTH+OCI_RETURN_NULLS)){
                                        echo "<b>Student ID:</b>".$rowS['STUDENT_ID']."\t"."<b>Mother ID: </b>".$rowS['MOTHER_ID']."\t"."
                                        <b>FATHER ID: </b>".$rowS['FATHER_ID']."\t"."<b>GUARD ID: </b>".$rowS['GUARDIAN_ID']."\t".
                                        "<br><b>NAME: </b>".$rowS['NAME']."\t"."<b>ADDRESS </b>".$rowS['ADDRESS']."\t"."<b>GENDER: </b>".$rowS['GENDER']."\t".
                                        "<br><b>DOB</b>".$rowS['DOB']."<b>ADMISSION DATE: </b>".$rowS['DATE_OF_ADMISSION']."\t"."<b>VOUCHER: </b>".$rowS['VOUCHER_NO']."<br>";
                                        echo "<hr>"; 
                                    }
                                    echo "<hr>"; 
                                //MOTHER_INFO
                                    $qforM = "select * from mother where mother_id = '$mom' ";
                                    $qidforM = oci_parse($con, $qforM);
                                    oci_execute($qidforM);
                                    $rowM = oci_fetch_array($qidforM, OCI_BOTH+OCI_RETURN_NULLS);
                                    
                                    echo "<h5>Mother Information: </h5>";
                                    echo "<b>Mother ID: </b>".$rowM['MOTHER_ID']."\t".
                                    "<b>NAME: </b>".$rowM['NAME']."\t"."<b>ADDRESS </b>".$rowM['ADDRESS']."\t"."<b>SPOUSE: </b>".$rowM['SPOUSE_NAME']."\t".
                                    "<br><b>CNIC: </b>".$rowM['CNIC']."\t"."<b>CONTACT: </b>".$rowM['CONTACT']."\t"."<b>EMAIL: </b>".$rowM['EMAIL']."\t".
                                    "<b>INCOME: </b>".$rowM['INCOME']."\t";
                                    echo "<hr>"; 
                                //FATHER INFO
                                    $qforF = "select * from Father where Father_id = '$dad' ";
                                    $qidforF = oci_parse($con, $qforF);
                                    oci_execute($qidforF);
                                    $rowF = oci_fetch_array($qidforF, OCI_BOTH+OCI_RETURN_NULLS);
                                    echo "<h5>Father Information: </h5>";
                                    echo "<b>Father ID: </b>".$rowF['FATHER_ID']."\t".
                                    "<b>NAME: </b>".$rowF['NAME']."\t"."<b>ADDRESS </b>".$rowF['ADDRESS']."\t".
                                    "<br><b>CNIC: </b>".$rowF['CNIC']."\t"."<b>CONTACT: </b>".$rowF['CONTACT']."\t"."<b>EMAIL: </b>".$rowF['EMAIL']."\t".
                                    "<b>INCOME: </b>".$rowF['INCOME']."\t";
                                    echo "<hr>"; 
                                //GUARD_INFO
                                    $qforG = "select * from guardian where guard_id = '$guard' ";
                                    $qidforG = oci_parse($con, $qforG);
                                    oci_execute($qidforG);
                                    $rowG = oci_fetch_array($qidforG, OCI_BOTH+OCI_RETURN_NULLS);
                                    echo "<h5>Guardian Information: </h5>";
                                    echo "<b>Guardian ID: </b>".$rowG['GUARD_ID']."\t".
                                    "<b>NAME: </b>".$rowG['NAME']."\t"."<b>ADDRESS </b>".$rowG['ADDRESS']."\t".
                                    "<br><b>CNIC: </b>".$rowG['CNIC']."\t"."<b>CONTACT: </b>".$rowG['CONTACT']."\t"."<b>EMAIL: </b>".$rowG['EMAIL']."\t".
                                    "<b>RELATION: </b>".$rowG['RELATION']."\t";
                                    echo "<hr>"; 
                                //Class
                                $QueryClass = "select * from registration where student_id = '$studID'";
                                $Query_IDClass = oci_parse($con , $QueryClass);
                                $ExecuteC = oci_execute($Query_IDClass);
                                while($rowCl = oci_fetch_array($Query_IDClass, OCI_BOTH+OCI_RETURN_NULLS)){
                                    $course = $rowCl['COURSE_ID'];
                                    $QueryCourse = "select * from course where course_id = '$course'";
                                    $Query_IDCourse = oci_parse($con , $QueryCourse);
                                    $ExecuteCo = oci_execute($Query_IDCourse);
                                    $rowCourse = oci_fetch_array($Query_IDCourse, OCI_BOTH+OCI_RETURN_NULLS);

                                    echo "<h5>Students Classes: </h5>";
                                    echo "<b>Course: </b>".$rowCourse['COURSE_NAME']."\t"."<b>Class: </b>".$rowCl['CLASS_ID']."\t".
                                    "<b>ENROLLED ON: </b>".$rowCl['DATE_OF_ENROLLMENT'];
                                    echo "<hr>";
                                }
                                echo "<hr>";
                            }
                        }
                    }
                }
            }
        ?>
        <script type="text/javascript">
            var loading = document.getElementById("loading");
            window.addEventListener("load", function(){
                loading.style.height = "100px";
                loading.style.width = "100px";
                loading.style.borderRadius = "50%";
                loading.style.visibility = "hidden";
            });
            
        </script>
    </body>
</html>