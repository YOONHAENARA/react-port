<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO</title>

    <!-- style -->
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/style3.css">
    
    <!--web fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">

    <!--font awesome-->
    <script src="https://use.fontawesome.com/1d25719255.js"></script>
</head>

<body>
    <?php
       include '../dom/header.php';
   ?>
    <!-- //header -->
<main>
    <section id="boardCont">
        <div class="container">
            <h1>writing</h1>
            <div class="writeBoard">
                <form action="saveBoard.php" name="boardWrite" method="post">
                    <fieldset>
                        <div>
                            <label for="title">제목</label>
                            <input type="text" name="title" class="input title_input" id="title" required autofocus>
                        </div>
                        <div>
                            <label for="content">내용</label>
                            <textarea class="input" name="content" id="content" rows="13" required></textarea>
                        </div>
                        <div class="form_btn">
                            <input type="submit" value="글쓰기" class="btn">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
</main>
    <!--
    <script src="static/js/jquery-3.5.1.min.js"></script>
    <script src="static/js/weatherApi.js"></script>
    <script src="static/js/currentdate.js"></script>
-->
</body>

</html>