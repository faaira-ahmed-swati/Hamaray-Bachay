<html>
	<head>
		<title>Report 12</title>
		<link href = 'https://fonts.googleapis.com/css?family=Sofia' rel = 'stylesheet'/>
		<link rel="stylesheet" href="simple.css">

	</head>
		
	<body style="background-color:skyblue;">
		<div class = "PAGE">
			<br>
			<form action="rep12.php" method="post">
			<table width ="500" align="center">
			<tr><th colspan=4><hr></th></tr>
			<tr>
				<th colspan=2>Enter Class Level:</th>
				<th><input type="text" name="Number"/><br></th>
				<th><input type="submit" name="button" value="Search Class" /></th>
			</tr>
			<tr><th colspan=4><hr></th></tr>
			</table>
			</form>
			<br>
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
			
			$btn = $_POST["button"];
			if($btn=="Search Class")
			{
		
				if($con)
				{ 
					$temp = $_POST["Number"];
					$Query="select a.class_level,a.boys_count,a.girls_count,b.total_students
						from class a,
						(select sum(girls_count+NVL(boys_count,0)) total_students
						from class
						where class_level=$temp)b
						where a.class_level=$temp";
					$Query_ID = oci_parse($con , $Query);
					$Execute = oci_execute($Query_ID);
					$row = oci_fetch_array($Query_ID);

					$class = $row["CLASS_LEVEL"];
					$boys = $row["BOYS_COUNT"];
					$girls = $row["GIRLS_COUNT"];
					$total = $row["TOTAL_STUDENTS"];
					
					echo"<form action=rep12.php method=post>
						<table width =500 align=center>
							<tr>
								<th>Class:</th>
								<th><input type=text name=NAME value=$class></th>
								<th>Boys Count:</th>
								<th><input type=text name=boy value=$boys><br></th>
							</tr>
							<tr>
								<th>Girls Count:</th>
								<th><input type=text name=girl value=$girls></th>
								<th>Total Students:</th>
								<th><input type=text name=student value=$total></th>
							</tr>
						</table>";
					echo"</form>";
						
				}
			}
		}
	?>
	</body>
			
</html>
