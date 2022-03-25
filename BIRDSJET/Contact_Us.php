<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIRDSJET Company</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
        p{
            text-align:left;
            font-size: 14pt;
            padding: 1%;
            padding-left: 4%;
        }
        label{
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
        input[type=text]:focus{
            border-color: #80bdff;
            outline-color: #bfdeff;
            outline-style: solid;
            outline-width: 4px;
        }
        textarea{
            width: 618px; 
            height: 80px; 
            font-size: 12pt; 
            padding-left: 12px;
            border-radius: 3px;
            border-width: 1px;
            border-color: gray;
            transition: .2s;
            resize: none;
        }
        textarea:focus{
            border-color: #80bdff;
            outline-color: #bfdeff;
            outline-style: solid;
            outline-width: 4px;
        }
        input[type=submit]{
            margin-left: 36%;
            margin-bottom: 20px;
            width: 180px;
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
        input[type=submit]:hover{
            cursor: pointer;
            transform: scale(1.1);
            outline-color: #405cf5;
            outline-style: solid;
            outline-width: 2px;
            background-color: white;
            color: #405cf5;
        }
        .row{
            display: flex;
        }
        .column{
            flex: 50%;
        }
        .bucket {
            position: relative;
            text-align: center;
            color: white;
        }
        .top-center{
            position: absolute;
            left: 0;
            top: 0;
        }
        .bottom-left{
            position: absolute;
            bottom: 0;
            left: 0;
        }
    </style>
</head>
<body>
        <div style="background-image: linear-gradient(90deg, #f1d145, #f1d145, lightblue); margin-bottom: 3px; display: flex; height: 100px">
            <div style="flex: 1;"><a href="index.php" style="text-decoration: none;"><img style="border-radius: 20px;" src="images/logo1.png?t=" height=100 width=300></a></div>
            <img src="images/social_media.png" height="30" width="100" style="margin: 35px;">
        </div>
            
            <div class="topnav">
                
                        <a href="index.php">Home</a>
                        <a href="index.php#scroll">Rent Cars</a>
                        <a href="About.html">About</a>
                        <a class="active" href="Contact_Us.php">Contact Us</a>
                
					<a id="a1" href="login.php">Admin Login</a>
            </div>
                
        <div class="bucket">
            <img src="images/RentalCar(2).jpg" alt="car" style="width: 96%; height: 300px; margin: 2%; margin-bottom: 0; border-radius: 10px;">
            <div class="top-center" style="width: 100%;"><p style="font-size: xx-large; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-align: left; margin-top: 28px;">CONTACT BIRDSJET SRI LANKA</p></div>
            <div class="bottom-left" style="width: 100%;"><p style="font-size: xx-large; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-align: left; margin-bottom: 5px;">How can you contact us?</p></div>
        </div>

        <div style="background-color: white; margin: 2%; margin-top: 1%; border-radius: 10px; background-image: linear-gradient(135deg, lightyellow, lightyellow, lightblue);">
            <h3 style="padding: 1%;">Our Address</h3>
            <p>
                <b>BIRDSJET (Pvt) Ltd</b><br>
                Sri Dalada Veediya,<br>
                Kandy 20000,<br>
                Sri Lanka.
            </p>
            <div style="display: inline;">
                <div style="float:left; width: 20%; margin-left: 1%;"><h3 style="padding: 1%; color: red;">Our Hotline</h3>
                <p style="color: red; margin-left: 6%;">
                    +94 XXX XXX XXX
                </p></div>
                <div style="float:left; width: 20%;"><h3 style="padding: 1%;">Our Mobile</h3>
                <p style=" margin-left: 6%;">
                    +94 XXX XXX XXX
                </p></div>
                <div style="float:left; width: 20%;"><h3 style="padding: 1%;">Our Fax</h3>
                <p style=" margin-left: 6%;">
                    +94 XXX XXX XXX
                </p></div>
            </div><br><br><br><br><br>
            <h3 style="padding: 1%;">Our Email</h3>
            <p style="padding-top: 0;">
                info@birdsjet.com
            </p>
            <div class="row">
                <div class="column">
                    <h3 style="padding: 2%;">Team Members</h3>
                    <p style="padding-top: 0; padding-left: 8%;">
                        <b>Director / CEO</b><br>
                        Miss. M.A.Dilsha Mallawaarachchie<br>
                        KADSE202F-005<br>
                        +94 772 450 326<br>
                        sandanidilsha@gmail.com<br>
                    </p>
                    <p style="padding-top: 0; padding-left: 8%;">
                        <b>Developer</b><br>
                        Mr. D.M.G.Bimsara Nawarathna<br>
                        KADSE202F-009<br>
                        +94 778 682 110<br>
                        bimsaranawarathna@gmail.com<br>
                    </p>
                    <p style="padding-top: 0; padding-left: 8%;">
                        <b>Designer</b><br>
                        Mr. Imran Rasheed<br>
                        KADSE202F-033<br>
                        +94 770 554 690<br>
                        imran.2001r@gmail.com<br>
                    </p>
                    <p style="padding-top: 0; padding-left: 8%;">
                        <b>Marketing</b><br>
                        Mr. S.A.Wijesinghe<br>
                        KADSE202F-027<br>
                        +94 716 997 281<br>
                        shammikawijesinghe660@gmail.com<br>
                    </p>
                    <p style="padding-top: 0; padding-left: 8%;">
                        <b>Marketing</b><br>
                        Miss. Roshain Fernando<br>
                        KADSE202F-028<br>
                        +94 762 055 069<br>
                        roshainfernando@gmail.com<br>
                    </p>
                </div>
                <div class="column" style="margin-top: 5%;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5396145561886!2d80.6349670147227!3d7.2931031947361875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662bf613e1db%3A0x23372138b05125f6!2sSri%20Dalada%20Veediya%2C%20Kandy!5e0!3m2!1sen!2slk!4v1647220362586!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <div style="background-color: white; margin: 2%; border-radius: 10px; background-image: linear-gradient(135deg, lightyellow, lightyellow, lightblue);">
            <h3 style="padding: 1%;">Enquire via Email</h3>
            <form style="margin-left: 8%;" action="Enquire.php" method="get" autocomplete="off">
                <div><label>Enquire ID</label><input type="text" name="enqid" value="<?php $host="localhost"; $user="root"; $pwd=""; $db_name="cars"; $conn=new mysqli($host,$user,$pwd,$db_name) or die("Can not establish a conection!"); $sql_cmd="SELECT * FROM message"; $result=$conn->query($sql_cmd); $count=mysqli_num_rows($result); echo ($count+1);?>" readonly></div></br></br>
                <div><label>E Mail</label><input type="text" name="enqmail" id="mail_in"></div></br></br>
                <div><label>Enquiry</label><br><br><textarea name="enquiry" id="msg_in"></textarea></div></br></br>
                <input id="contact" type="submit" value="Send Enquiry" onclick="return validate()">
            </form>
        </div>

        <script type="text/javascript">
            function validate(){
                let mail_in = document.getElementById('mail_in').value;
                let msg_in = document.getElementById('msg_in').value;

                if(mail_in==""||msg_in==""){
                    alert("You have to fill in the details!");
                    return false;
                }
                
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