<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $host="localhost";
    $user="root";
    $pwd="";
    $db_name="cars";

    $idcar=$_GET['car_i'];
    $newprice=$_GET['zxcv'];

    $conn=new mysqli($host,$user,$pwd,$db_name) or
        die("Can not establish a conection!");
                    
    $sql_cmd="UPDATE cars SET hire_cost=$newprice WHERE car_id=$idcar";
    $result=$conn->query($sql_cmd);

    echo ("<script type='text/javascript'>
                    window.alert('Price Succesfully Updated');
                    window.location.href='admin_home.php';
                    </script>");
    exit();
?>