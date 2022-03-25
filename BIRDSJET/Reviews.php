<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIRDSJET Company</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
        label{
            display: inline-block; 
            width: 50px; 
            font-size: 14pt;
        }
        textarea{
            margin-left: 5%;
            width: 650px; 
            height: 60px; 
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
    </style>
</head>
<body>
        <div style="background-image: linear-gradient(90deg, #f1d145, #f1d145, lightblue); margin-bottom: 3px; display: flex; height: 100px">
            <div style="flex: 1;"><a href="index.php" style="text-decoration: none;"><img style="border-radius: 20px;" src="images/logo1.png?t=" height=100 width=300></a></div>
            <img src="images/social_media.png" height="30" width="100" style="margin: 35px;">
        </div>
            
        <div class="topnav">
                
                <a href="admin_home.php#scroll">Add Car</a>
                <a href="admin_home.php#scroll1">Update Price</a>
                <a class="active" href="Reviews.php">Reviews</a>
        
            <a id="a1" href="login.php">Logout</a>
        </div>
               
        <section class="">
            <section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
            </section>
        </section>

        <div style="background-color: white; margin: 2%; border-radius: 10px; background-image: linear-gradient(135deg, lightyellow, lightyellow, lightblue);">
            <h3 style="padding: 1%;">Reviews</h3>
                <?php
                    $host="localhost";
                    $user="root";
                    $pwd="";
                    $db_name="cars";
    
                    $conn=new mysqli($host,$user,$pwd,$db_name) or
                        die("Can not establish a conection!");
                    
                    $sql_cmd="SELECT * FROM message ORDER BY time DESC";
                    $result=$conn->query($sql_cmd);
                    while($row=$result->fetch_assoc()){
                        echo "<div style='padding-left: 5%;'><label>".$row['msg_id']."</label><label>".$row['email']."</label><label style='margin-left: 38%; font-size: 10pt; width: 200px;'>".$row['time']."</label>
                         <br><br><textarea readonly>".$row['message']."</textarea></div></br></br></br>";
                    }
                ?>
        </div>

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