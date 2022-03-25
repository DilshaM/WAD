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
            width: 100px; 
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
                
                        <a href="index.php">Home</a>
                        <a href="index.php#scroll">Rent Cars</a>
                        <a href="About.html">About</a>
                        <a href="Contact_Us.php">Contact Us</a>
                
					<a id="a1" class="active" href="login.php">Admin Login</a>
            </div>
                
               
        <section class="">
            <section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
            </section>
        </section>

        <div style="background-color: #f0f0f0; margin-left: 20%; margin-right: 20%; margin-top: 5%; margin-bottom: 5%; border-radius: 10px; text-align: center; background-image: linear-gradient(135deg, lightyellow, lightyellow, lightblue);">
            <form action="login_val.php" method="get" autocomplete="off">
                <div><h2 style="padding-top: 20px;">Admin Login</h2></div></br></br>
                <div><label>Username : </label><input type="text" name="abcd"></div></br></br>
                <div><label>Password : </label><input type="password" name="efgh"></div></br></br></br>
                <div><input type="submit" value="Login"></div>
            </form>
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