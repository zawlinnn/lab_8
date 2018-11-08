<?php
    header("Content-type:text/javascript;charset=utf-8");
    define('HOST','127.0.0.1');
    define('USER','root');
    define('PASS','');
    define('DB','lab_connect_mysql');

    $con = mysqli_connect(HOST,USER,PASS,DB) or die ('Unable to connect');

    $StdId = $_POST['stdid'];

    $sql = "DELETE FROM content WHERE std_id = '".$StdId."' ";
   mysqli_query($con,$sql);
       

    mysqli_close($con);
    ?>