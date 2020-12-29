<?php
    $host = "localhost";
    $user = "haenara";
    $pw = "rrhdgo0705^^";
    $dbName = "haenara";
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect->set_charset("utf8");

    if(mysqli_connect_error()){
        echo "database connect false";
    }else {
//       echo "database connect good";
    }
?>
