<html>
    <head>
        <title>Accompany</title>
        <meta charset = "utf-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="accompany.css">
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
                <div class = "col-lg-3 col-md-3 col-sm-3 col-xs-3 SideBox ">    
                    <div class="row">
                        <div class ="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h2>Student Accompanying Form</h2>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9 GIF">
                            <img src = "admis.gif">
                        </div>
                    </div>
                </div>
                <div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9" >
                    <form class='row' action="" method = "post">
                        <div class = "col-lg-6 col-md-6 col-sm-6 col-xs-6 FormSTD">
                            <div class = "other">
                                <h4> Student Information </h4>
                            </div>     
                            <div class = "row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <p style="padding-top: 1%;">Roll Number</p>
                                        <input type="number" name="id" placeholder="ID" tabindex="1" required />
                                </div>
                            </div>  
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 FormGRDStff">
                            <div class = "other">
                                <h4> Gaurdian Information </h4>
                            </div>     
                            <div class = "row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <p style="padding-top: 1%;">Gaurdian ID</p>
                                        <input type="number" name="G_ID" placeholder="ID" tabindex="1" required />
                                </div>
                            </div>  
                            <div class = "row">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 biginputBox">     
                                    <p>Reason For Absence</p>
                                    <input type="text" name="reason" placeholder="Reason" tabindex="1" required />
                                </div>
                            </div>
                            <div class = "row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 checkboxBTN">     
                                    <input type="checkbox" id="cb" name="cb" value="Yes">
                                    <label for="vehicle1"> Pregnant</label><br>
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
				$Student_id = $_POST["id"];
				$Guardian_id = $_POST["G_ID"];
				$Reason = $_POST["reason"];
				$Pregnant = $_POST['cb'];

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
			$Query="INSERT INTO Student_Accompany_Form (Reason,Pregnant,Guardian_id,Student_id) values('$Reason','$Pregnant','$Guardian_id','$Student_id')";
					
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