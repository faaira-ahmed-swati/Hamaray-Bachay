<html>
    <head>
        <title>Admission</title>
        <meta charset = "utf-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="admission.css">
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
                <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">    
                    <div class="SideBox row">
                        <div class = "col-lg-3 col-md-3 col-sm-3 col-xs-3 icon">
                            <img src="icon.png">
                        </div>
                        <div class ="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h2 style="text-align: center;">Student Admission Form</h2>
                        </div>
                        <div class = "col-lg-3 col-md-3 col-sm-3 col-xs-3 GIF">
                            <img src = "admis.gif">
                        </div>
                    </div>
                </div>
                <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                    <form class='row' action="" method = "post">
                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-12 FormSTD">
                            <div class = "other">
                                <h4> Student Information </h4>
                            </div>     
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <p>Name</p>
                                    <input type="text" name="name" placeholder="Name" tabindex="1" required />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <p>Student Photo </p>
                                    <input type="file" name="pic" tabindex="1" required accept="image"/> 
                                </div>   
                            </div>   
                            <div class = "row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <p style="padding-top: 1%;">DOB</p>
                                        <input type="date" name="dob" placeholder="DOB" tabindex="1" required />
                                </div>
                            </div>  
                            <div class = "row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <p>Gender</p>
                                        <input type="text" name="gender" placeholder="Gender" tabindex="1" required />
                                </div>
                            </div>
                            <div class = "row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">     
                                    <p>Adress</p>
                                    <input type="text" name="address" placeholder="Adress" tabindex="1" required />
                                </div>
                            </div>
                            <div class = "row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">     
                                    <p>Voucher Number of admission fee challan</p>
                                    <input type="number" name="voucher" placeholder="Voucher No." tabindex="1" required />
                                </div>
                            </div>
                        </div>                    
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 FormPRNT">            
                            <div class = "other">
                                <h4> Parent Information </h4>
                            </div>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Mother Name</p>
                                    <input type="text" name="mom_name" placeholder="Name" tabindex="1" required />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <p>Father Name </p>
                                    <input type="text" name="dad_name" placeholder="Name" tabindex="1" required />
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Mother CNIC</p>
                                <input type="number" name="mom_cnic" placeholder="CNIC" tabindex="1" required />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Father CNIC </p>
                                <input type="number" name="dad_cnic" placeholder="CNIC" tabindex="1" required />
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Mother Email</p>
                                <input type="email" name="mom_email" placeholder="Email" tabindex="1" required />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Father Email </p>
                                <input type="email" name="mom_email" placeholder="Email" tabindex="1" required />
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Mother Contact</p>
                                <input type="tel" name="mom_contact" placeholder="Contact" tabindex="1" required />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Father Contact </p>
                                <input type="tel" name="dad_contact" placeholder="Contact" tabindex="1" required />
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Mother Income</p>
                                <input type="number" name="mom_income" placeholder="Income" tabindex="1" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Father Income </p>
                                <input type="number" name="dad_income" placeholder="Income" tabindex="1" required />
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Mother Address</p>
                                <input type="text" name="mom_address" placeholder="Address" tabindex="1" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Father Address </p>
                                <input type="text" name="mom_address" placeholder="Address" tabindex="1" />
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Mother Spouse</p>
                                <input type="text" name="spouse" placeholder="Spouse Name" tabindex="1" />
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 FormGRDStff">
                            <div class = "other">
                                <h4> Gaurdian Information </h4>
                            </div>     
                            <div class = "row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">     
                                    <p>Name</p>
                                    <input type="text" name="G_name" placeholder="Name" tabindex="1" required />
                                </div>    
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">     
                                    <p>CNIC</p>
                                    <input type="number" name="G_CNIC" placeholder="CNIC" tabindex="1" required />
                                </div>
                            </div>
                            <div class = "row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">     
                                    <p>Email</p>
                                    <input type="email" name="G_email" placeholder="Email" tabindex="1" required />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">     
                                    <p>Contact</p>
                                    <input type="tel" name="G_contact" placeholder="Contact" tabindex="1" required />
                                </div>
                            </div>
                            <div class = "row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">     
                                    <p>Address</p>
                                    <input type="text" name="G_address" placeholder="Address" tabindex="1" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">     
                                    <p>Gender</p>
                                    <input type="text" name="G_gender" placeholder="Gender" tabindex="1" required />
                                </div>
                            </div>
                            <div class =  "row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">     
                                    <p>Relation</p>
                                    <input type="text" name="G_rel" placeholder="Relation" tabindex="1" />
                                </div>
                            </div>                    
                        
                    
                        </div>
                        <div class = "EnrollBTN"><input type="submit" value="Enroll" /></div>
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
            if ($con){
                if(isset($_POST["insert"]))
                {
                    // Student Values
                        $name = $_POST ["name"] ;
                        $dob = $_POST ["dob"];
                        $gender = $_POST["gender"];
                        $address = $_POST["address"];
                        $voucher = $_POST["voucher"];
                    // Mother Values
                        $mom_name = $_POST["mom_name"];
                        $mom_cnic = $_POST["mom_cnic"];
                        $mom_email = $_POST["mom_email"];
                        $mom_contact = $_POST["mom_contact"];
                        $mom_income = $_POST["mom_incom"];
                        $mom_address = $_POST["mom_address"];
                        $spouse = $_POST["spouse"];
                    // Father Values 
                        $dad_name = $_POST["dad_name"];
                        $dad_cnic = $_POST["dad_cnic"];
                        $dad_email = $_POST["dad_email"];
                        $dad_contact = $_POST["dad_contact"];
                        $dad_income = $_POST["dad_incom"];
                        $dad_address = $_POST["dad_address"];
                    // Gaurdian Values
                        $G_name = $_POST ["G_name"] ;
                        $G_CNIC = $_POST ["G_CNIC"];
                        $G_email = $_POST["G_email"];
                        $G_contact = $_POST["G_contact"];
                        $G_address = $_POST["G_address"];
                        $G_gender = $_POST["G_gender"];
                        $G_rel = $_POST["G_rel"];
                    //
                    $q = "insert into student(NAME , DOB , GENDER, ADDRESS , VOUCHER)
                    values ('$name' , to_date('$dob', 'yyyy/mm/dd') , '$gender' , '$address' , '$voucher')";

                    $query_id = oci_parse($con, $q);
                    $runselect = oci_execute($query_id);
                    
                    if($runselect == 1){
                        echo "<b>Insertion Successful</b>";
                    }
                    else{
                        echo "<b>Insertion Unsuccessful</b>";
                    }
                }
            }
            else
                { die('Could not connect to Oracle: '); } 
        ?>
    </body>
</html>