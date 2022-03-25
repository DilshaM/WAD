<?php
    $username=$_GET['abcd'];
    $password=$_GET['efgh'];

    if(isset($username)){
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $host="localhost";
        $user="root";
        $pwd="";
        $db_name="cars";

        $conn=new mysqli($host,$user,$pwd,$db_name) or
            die("Can not establish a conection!");
                            
        $sql_cmd="SELECT * FROM admin WHERE uname='".$username."' AND pass='".$password."';";
        $result=$conn->query($sql_cmd);
            if(mysqli_num_rows($result)==1){
                echo "<script type='text/javascript'>window.location.href='admin_home.php';</script>";
            }else{
                echo ("<script type='text/javascript'>
                        window.alert('Access Denied');
                        window.location.href='login.php';
                        </script>");
        }
    }
    else{
        echo "Something went wrong!";
    }
?>