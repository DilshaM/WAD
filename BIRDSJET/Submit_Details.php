<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>BIRDSJET Company</title>
        <style>
            label{
                margin-left: 10%;
                display: inline-block; 
                width: 100px; 
                font-size: 14pt;
            }
            input[type=text]{
                margin-left: 15px; 
                width: 450px; 
                height: 30px; 
                font-size: 12pt; 
                padding-left: 12px;
                border-radius: 3px;
                border-width: 1px;
                border-color: gray;
                transition: .2s;
            }
            input[type=submit]{
                margin-left: 75%;
                margin-bottom: 10px;
                width: 120px;
                height: 40px;
                border-radius: 5px;
                font-family: Calibri;
                font-size: 14pt;
                font-weight: bold;
                color: white;
                background-color: #405cf5;
                border: none;
                transition: .2s;
            }
            input[type=radio]{
                margin-left: 15px;
            }
            input[type=submit]:hover{
                cursor: pointer;
                transform: scale(1.1);
                outline-color: #405cf5;
                outline-style: solid;
                outline-width: 2px;
                background-color: white;
                color: #405cf5;
            }
            input[type=radio]:hover{
                cursor: pointer;
            }
            input[type=text]:focus{
                border-color: #80bdff;
                outline-color: #bfdeff;
                outline-style: solid;
                outline-width: 4px;
            }
        </style>
    </head>
    <body onload="window.scroll(0,350)">
        <div style="background-image: linear-gradient(90deg, #f1d145, #f1d145, lightblue); margin-bottom: 3px; display: flex; height: 100px">
            <div style="flex: 1;"><a href="index.php" style="text-decoration: none;"><img style="border-radius: 20px;" src="images/logo1.png?t=" height=100 width=300></a></div>
            <img src="images/social_media.png" height="30" width="100" style="margin: 35px;">
        </div>
            
        <div class="topnav">
                
            <a class="active" href="index.php">Home</a>
            <a href="index.php#scroll">Rent Cars</a>
            <a href="About.html">About</a>
            <a href="Contact_Us.php">Contact Us</a>
                
		    <a id="a1" href="login.php">Admin Login</a>
        </div>       
               
        <section class="">
            <section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
            </section>
        </section>

        <section class="listings">
            <div class="wrapper">
                <h2>Car Name/Model</h2>
            </div>
        </section>
        <div class="container" style="grid-template-columns: 40% 60%;">
            <?php
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                $host="localhost";
                $user="root";
                $pwd="";
                $db_name="cars";
                $car=$_GET['car'];

                $conn=new mysqli($host,$user,$pwd,$db_name) or
                    die("Can not establish a conection!");
                    
                $sql_cmd="SELECT * FROM cars WHERE car_id = $car";
                $result=$conn->query($sql_cmd);
                while($row=$result->fetch_assoc()){
                    $image_path = $row['image'];
                    echo "<div style='background-image: linear-gradient(180deg, white, white, lightyellow); border-radius: 10px; height: 52%; margin-left: 20%; outline-color: #405cf5; outline-style: solid; outline-width: 2px; font-family: cursive; font-size: 14pt;'><img height=150 style='width: 60%;margin-top: 5px; margin-left: 20%;' alt='Image path not recognized!' src='".$image_path."?t=".time()."'></br>";
                    echo "</br><center>".$row['car_name']." - ".$row['car_type']."</br>";
                    echo "Hire Cost per Day : ".$row['hire_cost']."<br/>";
                    echo "Capacity : ".$row['capacity']."</center></div>";
                }
                
                echo "<div style='background-color: #f0f0f0; border-radius: 10px; margin-right: 10%; margin-bottom: 10px; background-image: linear-gradient(135deg, lightyellow, lightyellow, lightblue);'>";
                $sql_cmd="SELECT * FROM cars WHERE car_id = $car";
                $result=$conn->query($sql_cmd);
                while($row=$result->fetch_assoc()){
                    echo "<h3 style='margin-left: 20px;'>Proceed to Hire ".$row['car_name']."...</h3>";
                }       
            ?>
            <form action="Payment.php" method="get" autocomplete="off">
            </br><div><label>Full Name : </label><input type="text" name="name" placeholder="Your Name" id="in_name"></div></br></br>
                <div><label>Phone : </label><input type="text" name="phone" placeholder="Your Phone Number" id="in_phone"></div></br></br>
                <div><label>E-Mail : </label><input type="text" name="mail" placeholder="email@address.com" id="in_email"></div></br></br>
                <div><label>ID : </label><input type="text" name="id" placeholder="Your NIC Number" id="in_nic"></div></br></br>
                <div><label>Gender : </label><input type="radio" name="gender" value="Male" id="in_male"><label style="margin: 0; display: inline;">Male</label><input style="margin-left: 50px;" type="radio" name="gender" value="Female" id="in_fe"><label style="margin: 0; display: inline;">Female</label></div></br></br>
                <div><label>Location : </label><input type="text" name="location" placeholder="Your Location" id="in_loc"></div></br></br>
                <div><input type="submit" value="Submit" onclick="return validate()"></div>
                <input name="hid_id" type="hidden" value="<?php echo $_GET['car']?>">
            </form>
        </div>
        </div>
        <script type="text/javascript">
            function validate(){
                let in_name = document.getElementById('in_name').value;
                let in_phone = document.getElementById('in_phone').value;
                let in_email = document.getElementById('in_email').value;
                let in_nic = document.getElementById('in_nic').value;
                let in_male = document.getElementById('in_male').checked;
                let in_fe = document.getElementById('in_fe').checked;
                let in_loc = document.getElementById('in_loc').value;

                if(in_name==""||in_phone==""||in_email==""||in_nic==""||in_loc==""||(in_male==false && in_fe==false)){
                    alert("You have to fill in all the details!");
                    return false;
                }

                if(isNaN(in_phone)||in_phone.length!=10){
                    alert("Check phone number again!");
                    return false;
                }

                if(in_nic.length!=12||isNaN(in_nic)){
                    alert("Check NIC number again!");
                    return false;
                }

                if(!in_email.includes("@")||!in_email.includes(".")){
                    alert("Check email again!");
                    return false;
                }

                alert('Successfully Registered\nProceed for the Payment');
                return true;
            }
        </script>
        <footer>
            <div class="wrapper footer">
                <ul>
                    <li class="links">
                        <ul>
                            <li>OUR COMPANY</li>
                            <li><a href="About.html">About Us</a></li>
                            <li><a href="Contact_Us.php">Contact</a></li>
                        </ul>
                    </li>

                    <li class="links">
                        <ul>
                            <li>OTHERS</li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">...</a></li>
                        </ul>
                    </li>
    
                    <li class="links">
                        <ul>
                            <li>OUR CAR TYPES</li>
                            <li><a href="index.php#scroll">Mercedes</a></li>
                            <li><a href="index.php#scroll">Range Rover</a></li>
                            <li><a href="index.php#scroll">Landcruisers</a></li>
                            <li><a href="index.php#scroll">Others</a></li>
                        </ul>
                    </li>

                    <li class="links">
                        <ul>
                            <img src="images/social_media.png" style="padding: 70px; padding-left: 150px; height: 39px; width: 130px;">
                        </ul>
                    </li>

                </ul>
            </div>
    
             <div class="copyrights wrapper">
                Copyright &copy; All Rights Reserved | Designed by <a href= "#">BIRDSJET</a>
             </div>
        </footer><!--  end footer  -->
    </body>
</html>