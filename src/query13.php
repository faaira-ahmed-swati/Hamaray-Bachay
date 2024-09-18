<html>
	<head>
		<title>Report 13</title>
		<link href = 'https://fonts.googleapis.com/css?family=Sofia' rel = 'stylesheet'/>
		<link rel="stylesheet" href="simple.css">

	</head>
		
	<body body style="background-color:skyblue;">
		<div class = "PAGE">
			<br>
			<form action="query13.php" method="post">
			<table width ="500" align="center">
			<tr><th colspan=4><hr></th></tr>
			<tr>
				<th colspan=2>Enter Date:</th>
				<th><input type="date" name="Number"/><br></th>
				<th><input type="submit" name="button" value="Search Date" /></th>
			</tr>
			<tr><th colspan=4><hr></th></tr>
			</table>
			</form>
			<br>
		</div>
	</body>
	
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
			if($btn=="Search Date")
			{
		
				if($con)
				{ 
					$temp = $_POST["Number"];
					$Query="select student_id,name,
					to_char(date_of_admission,'YYYY-MM-DD') as Admission_Date
					from student 
					where date_of_admission < TO_DATE('$temp','YYYY-MM-DD')";
					$Query_ID = oci_parse($con , $Query);
					$Execute = oci_execute($Query_ID);
					$row = oci_fetch_array($Query_ID);

					
					while($row = oci_fetch_array($Query_ID, OCI_BOTH+OCI_RETURN_NULLS)) 
	 				{ 
						echo "Student ID".": ".$row['STUDENT_ID']."    " ."Name" .": ".$row['NAME']."    " ."Date of Admission" .": ".$row['ADMISSION_DATE']."<br>"; 
	 				}
				}
			}
		}
	?>

			
</html>