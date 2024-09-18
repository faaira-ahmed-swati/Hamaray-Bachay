<html>
	<head>
		<title>Update</title>
		<link rel="stylesheet" type="text/css" href="update.css">

	</head>
		
	<body>
	<div class = "PAGE">
        <div class="sidenav">
            
        </div>
        <div class="main">
            <!-- <h2>Sidebar</h2> -->
            <div class = "container">
                <div class="col-lg-2.5 col-md-2.5 col-sm-2.5 col-xs-2.5 buttons">
                    <a href="http://localhost:100/report11.php" class="btn effect"><label>BACK</label></a>
                </div>
				<br>
				<form action="update.php" method="post">
					<table width ="500" >
						<div class = "Enter">
							
						Enter Student ID:
						<input type="text" name="Number"/>
						<input type="submit" name="button" value="Search Student" />
							
						</div>
					</table>
				</form>
				<br>    
        
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
						
						$btn = $_POST["button"];
						if($btn=="Search Student")
						{
					
							if($con)
							{ 
								$temp = $_POST["Number"];
								$Query="select * from Student where Student_id=$temp";
								$Query_ID = oci_parse($con , $Query);
								$Execute = oci_execute($Query_ID);
								$row = oci_fetch_array($Query_ID);

								$name = $row["NAME"];
								$numberID = $row["STUDENT_ID"];
								$gender = $row["GENDER"];
								$dob = $row["DOB"];
								$admission = $row["DATE_OF_ADMISSION"];
								$mother = $row["MOTHER_ID"];
								$father = $row["FATHER_ID"];
								$guardian = $row["GUARDIAN_ID"];
								$address = $row["ADDRESS"];
								$voucher = $row["VOUCHER_NO"];
								
								echo"<form action=update.php method=post>
									<table width =500 align=center>
										<tr>
											<th>Student Name:</th>
											<th><input type=text name=NAME value=$name></th>
											<th>Student ID:</th>
											<th><input type=text name=STUDENT_ID value=$numberID><br></th>
										</tr>
										<tr>
											<th>Gender:</th>
											<th><input type=text name=GENDER value=$gender></th>
											<th>DOB:</th>
											<th><input type=text name=DOB value=$dob></th>
										</tr>
										<tr>
											<th>Date_of_Admission:</th>
											<th><input type=text name=DATE_OF_ADMISSION value=$admission></th>
											<th>Address:</th>
											<th><input type=text name=ADDRESS value=$address></th>
										</tr>
										<tr>
											<th>Mother_id:</th>
											<th><input type=text name=MOTHER_ID value=$mother></th>
											<th>Father_id:</th>
											<th><input type=text name=FATHER_ID value=$father></th>
										</tr>
										<tr>
											<th>Guardian_id:</th>
											<th><input type=text name=GUARDIAN_ID value=$guardian></th>
											<th>Voucher_no:</th>
											<th><input type=text name=VOUCHER_NO value=$voucher></th>
										</tr>
										<tr>
											<th><input type=submit name=button value=Update /></th>
										</tr>
									</table>";
								echo"</form>";
									
							}
						}
						if($btn=="Update")
						{
							$namee = $_POST["NAME"];
							$numberr = $_POST["STUDENT_ID"];
							$genderr = $_POST["GENDER"];
							$dobb = $_POST["DOB"];
							$admissionn = $_POST["DATE_OF_ADMISSION"];
							$motherr = $_POST["MOTHER_ID"];
							$fatherr = $_POST["FATHER_ID"];
							$guardiann = $_POST["GUARDIAN_ID"];
							$addresss = $_POST["ADDRESS"];
							$voucherr = $_POST["VOUCHER_NO"];
								
							$Query2="update Student set Student_id=$numberr, name='$namee', gender='$genderr',DOB='$dobb',Date_of_Admission='$admissionn',Mother_id='$motherr',Father_id='$fatherr', 
							Guardian_id='$guardiann',Address='$addresss', Voucher_No='$voucherr' where Student_id =$numberr";
							$Queryy_ID = oci_parse($con , $Query2);
							$Executee = oci_execute($Queryy_ID);
							if($Executee)
							{
								echo "<h2 align = center>Successfully Updated</h2>";
							}
						}
					}
					else
					{
						echo"<table width =500 align=center>
							<tr>
								<th>Student Name:</th>
								<th><input type=text name=Namee></th>
								<th>Student ID:</th>
								<th><input type=text name=Numberr><br></th>
							</tr>
							<tr>
								<th>Gender:</th>
								<th><input type=text name=genderr></th>
								<th>DOB:</th>	
								<th><input type=text name=dobb></th>
							</tr>
							<tr>
								<th>Date_of_Admission:</th>
								<th><input type=text name=admissionn></th>
								<th>Mother ID:</th>
								<th><input type=text name=motherr></th>
							</tr>
							<tr>
								<th>Father ID:</th>
								<th><input type=text name=fatherr></th>
								<th>Guardian ID:</th>
								<th><input type=text name=guardiann></th>
							</tr>
							<tr>
								<th>Address:</th>
								<th><input type=text name=addresss></th>
								<th>Voucher No:</th>
								<th><input type=text name=voucher></th>
							</tr>
							<tr>
								<th><input type=submit name=button value=Update></th>
								<th></th>
							</tr>";
						echo"</table>";
					}
					
				?>
			</div> 
                
		</div>
				
	</div>
	
	</body>		
</html>