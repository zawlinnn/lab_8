<?php
    header("Content-type:text/javascript;charset=utf-8");
    define('HOST','127.0.0.1');
    define('USER','root');
    define('PASS','');
    define('DB','lab_connect_mysql');

    $con = mysqli_connect(HOST,USER,PASS,DB) or die ('Unable to connect');

    $std_id = $_POST['stdid'];
    $std_name = $_POST['stdname'];
    $std_tel = $_POST['stdtel'];
    $std_email = $_POST['stdemail'];

    if(isset($_POST)){
        if($_POST['isAdd'] == 'true'){

            //ตัวแปรต่างๆที่เก็บค่าไว้ ถ้าตัวไหนมี $_POST จะเปิดรับค่าจากข้างนอก
            //อัพเดตลง DB

            $sql = "INSERT INTO content VALUES ('".$std_id."','".$std_name."','".$std_tel."','".$std_email."')";
            mysqli_query($con,$sql);
        }
    }

    mysqli_close($con);
    ?>