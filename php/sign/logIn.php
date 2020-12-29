<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--style-->
    <link rel="stylesheet" href="../../assets/css/style3.css">
    <link rel="stylesheet" href="../../assets/css/reset.css">

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
    <section id="login_wrap">
        <div class="userAccount_cont">
            <div class="center_txt">
                <p>Welcome!</p>
            </div>
            <form name="logIn" method="post" action="logInSave.php" class="inputForm">
                <filedset>
                    <legend class="hide">로그인 영역</legend>
                    <div>
                        <label for="userEmail" class="idPw">Email Address</label>
                        <input type="email" name="userEmail" id="userEmail" class="input_txt" required autofocus>
                    </div>
                    <div>
                        <label for="userPw" class="idPw">Password</label>
                        <input type="password" name="userPw" id="userPw" class="input_txt" required>
                    </div>

                    <div>
                        <button class="btn" type="submit">Log In</button>
                    </div>
                </filedset>
            </form>
            <div class="accountLink">
                <p>Don’t have a account? <a href="signUp.php">Create one</a></p>
            </div>
        </div>
    </section>
    <!-- //section -->

    <!-- script -->
    <script src="../../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../assets/js/explode.js"></script>

</body>

</html>
