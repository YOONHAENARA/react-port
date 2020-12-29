<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>LogOut</title>

    <!--style-->
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/style3.css">


    <!--web fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">

</head>

<body>
    <?php
       include '../dom/header.php';
   ?>
    <!-- //header -->

    <main>
        <section id="signUpCont">
            <?php
            include '../connect/session.php';
            
            unset($_SESSION['memberID']);
            unset($_SESSION['youName']);
               
            echo "<div class='signInfo'><p>로그아웃 되었습니다.</p><a href='http://haenara.dothome.co.kr/port/main/index4.html'>메인 페이지 이동하기</a>";
            return;
        ?>

        </section>

    </main>
    <!-- //main -->

    <!-- script -->
    <script src="../../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../assets/js/explode.js"></script>
</body>

</html>
