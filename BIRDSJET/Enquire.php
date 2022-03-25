<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $host="localhost";
    $user="root";
    $pwd="";
    $db_name="cars";

    $enq_id=$_GET['enqid'];
    $enq_mail=$_GET['enqmail'];
    $enq=$_GET['enquiry'];

    $conn=new mysqli($host,$user,$pwd,$db_name) or
        die("Can not establish a conection!");
                    
    $sql_cmd="INSERT INTO message(msg_id,email,message,time) VALUES (".$enq_id.",'".$enq_mail."','".$enq."',now())";
    $result=$conn->query($sql_cmd);

    echo ("<script type='text/javascript'>
            window.alert('Enquiry Successfully Sent.');
            window.location.href='Contact_Us.php';
            </script>");
    exit();
?>