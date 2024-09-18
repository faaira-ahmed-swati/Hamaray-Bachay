<html>
    <head>
        <title>Admission</title>
        <meta charset = "utf-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="change.css">
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
                            <h2>Class Change Form</h2>
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
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                    <p style="padding-top: 1%;">Student ID</p>
                                        <input type="number" name="S_ID" placeholder="ID" tabindex="1" required />
                                </div>
                            </div>  
                            <div class = "row">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">     
                                    <p>Class </p>
                                    <input type="number" name="class" placeholder="Class" tabindex="1" required />
                                </div>   
                            </div>
                            <div class = "row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">     
                                    <p>Current Section</p>
                                    <input type="text" name="curr" placeholder="Curr" tabindex="1" required />
                                </div>    
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">     
                                    <p>New Section</p>
                                    <input type="text" name="New" placeholder="New" tabindex="1" required />
                                </div>  
                            </div>
                            <div class = "row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 biginputBox">     
                                    <p>Reason For Class Change</p>
                                    <input type="text" name="reason" placeholder="Reason" tabindex="1" required />
                                </div>
                            </div>
                            <div class = "row">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">     
                                    <p>Approved By</p>
                                    <input type="number" name="empID" placeholder="Employer ID" tabindex="1" required />
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">     
                                    <p>Date</p>
                                    <input type="date" name="date" placeholder="Date"  tabindex="1" required />
                                </div>
                            </div>
                            
                                                
                        </div>
                        <div class = "BTN"><input type="submit" name="button" value="Submit" /></div>
                    </form>
                </div>
            </div>
        </div>

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
   	<?php
		if(isset($_POST["button"]))
		{
			$btn = $_POST["button"];
			if($btn=="Submit")
			{
				$Student_id = $_POST["S_ID"];
				$Class_id = $_POST["class"];
				$Current_Section = $_POST["curr"];
				$New_Section = $_POST["New"];
				$Reason_for_Change = $_POST["reason"];
				$Approved_by = $_POST["empID"];
				$Date_of_Change = $_POST["date"];

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
				if($con)
				{ 
			$Query="INSERT INTO Section_Change(Student_id,Class_id,Current_Section,New_Section,Reason_for_Change,Approved_by,Date_of_Change) VALUES ('$Student_id','$Class_id','$Current_Section','$New_Section','$Reason_for_Change','$Approved_by',TO_DATE('$Date_of_Change','yyyy-mm-dd'))";
					
					$Query_ID = oci_parse($con,$Query);
					$Execute = oci_execute($Query_ID);
					if($Execute)
					{
						echo "<h2 align = center>Insertion Successful</h2>";
					}
				}
				else
				{
					echo "Record not inserted!<br>";
					$e = oci_error($Query_ID);  
					echo $e['message'];
				}
				
				
			}
		}
		
	?>
</html>