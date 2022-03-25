<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $host="localhost";
    $user="root";
    $pwd="";
    $db_name="cars";

    $carid=$_GET['carid'];
    $carname=$_GET['carname'];
    $cartype=$_GET['cartype'];
    $hirecost=$_GET['hirecost'];
    $capacity=$_GET['capacity'];
    $image=$_GET['image'];
    $status="Available";

    $conn=new mysqli($host,$user,$pwd,$db_name) or
        die("Can not establish a conection!");
                    
    $sql_cmd="INSERT INTO cars(car_id,car_name,car_type,image,hire_cost,capacity,status) VALUES (".$carid.",'".$carname."','".$cartype."','images/".$image."',".$hirecost.",".$capacity.",'".$status."')";
    $result=$conn->query($sql_cmd);

    echo ("<script type='text/javascript'>
                    window.alert('Car Successfully Added');
                    window.location.href='admin_home.php';
                    </script>");
    exit();
?>