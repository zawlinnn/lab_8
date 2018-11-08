<?php
    header("Content-type:text/javascript;charset=utf-8");
    define('HOST','127.0.0.1');
    define('USER','root');
    define('PASS','');
    define('DB','lab_connect_mysql');

    $con = mysqli_connect(HOST,USER,PASS,DB) or die ('Unable to connect');

    $StdId = $_POST['stdid'];
    $StdName = $_POST['stdname'];
    $StdTel = $_POST['stdtel'];
    $StdEmail = $_POST['stdemail'];

    if(isset($_POST)){
        if($_POST['isAdd'] == 'true'){

            //ตัวแปรต่างๆที่เก็บค่าไว้ ถ้าตัวไหนมี $_POST จะเปิดรับค่าจากข้างนอก
            //อัพเดตลง DB

            $sql = "UPDATE content SET std_name ='".$StdName."',std_tel = '".$StdTel."',std_email = '".$StdEmail."' WHERE std_id = '".$StdId."' ";
            mysqli_query($con,$sql);
        }
    }

    mysqli_close($con);
    ?>