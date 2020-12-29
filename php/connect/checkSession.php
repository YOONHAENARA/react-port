<?php
    if( !isset($_SESSION['memberID'])) {
        Header("Location:http://haenara.dothome.co.kr/port/php/sign/logIn.php");
        exit;
    }
?>