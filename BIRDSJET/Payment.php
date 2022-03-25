<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="main.css">
        <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $host="localhost";
            $user="root";
            $pwd="";
            $db_name="cars";

            $conn=new mysqli($host,$user,$pwd,$db_name) or
                die("Can not establish a conection!");

            $sql_com="SELECT * FROM client;";
            $result=$conn->query($sql_com);

            $client_id=mysqli_num_rows($result)+1;
            $fname=$_GET['name'];
            $email=$_GET['mail'];
            $phone=$_GET['phone'];
            $id_no=$_GET['id'];
            $location=$_GET['location'];
            $gender=$_GET['gender'];
            $car_id=$_GET['hid_id'];
            
            $sql_cmd="INSERT INTO client(client_id,fname,email,id_no,phone,location,gender,car_id,transaction_id) VALUES (".$client_id.",'".$fname."','".$email."','".$id_no."',".$phone.",'".$location."','".$gender."',".$car_id.",0);";
            $conn->query($sql_cmd);

            $card=$_GET['hid_id'];
            $sql_comm="SELECT * FROM cars WHERE car_id=".$card.";";
            $result2=$conn->query($sql_comm);
            while($row=$result2->fetch_assoc()){ $hire=$row['hire_cost'];}
            echo "<input id='pass' type='hidden' value=".$hire.">";
        ?>
        <title>BIRDSJET Company</title>
        <style>
            label{
                margin-left: 14%;
                display: inline-block; 
                width: 150px; 
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
            input[type=date]{
                width: 167px;
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
            input[type=date]:focus{
                border-color: #80bdff;
                outline-color: #bfdeff;
                outline-style: solid;
                outline-width: 4px;
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
    <body onload="window.scroll(0,340)">
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
        <form action="confirm_pay.php" method="get" autocomplete="off">
            <div style="background-color: #f0f0f0; margin-left: 20%; margin-right: 20%; border-radius: 10px;  background-image: linear-gradient(135deg, lightyellow, lightyellow, lightblue);">
                <div><h2 style="text-align: center; padding-top: 10px;">What are you looking for</h2></div></br>
                <div><h3 style="margin-left: 20px;"><u>Make Payments Here</u></h3></div></br></br>
                <div><label>Pick Your Date : </label><label style="width: auto; margin-left: 15px; margin-right: 15px;">From</label><input id="first_day" type="date"><label style="width: auto; margin-left: 15px; margin-right: 15px;">to</label><input type="date" id="last_day"></div></br></br>
                <div><label>Total Payable : </label><input id="tot" type="text" name="tot_pay" placeholder="Your Total Payable" readonly></div></br></br>
                <div><label>Pay Bill No : </label><input type="text" name="bill_id" value="<?php $host="localhost"; $user="root"; $pwd=""; $db_name="cars"; $conn=new mysqli($host,$user,$pwd,$db_name) or die("Can not establish a conection!"); $sql_com="SELECT * FROM hire;"; $result=$conn->query($sql_com); echo (mysqli_num_rows($result)+1);?>" readonly></div></br></br>
                <div><label>Transaction ID : </label><input type="text" name="tran_id" placeholder="Your Transaction Id" id="in_tra"></div></br></br>
                <div><label>NIC : </label><input type="text" name="nic" placeholder="Your NIC number" id="in_ic"></div></br></br>
                <div><input type="submit" value="Add to Bill" onclick="return validate()" style="margin-bottom: 20px;"></div>
                <input type="hidden" name="hidden_client_id" value="<?php $host="localhost"; $user="root"; $pwd=""; $db_name="cars"; $conn=new mysqli($host,$user,$pwd,$db_name) or die("Can not establish a conection!"); $sql_com="SELECT * FROM client;"; $result=$conn->query($sql_com); $client_id=mysqli_num_rows($result); echo "$client_id";?>">
                <input type="hidden" name="hidden_car_id" value="<?php $pass_id=$_GET['hid_id']; echo "$pass_id";?>">
            </div>
        </form>
        </section>

        <script type="text/javascript">
            document.getElementById('first_day').min = new Date().toISOString().split("T")[0];
            document.getElementById('first_day').onchange = function(){
                document.getElementById('last_day').min = document.getElementById('first_day').value;
            }
            document.getElementById('last_day').onchange = function(){
                let lday = new Date(document.getElementById('last_day').value);
                let fday = new Date(document.getElementById('first_day').value);
                let tdif = Math.abs(lday.getTime()-fday.getTime());
                let mday = (1000*3600*24);
                let dif = Math.ceil(tdif/mday);
                document.getElementById('tot').value = dif * document.getElementById('pass').value;
            }
            function validate(){
                let fday = document.getElementById('first_day').value;
                let lday = document.getElementById('last_day').value;
                let in_tra = document.getElementById('in_tra').value;
                let in_ic = document.getElementById('in_ic').value;

                if(fday==""||lday==""||in_tra==""||in_ic==""){
                    alert("You have to fill in all the details!");
                    return false;
                }

                if(in_ic.length!=12||isNaN(in_ic)){
                    alert("Check NIC number again!");
                    return false;
                }

                alert("Payment Succesfully Done!\nAn Email will be sent with the approval.");
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