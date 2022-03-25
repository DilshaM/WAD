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
            width: 150px; 
            font-size: 14pt;
        }
        input[type=text]{
            margin-left: 15px; 
            width: 350px; 
            height: 30px; 
            font-size: 12pt; 
            padding-left: 12px;
            border-radius: 3px;
            border-width: 1px;
            border-color: gray;
            transition: .2s;
        }
        select{
            margin-left: 15px; 
            width: 368px; 
            height: 35px; 
            font-size: 12pt; 
            padding-left: 12px;
            border-radius: 3px;
            border-width: 1px;
            border-color: gray;
            transition: .2s;
        }
        select:focus{
            border-color: #80bdff;
            outline-color: #bfdeff;
            outline-style: solid;
            outline-width: 4px;
        }
        input[type=file]{
            margin-left: 15px; 
            width: 350px; 
            height: 30px; 
            font-size: 12pt; 
            padding-left: 12px;
            border-radius: 3px;
            border-width: 1px;
            border-color: gray;
            transition: .2s;
        }
        input[type=number]{
            margin-left: 15px; 
            width: 350px; 
            height: 30px; 
            font-size: 12pt; 
            padding-left: 12px;
            border-radius: 3px;
            border-width: 1px;
            border-color: gray;
            transition: .2s;
        }
        input[type=password]{
            margin-left: 15px; 
            width: 350px; 
            height: 30px; 
            font-size: 12pt; 
            padding-left: 12px;
            border-radius: 3px;
            border-width: 1px;
            border-color: gray;
            transition: .2s;
        }
        input[type=submit]{
            margin-bottom: 3%;
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
        input[type=submit]:hover{
            cursor: pointer;
            transform: scale(1.1);
            outline-color: #405cf5;
            outline-style: solid;
            outline-width: 2px;
            background-color: white;
            color: #405cf5;
        }
        input[type=text]:focus{
            border-color: #80bdff;
            outline-color: #bfdeff;
            outline-style: solid;
            outline-width: 4px;
        }
        input[type=number]:focus{
            border-color: #80bdff;
            outline-color: #bfdeff;
            outline-style: solid;
            outline-width: 4px;
        }
        input[type=password]:focus{
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
                
                        <a class="active" href="#scroll">Add Car</a>
                        <a href="#scroll1">Update Price</a>
                        <a href="Reviews.php">Reviews</a>
                
					<a id="a1" href="login.php">Logout</a>
            </div>
                
        <section class="">
            <section class="caption">
                <h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
                <h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
            </section>
        </section>


        <div style="background-color: #f0f0f0; width: 60%; margin-left: 20%; margin-right: 20%; margin-top: 40px; margin-bottom: 40px; border-radius: 10px; background-image: linear-gradient(135deg, lightyellow, lightyellow, lightblue);">
            <form action="Add_Car.php" method="get" id="scroll" autocomplete="off">
                <div><h2 style="margin-left: 5%; padding-top: 20px;">Add New Car Information</h2></div></br></br>
                <div style="text-align: center;"><label>Car ID</label><input type="text" name="carid" value="<?php $host="localhost"; $user="root"; $pwd=""; $db_name="cars"; $conn=new mysqli($host,$user,$pwd,$db_name) or die("Can not establish a conection!"); $sql_cmd="SELECT * FROM cars"; $result=$conn->query($sql_cmd); $count=mysqli_num_rows($result); echo ($count+1);?>" readonly></div></br></br>
                <div style="text-align: center;"><label>Car Name</label><input type="text" name="carname" id="in_name"></div></br></br>
                <div style="text-align: center;"><label>Car Type</label><input type="text" name="cartype" id="in_type"></div></br></br>
                <div style="text-align: center;"><label>Hire Cost</label><input type="text" name="hirecost" id="in_hireco"></div></br></br>
                <div style="text-align: center;"><label>Capacity</label><input type="number" name="capacity" value=4 min=2 max=8></div></br></br>
                <div style="text-align: center;"><label>Upload Image</label><input type="file" id="img" name="image" accept="image/*"/></div></br></br>
                <div style="text-align: right; margin-right: 15%;"><input type="submit" value="Add Car" onclick="return validate1()"></div>
            </form>
        </div>

        <div style="background-color: #f0f0f0; width: 60%; margin-left: 20%; margin-right: 20%; margin-top: 40px; margin-bottom: 40px; border-radius: 10px; background-image: linear-gradient(135deg, lightyellow, lightyellow, lightblue);">
            <form id="scroll1" action="Update_Price.php" method="get" autocomplete="off">
                <div><h2 style="margin-left: 5%; padding-top: 20px;">Update Price of Car</h2></div></br></br>
                <div style="text-align: center;"><label>Select Car</label><select id="sel_car" name="car_i">
                                                                    <option value="">Choose a Car</option>
                                                                        <?php
                                                                            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                                                            $host="localhost";
                                                                            $user="root";
                                                                            $pwd="";
                                                                            $db_name="cars";
                                                                        
                                                                            $conn=new mysqli($host,$user,$pwd,$db_name) or
                                                                                die("Can not establish a conection!");
                                                                        
                                                                            $sql_cmd="SELECT * FROM cars;";
                                                                            $result=$conn->query($sql_cmd);
                                                                            while($row=$result->fetch_assoc()){
                                                                                $id=$row['car_id'];
                                                                                $name=$row['car_name'];
                                                                                echo "<option value=$id>$name</option>";
                                                                            }
                                                                      ?></select></div></br></br>
                <div style="text-align: center;"><label>New Price</label><input id="sel_pri" type="text" name="zxcv"></div></br></br>
                <div style="text-align: right; margin-right: 15%;"><input type="submit" value="Update" onclick="return validate2()"></div>
            </form>
        </div>

        <script type="text/javascript">
            function validate1(){
                let in_name = document.getElementById('in_name').value;
                let in_type = document.getElementById('in_type').value;
                let in_hireco = document.getElementById('in_hireco').value;
                let img = document.getElementById('img').value;

                if(in_name==""||in_type==""||in_hireco==""||img==""){
                    alert("You have to fill in all the details!");
                    return false;
                }

                if(isNaN(in_hireco)){
                    alert("Check hire cost again!");
                    return false;
                }

                return true;
            }

            function validate2(){
                let sel_car = document.getElementById('sel_car').value;
                let sel_pri = document.getElementById('sel_pri').value;

                if(sel_car==""){
                    alert("Please select a car to update price!");
                    return false;
                }

                if(sel_pri==""||isNaN(sel_pri)){
                    alert("Check price again!");
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
