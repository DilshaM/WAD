<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $host="localhost";
    $user="root";
    $pwd="";
    $db_name="cars";

    $conn=new mysqli($host,$user,$pwd,$db_name) or
        die("Can not establish a conection!");

    $hire_id=$_GET['bill_id'];
    $clientid=$_GET['hidden_client_id'];
    $carid=$_GET['hidden_car_id'];
    $traid=$_GET['tran_id'];

    $sql_cmd="INSERT INTO hire(hire_id,client_id,car_id) VALUES ($hire_id,$clientid,$carid);";
    $conn->query($sql_cmd);

    $sqlcmd="UPDATE client SET transaction_id ='$traid' WHERE client_id=$clientid;";
    $conn->query($sqlcmd);

    echo "<script type='text/javascript'>window.location.href='index.php';</script>";
    exit();
?>