<!DOCTYPE html>
<html>
<head>
    <title>Report 11
</title>
<link rel="stylesheet" type="text/css" href="eleven.css">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<body style="background-color: white;">
    
    <div class = "PAGE">
        <div class="sidenav">
            <form action="" method = "post">
                <input type="submit" value="Class 1" name = "oneB"        />
                <input type="submit" value="Class 2" name = "two"       />
                <input type="submit" value="Class 3" name = "three"    />
                <input type="submit" value="Class 4" name = "four"    />
                <input type="submit" value="Class 5" name = "five"   />
            </form>
        </div>
        <div class="main">
            <!-- <h2>Sidebar</h2> -->
            <div class = "container">
                <div class="col-lg-2.5 col-md-2.5 col-sm-2.5 col-xs-2.5 buttons">
                    <a href="http://localhost:100/HamarayBachayy.html" class="btn effect"><label>BACK</label></a>
                </div>
                
                <form class='row' action="" method = "post">
                    <div class = "other">
                        <h4 style="align-items: center;"> Report 11 </h4>
                    </div>     
                    <div>
                        <p style="margin-top: 100px;">
                            Name
                            <input type="text" name="name" placeholder="Name" tabindex="1"/>
                        </p>
                    </div>
                    <div class= "OR">
                        <h4> OR </h4>
                    </div>     
                    <div>
                        <p>
                            ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="number" name="S_ID" placeholder="Roll No" tabindex="1" />
                        </p>
                    </div>  
                    <div class = "marginforbuttons">
                        <div class="left">
                            <div class = "EnrollBTN"><input type="submit" value="Search" name = "button"/></div>
                        </div>    
                        <div class="left">
                            <div class = "EnrollBTN"><input type="submit" value=delete name = "delete"/></div>
                        </div>
                        
                    </div>    
                    <div class="clear">&nbsp;</div>
                </form>
                <div class="Menu">
                    <input type="checkbox" checked/>
                    <div class="hamburger">
                        <div class="dots">
                            <span class="first"></span>
                            <span class="second"></span>
                            <span class="third"></span>
                        </div>
                    </div>
                    <div class="action_items_bar">
                        <div class="action_items">
                            <label class="first_item">
                                <a href="http://localhost:100/update.php">EDIT</a>
                            </label>
                            <label class="fourth_item">
                                <a href="http://localhost:100/reg.php">ADD</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div> 
                
        </div>
        
    </div>
    <?php
	
            
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
        if($con){
            if(isset($_POST["oneB"]))
            {
                $QSec="select * from section_change 
                where class_id = 1 order by current_section";
                $Q_IDSec = oci_parse($con , $QSec);
                $ExecuteSec = oci_execute($Q_IDSec);
                $count = 0;
                while($rowSec = oci_fetch_array($Q_IDSec, OCI_BOTH+OCI_RETURN_NULLS)){
                    $sec_stID = $rowSec['STUDENT_ID']; 
                    
                    $temp = $rowSec['CURRENT_SECTION'];
                    if ($count == 0){
                        echo "<h3>CLASS 1 [".$temp."]</h3><br>";
                    }
                    $count = 1;
                    while($temp == $rowSec['CURRENT_SECTION']){
                        $sec_stID = $rowSec['STUDENT_ID']; 

                        $QST="select * from student where student_id = '$sec_stID'";
                        $Q_IDST = oci_parse($con , $QST);
                        $ExecuteST = oci_execute($Q_IDST);
                        
                        $rowST = oci_fetch_array($Q_IDST, OCI_BOTH+OCI_RETURN_NULLS);
                        echo $rowST['NAME']."\tRoll No:".$sec_stID."\t".$rowST['GENDER']."<br>";
                        echo "<hr>";

                        $rowSec = oci_fetch_array($Q_IDSec, OCI_BOTH+OCI_RETURN_NULLS);
                    }
                    echo "<br><br>";
                    if($rowSec != NULL){
                        echo "<h3>CLASS 1 [".$rowSec['CURRENT_SECTION']."]</h3><br>";

                        $QST="select * from student where student_id = '$sec_stID'";
                        $Q_IDST = oci_parse($con , $QST);
                        $ExecuteST = oci_execute($Q_IDST);
                        
                        $rowST = oci_fetch_array($Q_IDST, OCI_BOTH+OCI_RETURN_NULLS);
                        echo $rowST['NAME']."\t"."Roll No:".$rowST['STUDENT_ID']."\t".$rowST['GENDER']."<br>";
                        echo "<hr>";
                    }
                }
            }
            if(isset($_POST["two"]))
            {
                $QSec="select * from section_change 
                where class_id = 2 order by current_section";
                $Q_IDSec = oci_parse($con , $QSec);
                $ExecuteSec = oci_execute($Q_IDSec);
                $count = 0;
                while($rowSec = oci_fetch_array($Q_IDSec, OCI_BOTH+OCI_RETURN_NULLS)){
                    $sec_stID = $rowSec['STUDENT_ID']; 
                    
                    $temp = $rowSec['CURRENT_SECTION'];
                    if ($count == 0){
                        echo "<h3>CLASS 2 [".$temp."]</h3><br>";
                    }
                    $count = 1;
                    while($temp == $rowSec['CURRENT_SECTION']){
                        $sec_stID = $rowSec['STUDENT_ID']; 

                        $QST="select * from student where student_id = '$sec_stID'";
                        $Q_IDST = oci_parse($con , $QST);
                        $ExecuteST = oci_execute($Q_IDST);
                        
                        $rowST = oci_fetch_array($Q_IDST, OCI_BOTH+OCI_RETURN_NULLS);
                        echo $rowST['NAME']."\tRoll No:".$sec_stID."\t".$rowST['GENDER']."<br>";
                        echo "<hr>";

                        $rowSec = oci_fetch_array($Q_IDSec, OCI_BOTH+OCI_RETURN_NULLS);
                    }
                    echo "<br><br>";
                    if($rowSec != NULL){
                        echo "<h3>CLASS 2 [".$rowSec['CURRENT_SECTION']."]</h3><br>";

                        $QST="select * from student where student_id = '$sec_stID'";
                        $Q_IDST = oci_parse($con , $QST);
                        $ExecuteST = oci_execute($Q_IDST);
                        
                        $rowST = oci_fetch_array($Q_IDST, OCI_BOTH+OCI_RETURN_NULLS);
                        echo $rowST['NAME']."\t"."Roll No:".$rowST['STUDENT_ID']."\t".$rowST['GENDER']."<br>";
                        echo "<hr>";
                    }
                }
            }
            if(isset($_POST["three"]))
            {
                $QSec="select * from section_change 
                where class_id = 3 order by current_section";
                $Q_IDSec = oci_parse($con , $QSec);
                $ExecuteSec = oci_execute($Q_IDSec);
                $count = 0;
                while($rowSec = oci_fetch_array($Q_IDSec, OCI_BOTH+OCI_RETURN_NULLS)){
                    $sec_stID = $rowSec['STUDENT_ID']; 
                    
                    $temp = $rowSec['CURRENT_SECTION'];
                    if ($count == 0){
                        echo "<h3>CLASS 3 [".$temp."]</h3><br>";
                    }
                    $count = 1;
                    while($temp == $rowSec['CURRENT_SECTION']){
                        $sec_stID = $rowSec['STUDENT_ID']; 

                        $QST="select * from student where student_id = '$sec_stID'";
                        $Q_IDST = oci_parse($con , $QST);
                        $ExecuteST = oci_execute($Q_IDST);
                        
                        $rowST = oci_fetch_array($Q_IDST, OCI_BOTH+OCI_RETURN_NULLS);
                        echo $rowST['NAME']."\tRoll No:".$sec_stID."\t".$rowST['GENDER']."<br>";
                        echo "<hr>";

                        $rowSec = oci_fetch_array($Q_IDSec, OCI_BOTH+OCI_RETURN_NULLS);
                    }
                    echo "<br><br>";
                    if($rowSec != NULL){
                        echo "<h3>CLASS 3 [".$rowSec['CURRENT_SECTION']."]</h3><br>";

                        $QST="select * from student where student_id = '$sec_stID'";
                        $Q_IDST = oci_parse($con , $QST);
                        $ExecuteST = oci_execute($Q_IDST);
                        
                        $rowST = oci_fetch_array($Q_IDST, OCI_BOTH+OCI_RETURN_NULLS);
                        echo $rowST['NAME']."\t"."Roll No:".$rowST['STUDENT_ID']."\t".$rowST['GENDER']."<br>";
                        echo "<hr>";
                    }
                }
            }
            if(isset($_POST["four"]))
            {
                $QSec="select * from section_change 
                where class_id = 4 order by current_section";
                $Q_IDSec = oci_parse($con , $QSec);
                $ExecuteSec = oci_execute($Q_IDSec);
                $count = 0;
                while($rowSec = oci_fetch_array($Q_IDSec, OCI_BOTH+OCI_RETURN_NULLS)){
                    $sec_stID = $rowSec['STUDENT_ID']; 
                    
                    $temp = $rowSec['CURRENT_SECTION'];
                    if ($count == 0){
                        echo "<h3>CLASS 4 [".$temp."]</h3><br>";
                    }
                    $count = 1;
                    while($temp == $rowSec['CURRENT_SECTION']){
                        $sec_stID = $rowSec['STUDENT_ID']; 

                        $QST="select * from student where student_id = '$sec_stID'";
                        $Q_IDST = oci_parse($con , $QST);
                        $ExecuteST = oci_execute($Q_IDST);
                        
                        $rowST = oci_fetch_array($Q_IDST, OCI_BOTH+OCI_RETURN_NULLS);
                        echo $rowST['NAME']."\tRoll No:".$sec_stID."\t".$rowST['GENDER']."<br>";
                        echo "<hr>";

                        $rowSec = oci_fetch_array($Q_IDSec, OCI_BOTH+OCI_RETURN_NULLS);
                    }
                    echo "<br><br>";
                    if($rowSec != NULL){
                        echo "<h3>CLASS 4 [".$rowSec['CURRENT_SECTION']."]</h3><br>";

                        $QST="select * from student where student_id = '$sec_stID'";
                        $Q_IDST = oci_parse($con , $QST);
                        $ExecuteST = oci_execute($Q_IDST);
                        
                        $rowST = oci_fetch_array($Q_IDST, OCI_BOTH+OCI_RETURN_NULLS);
                        echo $rowST['NAME']."\t"."Roll No:".$rowST['STUDENT_ID']."\t".$rowST['GENDER']."<br>";
                        echo "<hr>";
                    }
                }
            }
            if(isset($_POST["five"]))
            {
                $QSec="select * from section_change 
                where class_id = 5 order by current_section";
                $Q_IDSec = oci_parse($con , $QSec);
                $ExecuteSec = oci_execute($Q_IDSec);
                $count = 0;
                while($rowSec = oci_fetch_array($Q_IDSec, OCI_BOTH+OCI_RETURN_NULLS)){
                    $sec_stID = $rowSec['STUDENT_ID']; 
                    
                    $temp = $rowSec['CURRENT_SECTION'];
                    if ($count == 0){
                        echo "<h3>CLASS 5 [".$temp."]</h3><br>";
                    }
                    $count = 1;
                    while($temp == $rowSec['CURRENT_SECTION']){
                        $sec_stID = $rowSec['STUDENT_ID']; 

                        $QST="select * from student where student_id = '$sec_stID'";
                        $Q_IDST = oci_parse($con , $QST);
                        $ExecuteST = oci_execute($Q_IDST);
                        
                        $rowST = oci_fetch_array($Q_IDST, OCI_BOTH+OCI_RETURN_NULLS);
                        echo $rowST['NAME']."\tRoll No:".$sec_stID."\t".$rowST['GENDER']."<br>";
                        echo "<hr>";

                        $rowSec = oci_fetch_array($Q_IDSec, OCI_BOTH+OCI_RETURN_NULLS);
                    }
                    echo "<br><br>";
                    if($rowSec != NULL){
                        echo "<h3>CLASS 5 [".$rowSec['CURRENT_SECTION']."]</h3><br>";

                        $QST="select * from student where student_id = '$sec_stID'";
                        $Q_IDST = oci_parse($con , $QST);
                        $ExecuteST = oci_execute($Q_IDST);
                        
                        $rowST = oci_fetch_array($Q_IDST, OCI_BOTH+OCI_RETURN_NULLS);
                        echo $rowST['NAME']."\t"."Roll No:".$rowST['STUDENT_ID']."\t".$rowST['GENDER']."<br>";
                        echo "<hr>";
                    }
                }
            }
            if(isset($_POST["button"]))
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
                            echo "<h3>Student Information: </h3>";
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
                            echo "<h3>Sibling Information: </h3>";
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
                            
                            echo "<h3>Mother Information: </h3>";
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
                            echo "<h3>Father Information: </h3>";
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
                            echo "<h3>Guardian Information: </h3>";
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

                            echo "<h3>Students Classes: </h3>";
                            echo "<b>Course: </b>".$rowCourse['COURSE_NAME']."\t"."<b>Class: </b>".$rowCl['CLASS_ID']."\t".
                            "<b>ENROLLED ON: </b>".$rowCl['DATE_OF_ENROLLMENT'];
                            echo "<hr>";
                        }
                        echo "<hr>";
                    }
                
                }
            }
         
			if(isset($_POST["delete"]))
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
                        $id_del = $row['STUDENT_ID'];
                       
                        $qR=" select * from section_change WHERE STUDENT_ID = '$id_del'";
                        $query_idR = oci_parse($con, $qR); 		
                        $rR = oci_execute($query_idR); 
                        $rowR = oci_fetch_array($query_idR, OCI_BOTH+OCI_RETURN_NULLS);

                        $q=" delete from registration WHERE STUDENT_ID = '$id_del'";
                        $query_id = oci_parse($con, $q); 
                        $r = oci_execute($query_id);

                        $qS=" delete from section_change WHERE STUDENT_ID = '$id_del'";
                        $query_idS = oci_parse($con, $qS); 
                        $rS = oci_execute($query_idS); 
                        if ($rS){
                            echo "<br>Student " .$row['NAME']." " ." deleted from Class".$rowR['CLASS_ID'];
                        }
                        else{
                            echo "<br>RECORD NOT FOUND</br>" ;
                        } 
                    }
                }
			}
		}
                     
        ?>
    </body>
</html>