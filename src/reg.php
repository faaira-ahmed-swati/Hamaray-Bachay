<!DOCTYPE html>
<html>
<head>
    <title>Enroll in New course</title>
    <link rel="stylesheet" type="text/css" href="reg.css">
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<body style="background-color: white;">
    
    <div class = "PAGE">
        <div class="sidenav">
        </div>
        <div class="main">
            <!-- <label>Sidebar</label> -->
            <div class = "container">
                <div class="col-lg-2.5 col-md-2.5 col-sm-2.5 col-xs-2.5 buttons">
                    <a href="report11.php" class="btn effect"><label>BACK</label></a>
                </div>
                
                <div class = "topic">
                    <h4>Course Registration Form</h4><br><br>
                </div>

                <form method="post">
                </form>
                <form method="post">
                    <div class = "xyz">
                        <div style = "float:left;">
                            <label>Student ID:</label><br>
                            <input type="text" id="student_id" name="student_id">
                        </div>
                        <div style = "float:left;" class = "next">
                            <label>Course ID:</label><br>
                            <input type="text" id="course_id" name="course_id">
                        </div>
                    </div>
                    <div style = "clear:both;" class = "xyz">
                        <div style = "float:left;" >
                            <label>Class ID:</label><br>
                            <input type="text" id="class_id" name="class_id">
                        </div>
                        <div style = "float:left;" class = "next">
                            <label>Section ID:</label><br>
                            <input type="text" id="section_id" name="section_id">
                        </div>
                    </div>
                    <div style = "clear:both;" class = "xyz">
                        <label>Registration Fee Amount:</label><br>
                        <input type="text" id="reg_fee_amt" name="reg_fee_amt">
                    </div>
                    <div class = "xyz">
                        <label>Registration Date:</label><br>
                        <input type="text" id="reg_date" name="reg_date">
                    </div>
                    
                    <input class = "enroll" type="submit" name="submit" value="Enroll Student">
				</form>
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

            if(isset($_POST["submit"]))
            {
                $student_id = $_POST["student_id"];
                $course_id = $_POST["course_id"];
                $class_id = $_POST["class_id"];
                $section_id = $_POST["section_id"];
                $reg_fee_amt = $_POST["reg_fee_amt"];
                $reg_date = $_POST["reg_date"];

                $query = "SELECT * FROM STUDENT WHERE STUDENT_ID = '$student_id'";
                $query_id = oci_parse($con, $query);
                $query_execute = oci_execute($query_id);
                $data = oci_fetch_array($query_id,OCI_BOTH+OCI_RETURN_NULLS);

                $father_id = $data["FATHER_ID"];
                $mother_id = $data["MOTHER_ID"];

                $query = "SELECT ID FROM STAFF_PARENT WHERE PARENT_ID = '$father_id' OR PARENT_ID = '$mother_id'";
                $query_id = oci_parse($con, $query);
                $query_execute = oci_execute($query_id);
                $data = oci_fetch_array($query_id,OCI_BOTH+OCI_RETURN_NULLS);

                $discount = 0;

                if($data["ID"]!=NULL)
                {
                    $discount = $reg_fee_amt;
                }
                else
                {
                    $query_id = "SELECT COUNT(*) COUNT FROM STUDENT WHERE FATHER_ID = '$father_id' AND MOTHER_ID = '$mother_id'";
                    $query_id = oci_parse($con, $query);
                    $query_execute = oci_execute($query_id);
                    $data = oci_fetch_array($query_id,OCI_BOTH+OCI_RETURN_NULLS);

                    if($data["COUNT"] >= 3)
                    {
                        if($data["COUNT"] == 3)
                        {
                            $discount = 500;                        
                        }
                        else
                        {
                            $count = $data["COUNT"] - 3;
                            $discount = ($count*500);
                        }
                    }
                }

                $query = "INSERT INTO FEE (AMOUNT,DISCOUNT,DUE_DATE) VALUES ('$reg_fee_amt','$discount',TO_DATE('$reg_date','DD/MM/YYYY'))";
                $query_id = oci_parse($con, $query);
                $query_execute = oci_execute($query_id);

                $query = "SELECT CHALLAN_SEQ.CURRVAL CURRVAL FROM DUAL";
                $query_id = oci_parse($con, $query);
                $query_execute = oci_execute($query_id);
                $data = oci_fetch_array($query_id,OCI_BOTH+OCI_RETURN_NULLS);
                $challan_no = $data["CURRVAL"];

                $query = "SELECT * FROM REGISTRATION WHERE STUDENT_ID = '$student_id'";
                $query_id = oci_parse($con, $query);
                $query_execute = oci_execute($query_id);
                $data = oci_fetch_array($query_id,OCI_BOTH+OCI_RETURN_NULLS);

                if($data != NULL)
                {
                    $query = "UPDATE REGISTRATION SET COURSE_ID = '$course_id', CLASS_ID = '$class_id', CHALLAN_NO = '$challan_no', DATE_OF_ENROLLMENT=TO_DATE('$reg_date','DD/MM/YYYY') WHERE STUDENT_ID = '$student_id'";
                    $query_id = oci_parse($con, $query);
                    $query_execute = oci_execute($query_id);
                }
                else
                {
                    $query = "INSERT INTO Registration (Date_of_Enrollment,Student_id,Course_id,Class_id, Challan_No) VALUES (TO_DATE('$reg_date','DD/MM/YYYY'),'$student_id','$course_id','$class_id','$challan_no')";
                    $query_id = oci_parse($con, $query);
                    $query_execute = oci_execute($query_id);
                }

                $query = "INSERT INTO Registration_History (Date_of_Enrollment,Student_id,Course_id,Class_id, Challan_No) VALUES (TO_DATE('$reg_date','DD/MM/YYYY'),'$student_id','$course_id','$class_id','$challan_no')";
                $query_id = oci_parse($con, $query);
                $query_execute = oci_execute($query_id);
            }

        ?>
    </body>
</html>