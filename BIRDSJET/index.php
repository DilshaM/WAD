<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BIRDSJET Company</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

        <link rel="stylesheet" type="text/css" href="main.css">
        <style>
            .mySlides {display: none;}
            img {vertical-align: middle;}

            /* Slideshow container */
            .slideshow {
            position: relative;
            margin: auto;
            }

            /* Caption text */
            .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .act {
                background-color: #717171;
            }

            /* Fading animation */
            .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
            }
        </style>
    </head> 
    <body>   

        <div style="background-image: linear-gradient(90deg, #f1d145, #f1d145, lightblue); display: flex; height: 100px; margin-bottom: 3px;">
            <div style="flex: 1;"><a href="index.php" style="text-decoration: none;"><img style="border-radius: 20px;" src="images/logo1.png?t=" height=100 width=300></a></div>
            <img src="images/social_media.png" height="30" width="100" style="margin: 35px;">
        </div>
            
            <div class="topnav">
                
                        <a class="active" href="index.php">Home</a>
                        <a href="#scroll">Rent Cars</a>
                        <a href="About.html">About</a>
                        <a href="Contact_Us.php">Contact Us</a>
                
					<a id="a1" href="login.php">Admin Login</a>
            </div>
                
           <br>   
        <section class="">
            <section class="caption">
				<h2 class="caption" style="text-align: center; font-size: 26pt;">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
            </section>
        </section>
            <br>

        <div class="slideshow">

            <div class="mySlides fade">
            <img src="Slideshow/slide1.jpg" style="width: 96%; margin-left: 2%; height: 550px;">
            </div>

            <div class="mySlides fade">
            <img src="Slideshow/slide2.jpg" style="width: 96%; margin-left: 2%; height: 550px;">
            </div>

            <div class="mySlides fade">
            <img src="Slideshow/slide3.jpg" style="width: 96%; margin-left: 2%; height: 550px;">
            </div>

            <div class="mySlides fade">
            <img src="Slideshow/slide4.jpg" style="width: 96%; margin-left: 2%; height: 550px;">
            </div>

            <div class="mySlides fade">
            <img src="Slideshow/slide5.jpg" style="width: 96%; margin-left: 2%; height: 550px;">
            </div>

            <div class="mySlides fade">
            <img src="Slideshow/slide6.jpg" style="width: 96%; margin-left: 2%; height: 550px;">
            </div>

        </div>
            <br>

        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>

        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" act", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " act";
            setTimeout(showSlides, 5000); // Change image every 5 seconds
            }
        </script>

        <section class="listings">
            <div class="wrapper">
                <h2 id="scroll">Car Name/Model</h2>
            </div>
        </section>
        <form action="Submit_Details.php" method="get">
        <div class="container"> 
            <?php
                $host="localhost";
                $user="root";
                $pwd="";
                $db_name="cars";
                $i=1;

                $conn=new mysqli($host,$user,$pwd,$db_name) or
                    die("Can not establish a conection!");
                
                $sql_cmd="SELECT * FROM cars";
                $result=$conn->query($sql_cmd);
                while($row=$result->fetch_assoc()){
                    $image_path = $row['image'];
                    echo "<button class='card' type='submit' name='car' style='background-image: linear-gradient(180deg, white, white, lightyellow); border-radius: 10px; margin: 20px; outline-color: #405cf5; outline-style: solid; outline-width: 2px; font-family: cursive; font-size: 14pt;' value='".$i."'>
                    <img height=150 style='width: 60%;' alt='Image path not recognized!' src='".$image_path."?t=".time()."'></br>";
                    echo $row['car_name']." - ".$row['car_type']."</br>";
                    echo "Hire Cost per Day : ".$row['hire_cost']."<br/>";
                    echo "Capacity : ".$row['capacity']."</button>";
                    $i++;
                }
            ?>
        </div>
        </form>
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


